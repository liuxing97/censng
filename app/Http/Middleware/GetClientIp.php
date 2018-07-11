<?php
/**
 * Created by PhpStorm.
 * User: liuxing
 * Date: 2018-07-11
 * Time: 23:49
 */

namespace App\Http\Middleware;


use App\Notice;
use Closure;

class GetClientIp
{
    function get_client_ip(){
        $ip=false;
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
            for ($i = 0; $i < count($ips); $i++) {
                if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }
    public function handle($request, Closure $next)
    {
        // 执行动作
        $ip = $this->get_client_ip();
        // 存储到数据库
        $noticeObj = new Notice();
        $noticeObj -> type = 'client';
        $noticeObj -> describe = $ip;
        $noticeObj -> save();
        return $next($request);
    }
}