<?php
class AuthController extends BaseController {
    public function loginAdm()
    {
        $data = Input::only('username', 'password');
        $credentials = ['name' => $data['username'], 'password' => $data['password']];
        if (Auth::attempt($credentials))
        {
            return Redirect::route('home');
        }
        return Redirect::back()->with('login_error', 1);
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