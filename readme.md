#apidemo 说明



Laravel apidemo

此demo是根据学院君的教程一步步实现的,只保留了提供api部分代码,没有测试部分。admin是api部分

## 安装说明 

一、下载到本地：
```
git clone https://github.com/yongchaoo/apidemo
```
以下需进入admin文件夹操作:

二、安装依赖
```
composer install
```

三、配置 `.env` 文件

```
cp .env.example .env
```

四、生成 `key`
```
php artisan key:generate
```

五、迁移数据库
```
php artisan migrate
```

六、生成假数据
```
php artisan db:seed
```
然后就可以使用postman测试了。

注意:
使用postman时,header里的参数一定要填:
```
[{"key":"Accept","value":"application/json","enabled":true}]
[{"key":"Content-type","value":"application/json","enabled":true}]
```

enjoy it!

如觉不错,star一下吧!    --《鲁迅曾经说过》