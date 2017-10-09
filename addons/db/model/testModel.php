<?php
namespace  Addons\mysql\model;
use Framework\model\db;
class  TestModel extends db{
    /**
     * 根据ID查找一条数据
     */
    public function getUserOne()
    {
        $data=$this->getOne('user',1);
        return $data;
    }
}