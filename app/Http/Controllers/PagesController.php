<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return View('AddPage');
    }
    public function save(Request $request){
    	dd($request->input('content'));
    }
}
