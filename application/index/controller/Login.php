<?php
// namespace app\index\controller;

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
		$where = new Where();
		$where['username'] = ('=',$param['user_name']);
		$where['passwd'] = ('=', $param['passwd']);
		$has = db('userInfo')->where($where)->find();
		if(empty($has))
		{
			$this->error('用户名或密码错误！');
		}
		$this->
    }
}
