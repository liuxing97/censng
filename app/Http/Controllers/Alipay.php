<?php
/**
 * Created by PhpStorm.
 * User: liuxing
 * Date: 2018-07-02
 * Time: 12:20
 */

namespace App\Http\Controllers;
use AopClient;


class Alipay
{
    //支付宝网关地址
    public $gateway_url = "https://openapi.alipay.com/gateway.do";
    public $alipay_public_key = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmenv7erS+Fcuc2xvjP4wVQftVJ9IxzVmkc66Tl+I2yPt/11PeHZcSUkSeRRXbtM071WYDGYuhAzWpnfbpWNnFksICZrvaqCIx3B7JMh4ABwIOmR4yskyK3MR5LXUCY0oYZrrlg/IGaLl5FVjuthObSjLNw8+8BEfBiEl5t9MA5gTHsroRB6J9mY+tgTDvg/FYz2jnpzZSvl+I67N/1zk0oUWpOpPBzLzOV7UdCp1OY8jPlyssVILhifXsDYPhfPhRqtkiOATM0G2YtVTAbuWxVPoxrM2KZtq5InrP7ZzucWM80q3o2j4Sv1UhMohrRZmRspYmRWhqsGsvwnkv8MsEQIDAQAB';
    public $signtype = 'RSA2';
    public $appId = '2018041502561560';
    public $rsaPrivateKey = 'MIIEpAIBAAKCAQEAxzByOGz0HQuVfVxEAB/riAg8We2WZJkEAfC03vofSK7qG6XT37LdR6oAJFbV9qnN3YjBZNx6iwQaOBL6fbpq7kH6hQHZchax3v2Yb2xmW406J+MYrx/yRil7X4oSjY215RxR9kCrJcQMiYGT6V0J4N0FOM5We0Dzxu18R8LakyL4Hww2Z5B9hzk5Or74cxPPJl0rN1qTyfGtek4/J0RLkPSE0YZ97DOtqtQ8GvSxzw7442CzdD4aSEYBYGsOhvMpXk2s92IW+NtNPjWu8wiDavH17MAFon08DDidE+Lsvi42+KfCTzBCga2yu0v5bcoSQ0jBHQ8SnZ25wYXk6zJtBQIDAQABAoIBAQCOisHCVV3gBzEkM8nJ2Q3hHBusMxSjysiOZuXYh1+p0NphjKrxc3tc1HAjkSyuxtc2iK308r6TCw2EQTiWjrgE5pxTYH5uYYVKUWormoQpUghjEOXSNOdYhEjwlssuF1IqsbiJo7+WWBSstljV8CmojCI3g5lpvJJ3Me31IKDwFxnnM+xZqiauZDizVc0bDyJjEaZW0yP6/Iu8WzygIxsrB7Zwv1FGYvBqkj8a/OtIhRkgZ0lambpjNecctB0shDeS0bBOdmYMqmiPzIA0Y9KYn5GXIXn+7+tvC0LSw3bAAhp3NcgSlu1EMrAKi8fqEGoqYzNZb8UQguAA1E9oDgClAoGBAP1e+u5Di/HDT2L+s7CCrzaa/RzzbGChDq7dq2nY/4RUBOtkvzbcQoTJfFPWHOtzX26uoWN9P9+hHQxRJzWN8gHtSC++PwYRq/avmFX4xbQEHcONEfJ0U16a3wdkfVpY13vnBFyZXspIFvTfN6rHh9YzFVAARN2VwHVTF9zHxljLAoGBAMlBi4RtUrzVp3oV/szmHPudpQ4MxPH9Ubj47Hl2upPLx/TzgH8g5++S348oMNy2w8maruqOhCYieOVTJtHYiPTg/E0/TSBxc+E2uI2LPVc9jO8z3o/7anyTZBwH0tJbPytKDm6nnXjtrVxK4LG5B2KGdUuLFwRYL+KLhakXoSdvAoGBANER1MFSn2GJJjKrtR5LV8UZMw72llFN1M3aQB2BX6aTpdOPOHFOYt0rXRnYrdhjRTYRhz6PFWu0iEGnnVEFpdKNN2md9GdPobRWxL78HjcixmScPVjxP/HqnWp+Mymf8X9d6y11qNAFmFvK7SZQqvfHAykWb7zgWwT04dXeSv7tAoGAMqEpnxP9l4HMUxtLcXKGYgpDpqgxt4r5zyXYH6ptv5apZAcKEXFOx+dUFGiQ+kWENaiTTnCx8AIGFfL4NhxaP/iFoE1Hctz3wPWKMhmQQe07EkYjPGeMX3CY47BYKhFIb/R+cvn51J0+WpR/uFYK9I9M3MdN8ArbaQuegW5vXUMCgYAewAe0IeSPouXve92r18DFGgDsVZVP1C6R9DiDtCgSfmP9zGRFe15TUExMvyR2EzQaxpSqLPadSMsGGqGyFdOJgtBTx4z3c1JTqHLuINqWkdS8vl4JNLRophKE2xen9s3UnkJ+4HBP0HwFEJv2KFOGBZRO4usEL9pBJ7Frt69lAA==';
    public $apiVersion = '1.0';
    public $postCharset= 'utf-8';
    public $format='json';
    public $aop;
    function __construct()
    {
        $aop = new AopClient ();
        $aop->gatewayUrl = $this -> gateway_url;
        $aop->appId = $this -> appId;
        $aop->rsaPrivateKey = $this -> rsaPrivateKey;
        $aop->apiVersion = $this -> apiVersion;
        $aop->signType = $this -> signtype;
        $aop->postCharset = $this -> postCharset;
        $aop->format= $this -> format;
        $aop->alipayrsaPublicKey = $this -> alipay_public_key;
        $this -> aop = $aop;
    }


    /**
     * 验签方法
     * @param $arr 验签支付宝返回的信息，使用支付宝公钥。
     * @return boolean
     */
    function check($arr){
        $aop = $this -> aop;
        $aop -> alipayrsaPublicKey = $this->alipay_public_key;
        $result = $aop ->rsaCheckV1($arr, $this->alipay_public_key, $this->signtype);
        return $result;
    }

}