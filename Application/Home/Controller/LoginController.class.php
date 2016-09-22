<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }

    //qq登录系统实现
    function qq_login()
    {
        $token = $_SESSION['access_token'];
        $openid = $_SESSION['openid'];
        //获取qq账号信息，并持久化使其登录系统
        //以下地址请求需要信息：access_token、openid、appid
        $url = C('SITE_URL')."public/qq/user/get_user_info.php?access_token=".$token."&openid=".$openid;
        //file_get_contents($url)向其他地址做请求，同时返回请求后的信息
        //file_get_contents($file)打开本地服务器文件

        $qqinfo = file_get_contents($url); //返回json信息

        //json----转化为---->array
        $qqinfo_arr = json_decode($qqinfo,true);

        //把qq账号信息存储给数据库
        //qq账号没有就insert，有则update更新
        //通过openid判断qq记录信息在sp_user表中是否存在
        $userinfo = D('User')->where(array('openid'=>$openid))->find();
        if($userinfo===null){
            //qq记录不存在
            $arr = array(
                'user_name'=>$qqinfo_arr['nickname'],
                'user_sex'=>$qqinfo_arr['gender'],
                'openid'=>$openid,
                'add_time'=>time(),
            );
            $newid = D('User')->add($arr);
        }else{
            //qq记录已经存在
            $newid = $userinfo['user_id'];
            $arr = array(
                'user_id'=>$newid,
                'user_name'=>$qqinfo_arr['nickname'],
                'user_sex'=>$qqinfo_arr['gender'],
                'openid'=>$openid,
            );
            D('User')->save($arr);
        }
        //dump($qqinfo_arr);
        //给qq的昵称持久化操作
        session('user_id',$newid);
        session('user_name',$qqinfo_arr['nickname']);
        //页面跳转
        //$this -> redirect('Index/index');
        $this->success('登陆成功',C('SITE_URL')."Home/Controller/IndexController/index",1);
    }

    //会员退出系统
    function logout()
    {
        session(null);
        $this -> redirect('Index/index');
    }
}