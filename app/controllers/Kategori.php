<?php

namespace App\Controllers;

use App\Core\Controller;

class Kategori extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Kategori();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('kategori/index', $data);
	}

	public function input()
	{
		$this->dashboard('kategori/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('kategori/edit');
	}

	public function update()
	{
		//
	}

	public function delete()
	{
		//
	}
}
