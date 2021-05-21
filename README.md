# baidu-orc
百度 文字识别扩展包


## install

this package for laravel

```
composer require siaoynli/laravel-baidu
```

app.php

```
Siaoynli\Baidu\BaiduServiceProvider::class,
```

```
php artisan vendor:publish --provider="Siaoynli\Baidu\BaiduServiceProvider"
```

## use

.env添加
```
BAIDU_APP_ID=
BAIDU_API_KEY=
BAIDU_SECRET_KEY=
```

.orc  
```
 $client =  BaiduSdk::Client("AipOcr");
```

使用方法查看百度官方文档
