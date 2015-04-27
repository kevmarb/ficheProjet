<?php

class PostController extends BaseController {

	public function postCreate() {
		$rules = array(
			'title' => 'required|min:6',
			'content' => 'required',
			);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		else {

			$post = new Post;
			$post->title = Input::get('title');
			$post->user_id = Auth::user()->id;
			$post->confirmed = 0;
			$post->save();
			return Redirect::back();
		}
	}




	public function getValidate($id) {
		$post = Post::find($id);
		$post->confirmed = 2;
		$post->save();
		return Redirect::back();
		//Ajouter fonction mail
	}

	public function getDecline($id) {
		$post = Post::find($id);
		$post->confirmed = 1;
		$post->save();
		return Redirect::back();
		//Ajouter fonction mail

	}

}
