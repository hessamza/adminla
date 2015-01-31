<?php

class Product extends Eloquent {

	protected $fillable = array('category_id','title','tax');

	public static $rules = array(
		'category_id'=>'required|integer',
		'title'=>'required|min:2',

       	);

	public function category() {
		return $this->belongsTo('Category');
	}
}