<?php

class Articles extends Eloquent {

	protected $fillable = array('title');

	public static $rules = array('title'=>'required|min:3');

	/*public function products() {
		return $this->hasMany('Product');
	}
    public function cart() {
        return $this->hasMany('Cart');
    }*/

}