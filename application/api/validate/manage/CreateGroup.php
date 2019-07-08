<?php
/** Created By wene<china_wangyu@aliyun.com>, Data: 2019/7/8 */


namespace app\api\validate\manage;


use WangYu\validate\BaseValidate;

class CreateGroup extends BaseValidate
{
    protected $rule = [
        'nickname' => 'require|max:1,3'
    ];

    protected $message = [
        'nickname' => '名称必填'
    ];
}