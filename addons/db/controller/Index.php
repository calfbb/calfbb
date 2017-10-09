<?php
/**
 * 示例控制器
 */
namespace Addons\db\controller;

use  Framework\library\view;
use  Framework\functions\baseChart;

class Index
{
    use view,baseChart;
    public function index(){
        global $_G;


        $tab=['January','February','March'];
        $parameter=[
            [
                'fillColor'=>'rgba(151,187,205,0.5)',
                'strokeColor'=>"rgba(220,220,220,1)",
                'data'=>[1,59,90],
            ],[
                'fillColor'=>'rgba(220,220,220,0.5)',
                'strokeColor'=>"rgba(220,220,220,1)",
                'data'=>[65,59,50],
            ],[
                'fillColor'=>'rgba(151,187,205,0.5)',
                'strokeColor'=>"rgba(220,220,220,1)",
                'data'=>[100,59,90],
            ]

        ];


        $bar=$this->baseBarChart($tab,$parameter,300,200);
        $this->assign('bar',$bar);
        $this->display('index/index.html');
    }




    public function test()
    {


        $this->display('index/test.html');
    }

    public function setting()
    {
        global $_GPC,$_G;
        $result=db_find('db_setting','*',['project_id'=>$_G['project']['project_id']]);

        if(!empty($_GPC['submit'])){
            //var_dump($_GPC);exit;

            $data['db_type']=$_GPC['db_type'];
            $data['db_path']=$_GPC['db_path'];
            $data['db_name']=$_GPC['db_name'];
            $data['name']=$_GPC['name'];
            $data['password']=$_GPC['password'];
            $data['port']=$_GPC['port'];
            $data['charset']='utf8';
            if($result){
                $result=db_update('db_setting',$data,['project_id'=>$_G['project']['project_id']]);
            }else{
                $data['project_id']=$_G['project']['project_id'];
                $result=db_insert('db_setting',$data);

            }
            if($result){
                message('更新成功',APP_URL."?m=db&c=index&a=setting",2);

            }else{
                message('更新失败',APP_URL."?m=db&c=index&a=setting",2);

            }


        }



        $ip=gethostbyname( $_SERVER['HTTP_HOST']);
        $this->assign('ip',$ip);
        $this->assign('data',$result);
        $this->display('index/setting.html');
    }


    /**
     * sql
     */
    public function getQuery(){
            global $_GPC;
            if(empty($_GPC['sql']) ||  empty($_GPC['project_id'])){
                show_json(_code(2000));
            }
            $sql=trim($_GPC['sql']);
            $project_id=trim($_GPC['project_id']);
            $result=db_find('db_setting','*',['project_id'=>$project_id]);
            if(!$result){
                show_json(['code'=>8002,'msg'=>'没有配置数据库']);
            }

            $db_setting=array(

                'database_type' => $result['db_type'],
                'database_name' => $result['db_name'],
                'server' => $result['db_path'],
                'username' => $result['name'],
                'password' => $result['password'],
                'port' => $result['port'],
                'charset' => $result['charset'],


            );

            $db=new \Medoo\Medoo($db_setting);

           $data=$db->fetchall($sql);
           show_json($data);
    }
}