<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyfirstController extends Controller
{
	public function index()
	{
		return view('resultspage', [ 'result' => $sum,
			'title' => "Sample page title"
	]);
	}
	}