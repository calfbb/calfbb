<?php
/**
 * 示例model
 */
namespace  App\model;

use PDO;//引入pdo类库，确保php开启pdo扩展
use Exception;
use PDOException;
class  UserModel{

    public function pdoTest(){

       $pdo=new PDO('mysql:host=127.0.0.1;dbname=calfbaby;charset=utf8;port=3306','root','123456');

       $arr=$pdo->query('select *  from   calf_user');

       $arrs=$arr->fetchAll();

        p($arrs);

    }



    /**
     * 用户权限表写入用户数据
     * @param string $uid
     * @param $data
     * @return mixed
     */
     public function test(){
        $dbconf=array(
            //mysql示例配置
            'database_type' => 'mysql',//数据库类别   支持常用库如mysql mariadb pgsql sybase oracle mssql sqlite
            'database_name' => 'calfbaby',//数据库名字
            'server' => '127.0.0.1',//数据库地址 ip || 域名
            'username' => 'root', //用户名
            'password' => '123456',//密码
            'charset' => 'utf8',//字符集
            'port' => '3306', //端口号
            'prefix' => 'calf_',//表前缀

        );
        $m=new \Medoo\Medoo($dbconf);
        $user=$m->find('user');
        p($user);
     }



    /**新增用户
     * @param $userdata
     * @return mixed
     */

    public function insertUser($userdata){
        $validate=random(6);//获取6位随机字符串

        $data=[
            'nickname'=>$userdata['nickname'],
            'validate'=>$validate,
            'password'=>md5($userdata['password'].$validate),
            'status'=>$userdata['status'],
            'update_time'=>time(),
            'create_time'=>time()
        ];
        $result=db_insert(self::$table_user,$data);
        return $result;
    }





}