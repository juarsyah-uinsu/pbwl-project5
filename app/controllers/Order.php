<?php

namespace App\Controllers;

use App\Core\Controller;

class Order extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Order();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('order/index', $data);
	}

	public function input()
	{
		$this->dashboard('order/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('order/edit');
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
