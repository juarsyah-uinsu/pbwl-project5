<?php

namespace App\Core;

class Controller
{
	// Layout home
	public function guest($view, $data = [])
	{
		require_once ROOT . "layouts/guest.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function kategori($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function produk($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function order($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
}
