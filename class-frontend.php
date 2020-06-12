<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'AMF_Frontend' ) ) {

	class AMF_Frontend {

		public function __construct() {
		}

		public static function tests() {
			echo "Hey!";
		}

	}
}
