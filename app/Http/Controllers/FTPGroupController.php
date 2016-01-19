<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\FTPGroup;

class FTPGroupController extends Controller
{
	public function index()
	{
		$ftpgroups = app('IFTPGroupRepository');
		return View('ftpgroup.index', compact('ftpgroups'));
	}

	public function create()
	{
		return View('ftpgroup.create');
	}

	public function store(FTPGroupRequest $request)
	{		
		return redirect()->action('FTPGroupController@index');
	}
}
