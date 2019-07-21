## bate-0.0.2 版本

### 重置注解扩展，打包并优化之前的扩展包
    * 去掉
        -  `wangyu/tp-route`
        -  `wangyu/tp-doc`
        -  `wangyu/tp-validate`
        -  `wangyu/tp-exception`
    * 新增
        - `wangyu/tp-anntation`

### 平滑升级 `0.0.1` => `bate-0.0.2` 或者 `0.0.2`

1. 更改 `route/route.php` 路由配置文件

    ```php
    <?php
    
    \WangYu\annotation\Route::reflex();
    return [];
    ```
2. 更改 `config/app.php`中 `exception_handle` 选项

    ```php
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => \WangYu\exception\TpHttpException::class,
    ```
3. 更改 `config/middleware.php` 中间件注册中 `Validate` 选项

    ```php
    <?php
    return [
        // 默认中间件命名空间
        'default_namespace' => 'app\\http\\middleware\\',
        'Validate' => \WangYu\annotation\Validate::class,
    ];
    ```
   
4. 更改 `application/command.php` 
   ```php
    <?php
    return [
        'trr:doc' => \WangYu\annotation\DocCommand::class,
    ];
   ```

5. 更新 注解类路由分组名称 `@route` => `@group`

   -  application/api/controller/Auth.php
   
       0.0.1版本
       ```php
      <?php
        /** Created By china_wangyu@aliyun.com, Data: 2019/7/3 */
        
        namespace app\api\controller;
        
        use app\lib\token\Token;
        
        /**
         * Class Auth
         * @doc('授权类')
         * @route('auth')
         * @middleware('Validate')
         * @package app\api\controller
         */
        class Auth
        {}
       ```
       bate-0.0.2 版本及以上
       ```php
      <?php
       /** Created By china_wangyu@aliyun.com, Data: 2019/7/3 */
       
       namespace app\api\controller;
       
       use app\lib\token\Token;
       
       /**
        * Class Auth
        * @doc('授权类')
        * @group('auth')
        * @middleware('Validate')
        * @package app\api\controller
        */
       class Auth
       {} 
       ```
   - application/api/controller/v1/Book.php
     
     > 和上面`Auth`类似,只需要把`类注解中` `@route` 替换成 `@group`
     
6. 注解验证器类需要继承 `WangYu\validate\Validate`

   必须继承，不然无法使用注解验证器`@validate`函数
   

7. 生成 `Api Markdown 文档` 命令变更

   - 0.0.1 版本
       ```bash
       php think trr:build
       ```
   
   - bate-0.0.2版本 及 0.0.2 版本 及 以上
       ```bash
       php think trr:doc
       ```


## 0.0.1 版本

* 完善代码已知缺陷
* 完善使用文档
* 完善`API markdown文档输出`,优化文档内容，备份上一次文档
* 完善注解验证器`@validate()和@param()`
* 完善注解路由`@route` 和 `@middleware`


## bate-0.0.1 版本

本次更新为测试版本更新，主要更新如下：

* 预设API授权接口模板 `Auth.php`, 文件路径：`application/api/controller/Auth.php`
* 预设API接口模板 `Book.php`，文件路径：`application/api/controller/v1/Book.php`
* 完善反射路由支持，引用 `WangYu/tp-route`
* 完善反射路由参数验证支持，引用 `WangYu/tp-validate`
* 预设输出API文档命令注册 `php think trr:build`
* 优化API文档内容
* 完善`README.md`文档
* 初始化第一个`bate-0.0.1`版本