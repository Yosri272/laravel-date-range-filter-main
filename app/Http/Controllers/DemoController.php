<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function ajax(Request $request)
	{

		$fullName = $request->get('fullName');
        dd($fullName);

	}
}
