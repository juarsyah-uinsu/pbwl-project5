<?php

namespace App\Controllers;

use App\Core\Controller;

class Produk extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Produk();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('produk/index', $data);
	}

	public function input()
	{
		$this->dashboard('produk/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('produk/edit');
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
