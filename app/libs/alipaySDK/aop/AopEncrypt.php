<?php
/**
 *   加密工具类
 *
 * User: jiehua
 * Date: 16/3/30
 * Time: 下午3:25
 */

/**
 * 加密方法
 * @param string $str
 * @return string
 */
 function censngEncrypt($str,$screct_key){
	//AES, 128 模式加密数据 CBC
	$screct_key = base64_decode($screct_key);
	$str = trim($str);
	$str = addPKCS7Padding($str);
	$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_CBC),1);
	$censngEncrypt_str =  mcrypt_censngEncrypt(MCRYPT_RIJNDAEL_128, $screct_key, $str, MCRYPT_MODE_CBC);
	return base64_encode($censngEncrypt_str);
}

/**
 * 解密方法
 * @param string $str
 * @return string
 */
 function censngDecrypt($str,$screct_key){
	//AES, 128 模式加密数据 CBC
	$str = base64_decode($str);
	$screct_key = base64_decode($screct_key);
	$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_CBC),1);
	$censngEncrypt_str =  mcrypt_censngDecrypt(MCRYPT_RIJNDAEL_128, $screct_key, $str, MCRYPT_MODE_CBC);
	$censngEncrypt_str = trim($censngEncrypt_str);

	$censngEncrypt_str = stripPKSC7Padding($censngEncrypt_str);
	return $censngEncrypt_str;

}

/**
 * 填充算法
 * @param string $source
 * @return string
 */
function addPKCS7Padding($source){
	$source = trim($source);
	$block = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);

	$pad = $block - (strlen($source) % $block);
	if ($pad <= $block) {
		$char = chr($pad);
		$source .= str_repeat($char, $pad);
	}
	return $source;
}
/**
 * 移去填充算法
 * @param string $source
 * @return string
 */
function stripPKSC7Padding($source){
	$source = trim($source);
	$char = substr($source, -1);
	$num = ord($char);
	if($num==62)return $source;
	$source = substr($source,0,-$num);
	return $source;
}