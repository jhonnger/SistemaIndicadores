<?php

class AdminController extends BaseController {



	public function index()
	{
		return View::make('admin/login');
	}

	public function loginAdm()
	{
		return View::make('admin/home');
	}

	public function test() {
		echo "Solo accedo con usuario admin.";
	}

}
