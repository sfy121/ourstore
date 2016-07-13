<?php
namespace Home\Controller;
use Think\Controller;
class MailController extends Controller {
    public function index(){
       $this->display();
    }
    //执行邮件发送
    public function doSend(){
        $b = sendMail($_POST['address'],$_POST['title'],$_POST['content']);
        if($b){
            echo "邮件发送成功！";
        }else{
            echo "邮件发送失败！";
        }
    }
}