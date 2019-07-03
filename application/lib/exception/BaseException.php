<?php
/** Created By wene<china_wangyu@aliyun.com>, Data: 2019/7/3 */


namespace app\lib\exception;


class BaseException extends \Exception
{

    public $code = 400;
    public $message = '发生错误';
    public $error_code = 10000;

    public function __construct($params = [])
    {
        isset($params['code']) && $this->code = $params['code'];
        isset($params['message']) && $this->message = $params['message'];
        isset($params['error_code']) && $this->error_code = $params['error_code'];
        if(class_exists('\LinCmsTp5\exception\BaseException')){
            throw  new \LinCmsTp5\exception\BaseException([
                'code' => $this->code,
                'msg' => $this->message,
                'error_code' => $this->error_code,
            ]);
        }
        parent::__construct($this->error_code.$this->message,$this->code);
    }

}