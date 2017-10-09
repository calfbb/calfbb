<?php
/**
 * 示例model
 */
namespace  Web\model;


class  UserModel{
    private static $table_user="user";
    private static $table_authority="user_authority";
    private static $table_user_rule="user_rule";

    /**
     * 用户权限表写入用户数据
     * @param string $uid
     * @param $data
     * @return mixed
     */
     public function saveAuthority($uid="",$data,$type="update"){
        if($uid=="" || $data==""){
            return false;
        }

         $data['update_time']=time();
         $data['create_time']=time();

        $userAuthority=db_find(self::$table_authority,'*',['uid'=>$uid]);
        if(!$userAuthority){
            //处理项目权限
            if(@is_array($data['project_id'])){
                $data['project_id'] = serializer($data['project_id']);
            }

            //处理模板权限
            if(@!empty($data['templet_alone']) && @is_array($data['templet_alone'])){
                $data['templet_alone'] = serializer($data['templet_alone']);
            }
            //新增用户数据
            $result=db_insert(self::$table_authority,$data);
        }else{

            //处理项目权限
            if(@is_array($data['project_id'])){
                $project_id=unserializer($userAuthority['project_id']);
                if(is_array($project_id)) {
                    $data['project_id']=array_merge($data['project_id'], $project_id);
                }

                $data['project_id']=serializer($data['project_id']);
            }

            //处理模板权限
            if(@!empty($data['templet_alone']) && @is_array($data['templet_alone'])){
                $templet_alone=unserializer($userAuthority['templet_alone']);
                if(is_array($templet_alone)){
                    //判断是写入,还是删除
                     if($type=='update'){
                         $data['templet_alone']=$data['templet_alone']+$templet_alone;

                     }else{
                         $k=array_keys($data['templet_alone']);
                         unset($templet_alone[$k[0]]);
                         $data['templet_alone']=$templet_alone;


                     }
                }

                $data['templet_alone'] = serializer($data['templet_alone']);

            }


            //更新用户数据
            $result=db_update(self::$table_authority,$data,['uid'=>$uid]);
        }

        return $result;
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

    /** 修改用户
     * @param $userdata
     * @param $uid
     * @return mixed
     */
    public function updateUser($userdata,$uid){


        $data=[
            'nickname'=>$userdata['nickname'],
            'validate'=>$userdata['validate'],
            'password'=>md5($userdata['password'].$userdata['validate']),
            'status'=>$userdata['status'],
            'update_time'=>time(),

        ];
        $result=db_update(self::$table_user,$data,['uid'=>$uid]);
        return $result;
    }

    /** 新增用户权限
     * @param $userRuleData
     * @param $uid
     * @return mixed
     */
    public function insertUserRule($userRuleData){

        if(!empty($userRuleData['deadline_time'])){//套餐过期时间
            switch ($userRuleData['deadline_time']){
                case 1:
                    $deadline_time=30*60*60*24;
                    break;
                case 2:
                    $deadline_time=60*60*60*24;
                    break;
                case 3:
                    $deadline_time=90*60*60*24;
                    break;
                case 4:
                    $deadline_time=180*60*60*24;
                    break;
                case 5:
                    $deadline_time=360*60*60*24;
                    break;
                case 6:
                    $deadline_time=720*60*60*24;
                    break;
                case 7:
                    $deadline_time=1080*60*60*24;
                    break;
                case 8:
                    $deadline_time=1440*60*60*24;
                    break;
                case 9:
                    $deadline_time=1800*60*60*24;
                    break;
                default :
                    $deadline_time=1;
            }
            $userRuleData['deadline_time']=time()+$deadline_time;

        }

        $userRuleData['update_time']=time();
        $userRuleData['create_time']=time();
        $result=db_insert(self::$table_user_rule,$userRuleData);
        return $result;
    }

    /**修改用户权限
     * @param $userRuleData
     * @param $uid
     * @return mixed
     */
    public function updateUserRule($userRuleData,$uid){

        if(!empty($userRuleData['deadline_time'])){//套餐过期时间
            switch ($userRuleData['deadline_time']){
                case 1:
                    $deadline_time=30*60*60*24;
                    break;
                case 2:
                    $deadline_time=60*60*60*24;
                    break;
                case 3:
                    $deadline_time=90*60*60*24;
                    break;
                case 4:
                    $deadline_time=180*60*60*24;
                    break;
                case 5:
                    $deadline_time=360*60*60*24;
                    break;
                case 6:
                    $deadline_time=720*60*60*24;
                    break;
                case 7:
                    $deadline_time=1080*60*60*24;
                    break;
                case 8:
                    $deadline_time=1440*60*60*24;
                    break;
                case 9:
                    $deadline_time=1800*60*60*24;
                    break;
                default :
                    $deadline_time=1;
            }
            $userRuleData['deadline_time']=time()+$deadline_time;
        }


        $userRuleData['update_time']=time();

        $result=db_update(self::$table_user_rule,$userRuleData,['uid'=>$uid]);
        return $result;
    }
}