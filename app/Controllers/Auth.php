<?php namespace App\Controllers;


class Auth extends BaseController
{

    public function index()
	{
		$data = [
			'title' => 'Login'
		];
		return view('Admin/auth/login',$data);
	}

    public function login()
	{
		$data = [
			'title' => 'Login',
			'content' => 'Admin/auth/login'
		];
		return view('_layout/v_wrapper',$data);
	}

}
