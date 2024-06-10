<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Page extends BaseController

{
	protected $HomeModel;

	public function __construct()
	{
		$this->HomeModel = new HomeModel();
	}

	public function index()

	{

		echo view("welcome_message");
	}


	public function home()

	{
		$HomeModel = $this->HomeModel->first();
		$data = [
			'title' => 'Kelola Home',
			'home' => $HomeModel,
		];

		echo view("home",$data);
	}

	public function about()

	{

		echo view("about");
	}



	public function katalog()

	{

		echo view("katalog");
	}



	public function blog()

	{

		echo view("blog");
	}


	public function jenis()

	{

		echo view("jenis");
	}

	public function deskripsi()

	{

		echo view("deskripsi");
	}
}
