<?php

namespace App\Classes;
class GoogleRecaptcha {

	protected static $remoteip;
	protected static $valid = false;


	function __construct() {
		self::$remoteip = $_SERVER['REMOTE_ADDR'];
	}

	/**
	 * @param $response
	 *
	 * @return bool
	 */
	static function validation( $response, $seckretKey ) {
		if ( empty( $response ) ) {
			return self::$valid;
		}
		$response     = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $seckretKey . "&response=" . $response . "&remoteip=" . self::$remoteip );
		$responseKeys = json_decode( $response );
		if ( $responseKeys->success ) {
			return $responseKeys->success;
		}

		return self::$valid;
	}
}