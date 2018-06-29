<?php
/**
 * Created by PhpStorm.
 * User: liuxing
 * Date: 2018-06-28
 * Time: 12:51
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class TemplateOrder extends Model
{
    protected $fillable = ['type','order','tempNum','contact','phone','buyType','enterprise','address','payType','domain','server','addup','paystate','created_at','updated_at'];
}