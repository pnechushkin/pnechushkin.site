<?php

namespace App\Http\Controllers;

use App\Classes\GoogleRecaptcha;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller {
	protected $request;

	public function index() {
		return View( 'AddPage' );
	}

	function __construct( Request $request ) {
		$this->request = $request;
	}

	public function rout( $alias = null ) {
		if ( empty( $alias ) ) {
			return view( 'home' );
		}
		if ( $alias == 'sendmessage' && $this->request->ajax() ) {
			$response   = $_POST['g-recaptcha-response'];
			$name       = $_POST['name'];
			if(empty(rtrim($name))){
				return response()->json( [
					'success' => false,
					'error'    => 'Заполните, пожалуйста Ваше имя.'
				] );
			}
			$email      = $_POST['email'];
			$subject    = $_POST['subject'];
			$message    = $_POST['message'];
			$seckretKey = config( 'app.SeckretGoogleRecaptchaKey' );
//			dd( GoogleRecaptcha::validation( $response, $seckretKey ) );

			return response()->json( [
				'success' => true,
				'html'    => 'Ваше сообщение успешно отправленно.'
			] );
		}
//	    GoogleRecaptcha::class
		dd( $alias );

	}

	public function save( Request $request ) {
		dd( $request->input( 'content' ) );
		dd( $request->file( 'attached_image' ) );
	}
}
