<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	if($_SESSION['user']){
    		$this->display('index');
    	}else{
    		$this->redirect('Admin/Public/login');
    	}
      
    }
}