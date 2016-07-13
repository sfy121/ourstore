<?php
namespace Home\Controller;
use Think\Controller;
class JcropController extends Controller {
    public function index(){
       $this->display();
    }
    
    //执行上传处理
    public function upload(){
        // die("<script>alert('ok');</script>");
        // die("<script>doShow('a.jpg');</script>");
        die("<script>window.parent.doShow('a.jpg');</script>");
    }
    
   
}