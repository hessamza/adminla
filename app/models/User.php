<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = array('firstname', 'lastname', 'email', 'telephone','nationid');
    public static $rules = array(
        'firstname'=>'required|min:4|alpha',
        'lastname'=>'required|min:4|alpha',
        'email'=>'required|email|unique:users',
        'password'=>'required|alpha_num|between:8,12|confirmed',
        'password_confirmation'=>'required|alpha_num|between:8,12',
        'nationid'=>'required|min:10|unique:users',
        'telephone'=>'required|between:10,12',
        'admin'=>'integer'
    );
	protected $table = 'users';



    /**
     * Overrides the method to ignore the remember token.
     */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');


    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */


}
