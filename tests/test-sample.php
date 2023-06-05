<?php
/**
 * Class SampleTest
 *
 * @package Test_Plugin_Wpcli_Wp61
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_sample() {
		// Replace this with some actual testing code.
		$this->assertNotEmpty( wp_oembed_get( "https://www.youtube.com/watch?v=dWRCooFKk3c" ) );
	}
}
