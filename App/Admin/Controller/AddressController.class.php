<?php
	namespace Admin\controller;

	use Think\Controller;

	class AddressController extends Controller{

		public function index() {
			$p = 1;
	    	if(!empty($_POST['pageNum'])){
	    		$p=$_POST['pageNum'];
	    	}
	    	$_GET['p'] = $p;

			$numPerPage = 10;
			if(!empty($_POST['numPerPage'])){
				$numPerPage = $_POST['numPerPage'];
			}

			$mod = M('store_address');

			$total = $mod->count();
			$Page = new \Think\Page($total,$numPerPage);

			$this->assign("currentPage",$p);
			$this->assign('numPerPage',$numPerPage);
			$this->assign("totalCount",$total);
			$this->assign("list",$mod->limit($Page->firstRow.','.$Page->listRows)->select());
			$this->display();
		}
	}