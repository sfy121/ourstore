<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display('index');
    }
    public function demo(){
    	$this->assign("name","张三");
    	$this->assign("stu",array('name'=>'lisi','sex'=>'man'));
    	$_GET['name'] = "翠花";
    	$_POST['num'] = 100;

    	$this->display();
    }
}