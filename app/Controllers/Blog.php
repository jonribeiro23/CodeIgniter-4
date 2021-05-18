<?php

namespace App\Controllers;

class Blog extends BaseController{

	public function post($slug){

		echo view('templates/header');
		echo view('blog/post');
		echo view('templates/footer');
	}

	public function create(){
		helper('form');
		$model = model('App\Models\BlogModel');
		$rules = [
			'title' => 'required|min_length[3]|max_length[255]',
			'body'  => 'required'
		];

		if(!$this->validate($rules)){
			echo view('templates/header');
			echo view('blog/create');
			echo view('templates/footer');
		}else{
			$data = [
				'title' => $this->request->getVar('title'),
				'body' => $this->request->getVar('body'),
				'slug' => url_title($this->request->getVar('title'))
			];
			
			$model->save($data);

			$session = \Config\Services::session();
			$session->setFlashdata('success', 'New post was created');

			return redirect()->to('/');
			
		}
	}

	public function getPost($slug){
		$model = model('App\Models\BlogModel');
		$data['news'] = $model->getPosts($slug);
		echo view('templates/header');
		echo view('blog/post', $data);
		echo view('templates/footer');
	}


}
