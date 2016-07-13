<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       echo "<h2>ThinkPHP框架项目实例：</h2>";
       
       $url = U("Admin/Index/index");
       echo "<h4><a href='{$url}'>访问网站后台</a></h4>";
       
       $url = U("Jcrop/index");
       echo "<h4><a href='{$url}'>图片无刷新上传加裁剪实例</a></h4>";
       
       $url = U("Mail/index");
       echo "<h4><a href='{$url}'>邮件发送实例</a></h4>";
    }
}