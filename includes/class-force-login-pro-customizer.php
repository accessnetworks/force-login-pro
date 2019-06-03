<?php
/**
 * Customizer Settings for Force Login Pro.
 *
 * @package force-login-pro
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Force_Login_Pro_Customizer' ) ) {

	require_once ABSPATH . WPINC . '/class-wp-customize-control.php';

	/**
	 * Force_Login_Pro_Customizer.
	 */
	class Force_Login_Pro_Customizer {

		/**
		 * Constructing a customizing running lemming.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register' ) );
		}
		/**
		 * Idxbroker_customize_register function.
		 *
		 * @access public
		 * @param mixed $wp_customize Support Customizer.
		 * @return void
		 */
		function register( $wp_customize ) {

			// Integrations.
			$wp_customize->add_panel(
				'forceloginpro_panel',
				array(
					'priority'       => 10,
					'capability'     => 'manage_options',
					'theme_supports' => '',
					'title'          => __( 'Force Login Pro', 'force-login-pro' ),
					'description'    => __( 'Settings for Force Login Pro.', 'force-login-pro' ),
				)
			);

			// Whitelist Section.
			$wp_customize->add_section(
				'forceloginpro_whitelist_section',
				array(
					'title'       => __( 'Whitelist', 'force-login-pro' ),
					'description' => __( 'Add any urls or IPs you wish to Whitelist.', 'force-login-pro' ),
					'priority'    => 30,
					'panel'       => 'forceloginpro_panel',
				)
			);

			// Whitelist Settings.
			$wp_customize->add_setting(
				'forceloginpro[whitelist_urls]',
				array(
					'default'   => '',
					'type'      => 'option',
					'transport' => 'refresh',
				)
			);
			// Whitelist Controls.
			$wp_customize->add_control(
				'forceloginpro_whitelist_urls',
				array(
					'label'       => __( 'Whitelist URLs', 'force-login-pro' ),
					'description' => __( 'Please provide any URLs you wish to Whitelist. Each URL MUST be on a new line.', 'force-login-pro' ),
					'type'        => 'textarea',
					'section'     => 'forceloginpro_whitelist_section',
					'settings'    => 'forceloginpro[whitelist_urls]',
				)
			);

			// Bypass Section.
			$wp_customize->add_section(
				'forceloginpro_bypass_section',
				array(
					'title'       => __( 'Bypass', 'force-login-pro' ),
					'description' => __( 'Add any urls or IPs you wish to Whitelist.', 'force-login-pro' ),
					'priority'    => 30,
					'panel'       => 'forceloginpro_panel',
				)
			);

			// Bypass Settings.
			$wp_customize->add_setting(
				'forceloginpro[bypass]',
				array(
					'default'   => '',
					'type'      => 'option',
					'transport' => 'refresh',
				)
			);
			//Bypass Controls.
			$wp_customize->add_control(
				'forceloginpro_bypass',
				array(
					'label'       => __( 'Allowed to Bypass', 'force-login-pro' ),
					'description' => __( 'Please provide any IP Addresses or domains you wish to let Bypass.', 'force-login-pro' ),
					'type'        => 'textarea',
					'section'     => 'forceloginpro_bypass_section',
					'settings'    => 'forceloginpro[bypass]',
				)
			);

			// Rest API Section.
			$wp_customize->add_section(
				'forceloginpro_restapi_section',
				array(
					'title'       => __( 'Rest API', 'force-login-pro' ),
					'description' => __( 'Choose to block or not block the rest API.', 'force-login-pro' ),
					'priority'    => 30,
					'panel'       => 'forceloginpro_panel',
				)
			);

			// Rest API Settings.
			$wp_customize->add_setting(
				'forceloginpro[enable_rest_api]',
				array(
					'default'   => '',
					'type'      => 'option',
					'transport' => 'refresh',
				)
			);
			// Rest API Controls.
			$wp_customize->add_control(
				'forceloginpro_unblock_rest_api',
				array(
					'label'       => __( 'Unblock Rest API', 'force-login-pro' ),
					'description' => __( 'Check this box if you wish to unblock the rest API.', 'force-login-pro' ),
					'type'        => 'checkbox',
					'section'     => 'forceloginpro_restapi_section',
					'settings'    => 'forceloginpro[enable_rest_api]',
				)
			);


			// Idea Timelimit. Unblock for 1 hour, etc.

		}
	}

	new Force_Login_Pro_Customizer();

}
