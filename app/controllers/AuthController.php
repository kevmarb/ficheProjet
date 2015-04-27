<?php

class AuthController extends BaseController {

    public function postSignup() {
        $rules = array(
            'username' => 'required|alpha_num|between:3,20',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:users,email'
        );

        $validator = Validator::make(Input::all(),$rules);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else {
            $user = new User;
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            $user->save();
            Auth::loginUsingId($user->$id);
            return Redirect::to('/');
        }
    }

// -------------- ADMIN ----------------- //
    public function getSignupAdmin(){
        return View::make('layouts.registerAdmin');
    }


    public function postSignupAdmin() {
        $rules = array(
            'firstname' => 'required|alpha_num',
            'lastname' => 'required|alpha_num',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:users,email'
        );

        $validator = Validator::make(Input::all(),$rules);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else {
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->save();
            return Redirect::to('/');
        }
    }

    public function getSignupAgency(){
        return View::make('layouts.registerAgency');
    }

// -------------- AGENCY ----------------- //
    public function postSignupAgency()
    {
        $rules = array(
            'firstname' => 'required|alpha_num',
            'lastname' => 'required|alpha_num',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:users,email'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->name = Input::get('name');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->save();
            return Redirect::to('/');

        }
    }

// -------------- STUDENT ----------------- //

    public function getSignupStudent(){
        return View::make('layouts.register');
    }

    public function postSignupStudent()
    {
        $rules = array(
            'firstname' => 'required|alpha_num',
            'lastname' => 'required|alpha_num',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:users,email'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->save();
            return Redirect::to('/');

        }
    }

    public function postLogin() {

        $rules = array(
            'email' => 'required|email',
            'password' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::to('/')->withErrors($validator)->withInput();
        }
        else {
            if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
                return Redirect::to('/');
            } else {
                Session::flash('authError', 'Wrong email and/or password');
                return Redirect::to('/');
            }
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('/');
    }

}
