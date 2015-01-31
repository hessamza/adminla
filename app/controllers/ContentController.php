<?php

use app\Uploader\ImageUploader;
use Symfony\Component\CssSelector\CssSelector;
class ContentController extends BaseController {

	public function __construct() {
		parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('admin');
	}

	public function getIndex() {
	/*	$categories = array();

		foreach(Category::all() as $category) {
			$categories[$category->id] = $category->name;
		}*/

		return View::make('content.index');
			/*->with('products', Product::all())
			->with('categories', $categories);*/
	}


    public function getNewContent() {
      /*  $categories = array();

        foreach(Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }*/

        return View::make('content.add');
   /*         ->with('products', Product::all())
            ->with('categories', $categories);*/
    }


	public function postCreate() {
		$validator = Validator::make(Input::all(), Articles::$rules);

		if ($validator->passes()) {
			$content = new Articles();
			$content->category_id = Input::get('category_id');
			$content->title = Input::get('title');
			$content->slug = Input::get('slug');
            $content->body = Input::get('body');

          /*  $content->image = Input::hasFile('image');*/
      $image = Input::file('image');

            $destinationPath = 'public/uploads/';
            $filename = $image->getClientOriginalName();
            $content->image=$filename;


            Image::make(Input::file('image'))->resize(300, 200)->save('public/uploads/'.$filename);

			$content->save();

			return Redirect::to('admin/products/index')
				->with('message', 'Product Created');
		}

		return Redirect::to('admin/products/index')
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

	public function postDestroy() {
		$product = Product::find(Input::get('id'));

		if ($product) {
			File::delete('public/'.$product->image);
			$product->delete();
			return Redirect::to('admin/products/index')
				->with('message', 'Product Deleted');
		}

		return Redirect::to('admin/products/index')
			->with('message', 'Something went wrong, please try again');
	}

	public function postToggleAvailability() {
		$product = Product::find(Input::get('id'));

		if ($product) {
			$product->availability = Input::get('availability');
			$product->save();
			return Redirect::to('admin/products/index')->with('message', 'Product Updated');
		}

		return Redirect::to('admin/products/index')->with('message', 'Invalid Product');
	}


    //Edit Content
    public function user($id)
    {
        /*$categories = array();
        $products = array();
        foreach(Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }
        foreach(Product::all() as $product) {
            $products[$product->id] = $product->title;
        }
        if(Request::ajax()){
            $input = Input::get('Category');
            return json_encode($input);
        }*/
        $categories=Category::all();
        $products=Product::all();
        $content = Articles::where('id', '=', $id);
        $content = $content->first();
        return View::make('content.edit')
            ->with('content', $content);










    }


    public function update($id)
    {
        //Find brugeren
        $content = Articles::find($id);


        $content->first();

        $content->title = Input::get('title');
        $content->slug = Input::get('slug');
        $content->body = Input::get('body');

        /*  $content->image = Input::hasFile('image');*/
        $image = Input::file('image');

   /*     $destinationPath = 'public/uploads/';
        $filename = $image->getClientOriginalName();
        $content->image=$filename;*/

      /*  Image::make(Input::file('image'))->resize(300, 200)->save('public/uploads/'.$filename);*/

        $content->save();

        return Redirect::back()
            ->with('message', 'مطلب ویرایش شد');

    }



}