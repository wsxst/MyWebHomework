<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function register()
    {
    	return $this->fetch();
    }
    public function doLogin()
    {
    	$param = input('post.');
		if(empty($param['username'])) {
			$this->error('用户名不能为空！');
		}
		if(empty($param['passwd'])) {
			$this->error('用户名不能为空！');
		}
    }
}
