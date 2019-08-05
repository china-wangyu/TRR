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

    protected $scene = [
        'add'  =>  ['name'],
        'edit'  =>  ['name'],
    ];

    // edit 验证场景定义
    public function sceneEdit()
    {
        return $this->only(['name','age'])
            ->append('name', 'min:5')
            ->remove('age', 'between')
            ->append('age', 'require|max:100');
    }
}