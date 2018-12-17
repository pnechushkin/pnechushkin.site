<?php

namespace App\Http\Controllers;

use App\Classes\GoogleRecaptcha;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	protected $request;

    public function index(){
    	return View('AddPage');
    }
    function __construct(Request $request) {
    	$this->request = $request;
    }

	public function rout( $alias=null){
    	if(empty($alias)){
		    return view('home');
	    }
//	    TODO добавить ключи гугл каптчи в env
	    if ($alias =='sendmessage' && $this->request->ajax()){
    		$response = $_POST['g-recaptcha-response'];
		    $seckretKey = config('app.SeckretGoogleRecaptchaKey');
    		dd(GoogleRecaptcha::validation($response,$seckretKey));
    		return 'Ajax';
	    }
//	    GoogleRecaptcha::class
    	dd($alias);

    }
    public function save(Request $request){
	    dd($request->input('content'));
	    dd($request->file('attached_image'));
    }
}
