# API Markdown 文档，源于[TRR](https://github.com/china-wangyu/TRR)的美好生活。

## `TOC`目录

-  [App\api\controller\auth:授权类](#app\api\controller\auth:授权类)

   -  [Create:创建授权](#create:创建授权)

   -  [Refresh:刷新授权](#refresh:刷新授权)

-  [App\api\controller\v1\book:图书类](#app\api\controller\v1\book:图书类)

   -  [Create:创建图书](#create:创建图书)

##  `API`内容

###  [App\api\controller\auth:授权类](#app\api\controller\auth:授权类)

#### create:创建授权

- [url] : `/auth`

- [method] : `post`

- [params] : `请求参数文档`

   | 参数名称 | 参数文档 | 参数 `filter` | 参数默认 |
   | :----: | :----: | :----: | :----: |
   | password | 密码 | require |  |
   | name | 名称 | require |  |
- [success] : `成功返回样例`

   ```json5
    {"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjQwNDc4ODcsImV4cCI6MTU2NDA1NTA4NywidXVpZCI6MTAwLCJzaWduYXR1cmUiOiIxMiJ9.QAvjERUOvQ2QwUcPnQOJuYGuTDgzWCZ7gaNziJHDmVI","refresh_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjQwNDc4ODcsInV1aWQiOjEwMCwic2lnbmF0dXJlIjoiMTIifQ.n-TZSFr9NqaTIjWpxR3ZUeP7WobYrhYvS5lIVkxRaIM"}
   ```

- [error] : `错误返回样例`

   ```json5
    {"code": 3000,"message": "3000: 错误内容 . 参数验证 . name不能为空,password不能为空","request_url": "auth" }
   ```

#### refresh:刷新授权

- [url] : `/auth/refresh`

- [method] : `get`

- [params] : `请求参数文档`

   | 参数名称 | 参数文档 | 参数 `filter` | 参数默认 |
   | :----: | :----: | :----: | :----: |
- [success] : `成功返回样例`

   ```json5
    { "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUUlIiLCJpYXQiOjE1NjQxMDY2ODAsImV4cCI6MTU2NDExMzg4MCwidXVpZCI6MTAwLCJzaWduYXR1cmUiOiIyMyJ9.1Te9jeAQVvj6VbgiVEk1-CChn8KybpOXqiyH8a4UB68" }
   ```

- [error] : `错误返回样例`

   ```json5
    { "code": 3000, "message": "3000: 错误内容 . 1000: 错误内容 . 请求header未携带authorization信息", "request_url": "auth/refresh" }
   ```

###  [App\api\controller\v1\book:图书类](#app\api\controller\v1\book:图书类)

#### create:创建图书

- [url] : `/v1/book`

- [method] : `post`

- [params] : `请求参数文档`

   | 参数名称 | 参数文档 | 参数 `filter` | 参数默认 |
   | :----: | :----: | :----: | :----: |
   | img | 图书img | require#graph#length:1,16 |  |
   | name | 图书名称 | require#graph#length:1,50 |  |
- [success] : `成功返回样例`

   ```json5
    
   ```

- [error] : `错误返回样例`

   ```json5
    
   ```

