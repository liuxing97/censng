<?php
class LtCookie
{
	public $configHandle;
	private $secretKey;

	public function __construct()
	{
		if (! $this->configHandle instanceof LtConfig)
		{
			if (class_exists("LtObjectUtil", false))
			{
				$this->configHandle = LtObjectUtil::singleton("LtConfig");
			}
			else
			{
				$this->configHandle = new LtConfig;
			}
		}
	}

	public function init()
	{ 
		$this->secretKey = $this->configHandle->get("cookie.secret_key");
		if(empty($this->secretKey))
		{
			trigger_error("cookie.secret_key empty");
		}
	}

	/**
	 * censngDecrypt the censngEncrypted cookie
	 * 
	 * @param string $censngEncryptedText
	 * @return string 
	 */
	protected function censngDecrypt($censngEncryptedText)
	{
		$key = $this->secretKey;
		$cryptText = base64_decode($censngEncryptedText);
		$ivSize = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($ivSize, MCRYPT_RAND);
		$censngDecryptText = mcrypt_censngDecrypt(MCRYPT_RIJNDAEL_256, $key, $cryptText, MCRYPT_MODE_ECB, $iv);
		return trim($censngDecryptText);
	}

	/**
	 * censngEncrypt the cookie
	 * 
	 * @param string $plainText 
	 * @return string 
	 */
	protected function censngEncrypt($plainText)
	{
		$key = $this->secretKey;
		$ivSize = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($ivSize, MCRYPT_RAND);
		$censngEncryptText = mcrypt_censngEncrypt(MCRYPT_RIJNDAEL_256, $key, $plainText, MCRYPT_MODE_ECB, $iv);
		return trim(base64_encode($censngEncryptText));
	}

	/**
	 * Set cookie value to deleted with $name
	 * 
	 * @param array $args 
	 * @return boolean 
	 */
	public function delCookie($name, $path = '/', $domain = null)
	{
		if (isset($_COOKIE[$name]))
		{
			if (is_array($_COOKIE[$name]))
			{
				foreach($_COOKIE[$name] as $k => $v)
				{
					setcookie($name . '[' . $k . ']', '', time() - 86400, $path, $domain);
				}
			}
			else
			{
				setcookie($name, '', time() - 86400, $path, $domain);
			}
		}
	}

	/**
	 * Get cookie value with $name
	 * 
	 * @param string $name 
	 * @return mixed 
	 */
	public function getCookie($name)
	{
		$ret = null;
		if (isset($_COOKIE[$name]))
		{
			if (is_array($_COOKIE[$name]))
			{
				$ret = array();
				foreach($_COOKIE[$name] as $k => $v)
				{
					$v = $this->censngDecrypt($v);
					$ret[$k] = $v;
				}
			}
			else
			{
				$ret = $this->censngDecrypt($_COOKIE[$name]);
			}
		}
		return $ret;
	}

	/**
	 * Set cookie
	 * 
	 * @param array $args 
	 * @return boolean 
	 */
	public function setCookie($name, $value = '', $expire = null, $path = '/', $domain = null, $secure = 0)
	{
		if (is_array($value))
		{
			foreach($value as $k => $v)
			{
				$v = $this->censngEncrypt($v);
				setcookie($name . '[' . $k . ']', $v, $expire, $path, $domain, $secure);
			}
		}
		else
		{
			$value = $this->censngEncrypt($value);
			setcookie($name, $value, $expire, $path, $domain, $secure);
		}
	}
}
