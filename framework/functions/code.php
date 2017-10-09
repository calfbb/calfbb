<?php

function _code($code){
        $result=[
            1000=>['code'=>1000,'msg'=>'用户名已经存在'],
            2000=>['code'=>2000,'msg'=>'参数传入错误'],
            8001=>['code'=>8001,'msg'=>'成功'],
            8002=>['code'=>8002,'msg'=>'失败'],
            1001=>['code'=>1001,'msg'=>'当前套餐下已经有用户在使用，不可以删除']
            ];
        return $result[$code];
}

