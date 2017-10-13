<?php
/**
 * @className：user表相关数据库模型
 * @description：用户数据操作
 * @author:calfbb技术团队
 * Date: 2017/10/13
 */
namespace  Addons\db\model;

class  User{
    /**
     * @var string $userTableName 用户表名
     */
    public $userTableName='user';
    /**
     * 根据ID查找一条数据
     */
    public function getUserOne()
    {
        $data=db_find($this->userTableName,'*',['uid'=>1]);
        return $data;
    }
}