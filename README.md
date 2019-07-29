<h1 align="center">
  <a href="https://github.com/china-wangyu/TRR">
   <img src="http://pu7s2yelz.bkt.clouddn.com/TRR_logo_2.png" alt="TRR" width="600"/>
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

TRR 是` ThinkPHP51 Reflection Restful API`（注：API设计风格） 的字母第一个字符大写后拼接而来，
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


## 使用须知

在使用TRR时必定会用到的技能，你得做一个评估，查看自己是否可以无障碍使用。

### 涉及技术或框架

* ` PHP7.1 ` 一种支持热编译的脚本语言

    你需要熟练掌握` PHP7.1 `相关知识点，如果你精通此技能那就再好不过了，不精通也没关系，请根据我收集的教程和资料进行学习
    
    - `PHP` 官方文档: [https://php.net/manual/zh/](https://php.net/manual/zh/)
    - 【极客学院】PHP全套教学视频: [https://www.bilibili.com/video/av10274152?from=search&seid=2228250606023131784](https://www.bilibili.com/video/av10274152?from=search&seid=2228250606023131784)
    - 韩顺平php从入门到精通:  https://pan.baidu.com/s/1YDQoLodysxCP4rAyyTgD_Q 提取码: 6hyy
    
     
* `ThinkPHP5.1` ：中国比较流行且会一直流行的PHP框架
    
    如果你对`ThinkPHP5.1`不太了解，或者一知半解，请到官方文档进行查阅，补充效果知识点。
    [官方文档](https://www.kancloud.cn/manual/thinkphp5_1/content)
* `Reflection` PHP 反射机制

    如果你对 PHP 反射相关知识点不是很了解，推荐先进行了解一下
    
    - `PHP`官方文档: [https://php.net/manual/zh/book.reflection.php](https://php.net/manual/zh/book.reflection.php)
    - `ThinkPHP5.1` 反射相关知识点: [https://www.kancloud.cn/manual/thinkphp5_1/469333](https://www.kancloud.cn/manual/thinkphp5_1/469333)
    - `wangyu/reflex-core composer`扩展使用: [https://github.com/china-wangyu/php-reflex-core](https://github.com/china-wangyu/php-reflex-core)
* `Restful API` 是一种API接口设计风格或者说潮流

    如果你对 `Restful API` 还不了解，我收集了一些比较好的译文。
    
    -` RESTful `架构风格概述: [https://juejin.im/entry/57c7a323a633bd006cfc1d84](https://juejin.im/entry/57c7a323a633bd006cfc1d84)
    - `Restful API PHP`的学习视频: [https://www.imooc.com/learn/811](https://www.imooc.com/learn/811)
* `Composer` 是`php`最为流行和使用最多的第三方扩展库
    
    > 推荐使用 阿里云`composer`镜像源 1分钟内快速同步，稳定可靠

    如果你对 `Composer` 了解不够，请仔细阅读我收集的一些资料。
    
    - `composer` 入门中文文档: [https://docs.phpcomposer.com/](https://docs.phpcomposer.com/)
    - `composer` 安装文档: [https://packagist.laravel-china.org/](https://packagist.laravel-china.org/)
    - `composer` 更换国内源: [https://segmentfault.com/a/1190000019651993](https://segmentfault.com/a/1190000019651993)

到此，相信你对TRR有了一定的了解了，对TRR项目需要用到的技术有个清晰的了解，如果你还是不太清楚，请继续在网上寻找资源学习吧，
加油，明天会更美丽。

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

![thinkphp5.1内置服务器](http://pu7s2yelz.bkt.clouddn.com/TRR%20%E5%90%AF%E7%94%A8TP51%E5%86%85%E7%BD%AE%E6%9C%8D%E5%8A%A1%E5%90%AF%E5%8A%A8.png)

### 5. 浏览器访问

然后你可以直接在浏览器里面访问

```
http://127.0.0.1:8000/
```

浏览器显示如下：

<p align="center">
  <img src="http://pu7s2yelz.bkt.clouddn.com/TRR_logo_2.png" alt="php version" width="100%">
</p>

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
    Successful. Output Document Successful . File Path ：api-md.md
    ```
 
注意 ！
注意 !
注意 !

## 演示地址 

* 官方运行示例: [演示站点](http://trr.ibs3.cn), [备用站点](http://47.240.11.136:8000/)
* 官方`API Markdown文档`示例: [演示站点](http://trr.ibs3.cn/apiShow), [备用站点](http://47.240.11.136:8000/apiShow)
* 本地运行示例: http://127.0.0.1:8000/
* 本地`API Markdown文档`示例: http://127.0.0.1:8000/apiShow

## 维护与提问

### 更新

由于目前TRR目前还处在不断迭代更新阶段，TP5.1版本也在持续跟进，所以本文档的内容也会随着适配的进度而增加或者调整。

项目更新记录，可以在`CHANGELOG.md`查看

### 完善

局限于个人技术水平和写作能力，如果教程中有哪些地方读者觉得不对或者看不懂需要再讲仔细些可以随时提出。

### 催更、提问与交流

读者对本教程或者GitHub项目有任何疑问、建议都可以在作者GitHub仓库提个[issues](https://github.com/china-wangyu/TRR/issues)  

或

加【TRR 官方群】QQ群: `860613750`


### 请我喝茶

如果你觉得本项目帮助到你，想请作者**喝杯茶** , 请扫码打赏任意金额

<p align="center">
    <img width="300"
    src='http://pu7s2yelz.bkt.clouddn.com/1562406354618.jpg'
     alt='请作者喝茶' />
</p>
    
## 版权信息

TRR 遵循 MIT 开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2006-2019 by TRR

All rights reserved。
