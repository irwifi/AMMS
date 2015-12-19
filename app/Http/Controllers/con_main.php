<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class con_main extends Controller
{
	public function main_dashboard() {
		$page_array = ["page" => "home"];
		return view('main.main_dashboard', $page_array);
	}

    public function main_settings() {
    	$page_array = ["page" => "settings"];
    	return view('main.main_settings', $page_array);
    }
}
