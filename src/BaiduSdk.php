<?php

namespace Siaoynli\Baidu;

class BaiduSdk
{
    /**
     * @param $className
     * @param  null  $app_id
     * @param  null  $api_key
     * @param  null  $secret_key
     * @return mixed
     * @throws \Exception
     */
     public static function  Client($className, $app_id = null, $api_key = null, $secret_key = null){
         $className="Siaoynli\\Baidu\\BaiduSdk\\".$className;
         try {
            return  new $className($app_id ?: config("baidu.app_id"), $api_key ?: config("baidu.api_key"),
                 $secret_key ?: config("baidu.secret_key"));
         } catch (\Exception $e) {
             throw new \Exception("".$e->getMessage());
         }
     }

}
