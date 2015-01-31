<?php

class UsersController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function getNewaccount() {
        return View::make('users.newaccount');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->passes()) {
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->nationid = Input::get('nationid');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->telephone = Input::get('telephone');
            $user->admin = Input::get('admin');
            $user->save();
            Mail::send('users.mails.welcome', array('firstname'=>Input::get('firstname')), function($message){
                $message->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))->subject('Welcome to the yamna App!');
            });
            return Redirect::to('users/signin')
                ->with('message', 'Thank you for creating a new account. Please sign in.');
        }

        return Redirect::to('users/newaccount')
            ->with('message', 'Something went wrong')
            ->withErrors($validator)
            ->withInput();
    }












    public function getSignin() {
        return View::make('users.signin');
    }

    public function postSignin() {
        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
            return Redirect::to('/')->with('message', 'Thanks for signing in');
        }

        return Redirect::to('users/signin')->with('message', 'Your email/password combo was incorrect');
    }

    public function getSignout() {
        Auth::logout();
        return Redirect::to('/users/signin')->with('message', 'You have been signed out');
    }
    public function request()
    {
        if ($this->isPostRequest()) {
            $response = $this->getPasswordRemindResponse();

            if ($this->isInvalidUser($response)) {
                return Redirect::back()
                    ->withInput()
                    ->with("error", Lang::get($response));
            }

            return Redirect::back()
                ->with("status", Lang::get($response));
        }

        return View::make("user/request");
    }

    protected function getPasswordRemindResponse()
    {
        return Password::remind(Input::only("email"));
    }

    protected function isInvalidUser($response)
    {
        return $response === Password::INVALID_USER;
    }





    public function reset($token)
    {
        if ($this->isPostRequest()) {
            $credentials = Input::only(
                    "email",
                    "password",
                    "password_confirmation"
                ) + compact("token");

            $response = $this->resetPassword($credentials);

            if ($response === Password::PASSWORD_RESET) {
                return Redirect::route("user/profile");
            }

            return Redirect::back()
                ->withInput()
                ->with("error", Lang::get($response));
        }

        return View::make("user/reset", compact("token"));
    }

    protected function resetPassword($credentials)
    {
        return Password::reset($credentials, function($user, $pass) {
            $user->password = Hash::make($pass);
            $user->save();
        });
    }






}