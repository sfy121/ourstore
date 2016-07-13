<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function login(){
       
       $this->display("login");
    }
    public function doLogin(){
    	$user = array("name"=>"zs","pass"=>"123");
        // print_r($user);
        // print_r($_POST);
        // exit;
    	if($user['name'] == $_POST['username']){
            if($user['pass'] == $_POST['password']){
                $_SESSION['user'] = $user;
                $this->redirect("Admin/Index/index");
            }else{
                $this->assign("info","登录密码错误");
                $this->display('login');
            }
        }else{
            $this->assign("info","用户名错误");
            $this->display('login');
        }
    }
    public function logOut(){
        session(null);
        $this->display("login");
    }
}