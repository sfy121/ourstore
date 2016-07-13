<?php
	namespace Admin\controller;

	use Think\Controller;


	class UserController extends Controller{

		public function index(){
			$p = 1;
	    	if(!empty($_POST['pageNum'])){
	    		$p=$_POST['pageNum'];
	    	}
	    	$_GET['p'] = $p;

			$numPerPage = 10;
			if(!empty($_POST['numPerPage'])){
				$numPerPage = $_POST['numPerPage'];
			}

			$mod = M('store_user');

			$total = $mod->count();
			$Page = new \Think\Page($total,$numPerPage);

			$this->assign("currentPage",$p);
			$this->assign('numPerPage',$numPerPage);
			$this->assign("totalCount",$total);
			$this->assign("list",$mod->limit($Page->firstRow.','.$Page->listRows)->select());
			$this->display();
		}

		public function add() {
			$this->display('add');
		}

		public function insert() {

			// print_r($_POST);
			// exit;
			$mod = D('User');

			$mod->create();
			$m = $mod->add();

			if($m>0){
				$this->success("添加成功");
			}else{
				$this->error('添加失败');
			}
		}

		public function del() {
			$mod = M('store_user');
			$m = $mod->delete($_GET['id']+0);
			if($m>0){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		public function edit() {
			$mod = M('store_user');
			$vo = $mod->find($_GET['id']);

			$this->assign("vo",$vo);
			$this->display();
		}

		public function update() {
			$mod = M('store_user');
			$mod->create();
			if($mod->save()>0){
				$this->success("修改成功");
			}else{
				$this->error('修改失败');
			}
		}
	}

 