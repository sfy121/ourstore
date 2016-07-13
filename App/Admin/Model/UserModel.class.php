<?php

	namespace Admin\Model;

	use Think\Model;

	class UserModel extends Model{  
		protected $tableName = "store_user";
		//1 自动验证 
		//验证进行完之后 要使用错误抛出 create()里面
		 protected $_validate = array(
		 	 // array('user_name','require','用户名非空！'), //用户名不能为空
		 	 // array('user_realname','','用户名非空！'), //用户名不能为空
		 	 // // array('username','/^\d{1,3}$/','用户名格式不正确！'), //用户名不能为空
		 	 array('user_name','','帐号名称已经存在！',0,'unique',1), //账户是否已经存在 
		 	 array('user_pass','user_pass2','密码不一致',0,'confirm'),//密码是否一致


		 	);

		//2 自动完成    
		protected $_auto = array (   
		// 1 添加 2 修改 3 添加 修改       
		//array('status','0'),  // 新增的时候把status字段设置为1  
		array('user_pass','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理   
		
		array('user_time',"time",1,'function'), //对update_time字段在添加的时候写入当前时间戳     
   );
		
		//3 字段映射  隐藏表里面的实际字段名 
		protected $_map = array(
			'xxoo' =>"username",//xxoo是表单的字段名 username是表的字段名
		);
}
