<?php

use SisInd\Entities\Role;

class AuthController extends BaseController {

    public function login()
    {
        $data = Input::only('username', 'password');
        $credentials = ['name' => $data['username'], 'password' => $data['password'], 'rol_id' => Role::adminRoleId()];
        if (Auth::attempt($credentials))
        {
            return Redirect::route('home');
        }
        return View::make('admin/login')->with(array('error_message' => 'Usuario y/o contraseña incorrecta'));
    }

    public function logout()    
    {
        Auth::logout();
        return Redirect::route('home');
    }
} 