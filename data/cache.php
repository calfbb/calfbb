<?php
//缓存相关配置
return array(

   /**
     * file 缓存
     */

   'CACHE_TYPE'=>'File',
   'OPTION'=> [
       'path'=>CALFBB.'/data/cache/cache',//储存位置
       'time'=>3600,//超时时间
   ]
   /**
    * Memcached 缓存
    */
//    'CACHE_TYPE'=>'memcached',
//    'OPTION'=> [
//        'servers'=>[
//            ['1161596bc6af4af2.m.cnqdalicm9pub001.ocs.aliyuncs.com
//','11211']
//        ]
//    ]


   /**
    * Redis 缓存
    */
   //     'CACHE_TYPE'=>'redis',
//       'OPTION'=> [
//           'servers'=>
//               '192.168.167.129'
//           ,
//           'port'=>
//               '6379',
//           'password'=>"123456"
//
//       ]
);