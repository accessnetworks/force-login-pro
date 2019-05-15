<?php
/**
 * Force Login Pro - File Checks.
 *
 * @package force-login-pro
 */

/**
 * Force_Login_Pro_File_Checks.
 */
class Force_Login_Pro_File_Checks extends WP_UnitTestCase {

	/**
	 * Verify Readme.md Exists.
	 *
	 * @access public
	 */
	public function test_readme_md_exists() {
		$this->assertFileExists( 'README.md' );
	}

	/**
	 * Verify Readme.txt Exists.
	 *
	 * @access public
	 */
	public function test_readme_txt_exists() {
		$this->assertFileExists( 'readme.txt' );
	}
	/**
	 * Verify Uninstall File Exists.
	 *
	 * @access public
	 */
	public function test_uninstall_exists() {
		$this->assertFileExists( 'uninstall.php' );
	}
	/**
	 * Verify Force Login Pro Class File Exists.
	 *
	 * @access public
	 */
	public function test_class_api_log_pro_exists() {
		$this->assertFileExists( 'force-login-pro.php' );
	}

}
