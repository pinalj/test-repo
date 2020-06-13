<?php
/**
 * Plugin Name: Addon to Action Scheduler
 * Description: This addon will allow the user to modify the frequency of a recurring scheduled action.
 * Version: 1.0
 * Author: Pinal Shah
 * WC Requires at least: 3.0.0
 * WC tested up to: 3.9.0
 * Domain Path: /languages/
 *
 * @package Addon to AS
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Addon_Modify_AS_Frequency' ) ) {

	class Addon_Modify_AS_Frequency {

		public function __construct() {
			add_filter( 'woocommerce_general_settings', array( __CLASS__, 'masf_new_section' ), 10, 1 );
		}

		public static function masf_new_section( $settings ) {

			$custom   = array(
				array(
					'name' => __( 'Modify Action Scheduler Frequency', 'addon-modify-as-frequency' ),
					'type' => 'title',
					'desc' => __( 'Change the frequency of a recurring scheduled action.', 'addon-modify-as-frequency' ),
					'id'   => 'masf_options',
				),
				array(
					'name'     => __( 'Action Name', 'woocommerce' ),
					'desc'     => __( 'Name of the recurring action whose frequency needs to be changed', 'addon-modify-as-frequency' ),
					'id'       => 'masf_action_name',
					'css'      => 'min-width:150px;',
					'type'     => 'text',
					'desc_tip' => true,
				),
				array(
					'name'        => __( 'New Frequency', 'woocommerce' ),
					'desc'        => __( 'New frequency to be set for the recurring action', 'addon-modify-as-frequency' ),
					'id'          => 'masf_action_frequency',
					'placeholder' => __( 'Frequency in minutes', 'addon-modify-as-frequency' ),
					'min'         => 1,
					'css'         => 'max-width: 180px',
					'type'        => 'number',
					'desc_tip'    => true,
				),
				array(
					'type' => 'sectionend',
					'id'   => 'masf_options',
				),
			);
			$settings = array_merge( $settings, $custom );

			return $settings;
		}

		public static function amf_tests() {
			echo "Hi, you're into amf_tests";
		}

		public static function amf_tests2() {
			echo "In the second function <br>";
		}

		public static function amf_tests3() {
			echo "In the third function <br>";
		}
	}
}
$modify_as_frequency = new Addon_Modify_AS_Frequency();
