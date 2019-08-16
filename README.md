<h1 align="center">
  <a href="https://github.com/china-wangyu/TRR">
   <img src="https://china-wangyu.github.io//TRR/TRR-logo.png" alt="TRR" width="600"/>
  </a>
  <br>
  TRR
</h1>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-%3E%3D7.1-blue.svg" alt="php version" data-canonical-src="https://img.shields.io/badge/PHP-%3E%3D7.1-blue.svg" style="max-width:100%;"></a>
  <a href="https://www.kancloud.cn/manual/thinkphp5_1/353946" rel="nofollow"><img src="https://img.shields.io/badge/ThinkPHP-5.1.*-green.svg" alt="ThinkPHP version" data-canonical-src="https://img.shields.io/badge/ThinkPHP-5.1.*-green.svg" style="max-width:100%;"></a>
  <img src="https://img.shields.io/badge/license-license--2.0-lightgrey.svg" alt="LISENCE" data-canonical-src="https://img.shields.io/badge/license-license--2.0-lightgrey.svg" style="max-width:100%;"></a>
</p>

# 简介

## TRR 是什么？

`TRR`是`ThinkPHP51 Reflection Restful API`（注：API设计风格） 的字母第一个字符大写后拼接而来，
从`ThinkPHP51 Reflection Restful API`全称可以看出来，
这套接口框架设计主要围绕`反射`来做`Restful API接口设计`的。

## TRR 可以做什么？

1. 你可以先了解一下`ThinkPHP5.1`能做什么。
2. `ThinkPHP5.1` 能做的都能做，而且在反射路由方面，我们比`ThinkPHP5.1`更为专注

专注做什么:

* 反射 API 接口路由
* 反射 API 接口文档生成
* 反射 API 参数快速验证
* 让接口开发更简单、直观、迅捷
* 让接口维护更轻松、明了、快速

我们专注研究PHP反射相关的知识点，想让`PHP` `web`功能开发、接口开发更加简单、迅捷。

想让更多的朋友更加专注于业务开发，不再反复去做路由添加、修改，接口文档编写等一些列的问题
 
我们只想你的项目更快、更稳定、更以维护的成型。


## 使用文档

> 标注： `master` 分支属于 `TRR-v0.0.2`

TRR-v0.0.1文档：[👉 点我了解](https://china-wangyu.github.io/views/php/trr/v0.0.1/)

TRR-v0.0.2文档：[👉 点我了解](https://china-wangyu.github.io/views/php/trr/v0.0.2/)

未完待续·····

## 快速开始

在你项目文件夹内,点击鼠标右键 打开 `git Bash Here`

在 `git bash` 命令行里使用以下命令

### 1. 检查服务端必备环境

* 安装`PHP`环境(version: `7.1` 及以上)
* 安装`Git`环境(version: `1.8` 及以上)
* 安装`Composer`环境(version: `1.8` 及以上)

### 2. 获取项目源码

获取项目源码

```bash
git clone https://github.com/china-wangyu/TRR.git
```

在进入项目目录

```bash
cd TRR
```

### 3. 安装项目依赖

安装依赖

```bash
composer install
```

### 4. 运行项目

为了防止PHP各种集成和非集成软件环境问题，本项目开发期间希望各位使用 `ThinkPHP5.1`内置服务
有关文档: [https://www.kancloud.cn/manual/thinkphp5_1/518750](https://www.kancloud.cn/manual/thinkphp5_1/518750)

```bash
php think run -H 127.0.0.1 -p 8000
```

效果如下，就代表你启动内置服务成功了

```bash
wy@Mac TRR (master) $ php think run -H 127.0.0.1 -p 8000
ThinkPHP Development server is started On <http://127.0.0.1:8000/>
You can exit with `CTRL-C`
Document root is: /Users/wy/Desktop/TRR/public
[Mon Jul 29 16:39:08 2019] Failed to listen on 127.0.0.1:8000 (reason: Address already in use)
```

### 5. 浏览器访问

然后你可以直接在浏览器里面访问

```
http://127.0.0.1:8000/
```


## 其他功能

### 创建 `JWT` 的 `Token`

route: `http://127.0.0.1:8000/auth?name=trr&password=trr`

method: `post`

返回效果：

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjI0MDk2MDgsImV4cCI6MTU2MjQxNjgwOCwidXVpZCI6MTAwLCJzaWduYXR1cmUiOiJ0cnIifQ.MXXGcK2xjAznzcC-PQ66dRAo30Wn1poNLCNbFcO7ORA",
    "refresh_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjI0MDk2MDgsInV1aWQiOjEwMCwic2lnbmF0dXJlIjoidHJyIn0.RBs5iOSTjC89Z6H4CPl9tNyXHOhtmuPQPd7JOB_n5JY"
}
```

### 刷新 `JWT` 的 `Token`

route: `http://127.0.0.1:8000/auth/refresh`

method: `get`

header: 需要设置：`authorization`

返回效果：

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjI0MTE0OTMsImV4cCI6MTU2MjQxODY5MywidXVpZCI6MTAwLCJzaWduYXR1cmUiOiJ0cnIifQ.4siwrzghm-r_SZNz-SUwkI3Of-9Hx9vOHMYdHXjf7rA"
}
```

### 生成 `markdown` 格式的 `API` 文档

- 命令行生成

    在项目根目录下打开 `cmd` 或 `终端` 输入以下命令
    
    ```bash
    php think trr:doc
    ```
    
    效果如下，代表文档生成成功：
    
    ```bash
    F:\project\open-source-object\Trr\2019-7-6\TRR [master ≡ +0 ~217 -0 !]
    λ  php think trr:doc
    Successful. Output Document Successful . File Path ：api-doc.html
    ```
 
注意 ！
注意 !
注意 !

## 演示地址 

* 官方运行示例: [演示站点](http://trr.ibs3.cn)
* 官方`API Markdown文档`示例: [演示站点](http://trr.ibs3.cn/apiShow)
* 官方`API Html文档`示例: [演示站点](http://trr.ibs3.cn/apiView)
* 本地运行示例: http://127.0.0.1:8000/
* 本地`API Markdown文档`示例: http://127.0.0.1:8000/apiShow
* 本地`API Html文档`示例: http://127.0.0.1:8000/apiView


## 催更、提问与交流

读者对本教程或者GitHub项目有任何疑问、建议都可以在作者GitHub仓库提个[issues](https://github.com/china-wangyu/TRR/issues)  

或

加【TRR 官方群】QQ群: `860613750`


## 下阶段开发计划

- [ ] 注解接口自检（接口一键验证）
- [x] 注解接口文档生成
- [x] 注解验证器场景
- [x] 注解验证器
- [x] 注解路由分组
- [x] 注解中间件
- [x] 注解路由

