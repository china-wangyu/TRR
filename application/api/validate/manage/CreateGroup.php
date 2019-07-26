<?php
/** Created By wene<china_wangyu@aliyun.com>, Data: 2019/7/8 */


namespace app\api\validate\manage;



class CreateGroup extends \WangYu\validate\Validate
{
    protected $rule = [
        'name' => 'require|max:1,3'
    ];

    protected $message = [
        'name.require' => '名称必填'
    ];
}