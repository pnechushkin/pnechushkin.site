<?php

namespace App\Http\Controllers;

use Auth;
use App\Classes\GoogleRecaptcha;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

//use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {
	protected $request;

	public function index() {
		return View( 'AddPage',['title'=>'Сайт-визинтка разработчика'] );
	}

//	function __construct( Request $request ) {
//		$this->request = $request;
//	}

	public function rout( $alias = null ) {
		if ( empty( $alias ) ) {
			return view( 'home',['title'=>'Сайт-визинтка разработчика'] );
		}
		if ( $alias == 'login' ) {
			if ( Auth::user() ) {

				if ( Auth::user()->role == 'admin' ) {

					return redirect( '/admin/home' );
				}
			}

			return view( 'auth.login' );
		}
//
		if ( $alias == 'admin' ) {
			if ( Auth::user() ) {

				if ( Auth::user()->role == 'admin' ) {

					return redirect( '/admin/home' );
				}
			} else {
				return \Response::view( 'errors.404', array(), 404 );
			}
		}
//	    GoogleRecaptcha::class
		dd( $alias );

	}

	public function save( Request $request ) {
		dd( $request->input( 'content' ) );
		dd( $request->file( 'attached_image' ) );
	}

	public function sendmessage() {
		if ( $this->request->ajax() ) {
			$response = $_POST['g-recaptcha-response'];
			$name     = $_POST['name'];
			if ( empty( rtrim( $name ) ) ) {
				return response()->json( [
					'success' => false,
					'error'   => 'Заполните, пожалуйста Ваше имя.'
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

	}
}
