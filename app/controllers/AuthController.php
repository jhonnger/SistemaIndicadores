<?php

use SisInd\Entities\Role;

class AuthController extends BaseController {

    public function loginAdm()
    {
        $data = Input::only('username', 'password');
        $credentials = ['name' => $data['username'], 'password' => $data['password'], 'rol_id' => Role::adminRoleId()];
        if (Auth::attempt($credentials))
        {
            return Redirect::route('home');
        }
        return View::make('admin/login')->with(array('error_message' => 'Usuario y/o contraseña incorrecta', 'username' => $data['username']));
    }

    public function login()
    {
        $data = Input::only('username', 'password','type');
        $credentials = ['dni' => $data['username'], 'password' => $data['password']];
        if (Auth::attempt($credentials))
        {
            return Redirect::route('home');
        }
        return Redirect::back()->with('login_error', 1);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }
} 