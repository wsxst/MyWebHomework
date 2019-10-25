<?php
namespace app\index\controller;

use think\Controller;

class Register extends Controller
{
    public function doRegister()
    {
    	$param = input('post.');
		$has = db('users')->where('user_name', $param['user_name'])->find();
		if(empty($has))
		{
			$this->error('用户名或密码错误！');
		}
		
    }
}
