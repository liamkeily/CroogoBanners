<?php
App::uses('Banner', 'Banners.Model');

/**
 * Banner Test Case
 *
 */
class BannerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.banners.banner',
		'plugin.banners.banner_image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Banner = ClassRegistry::init('Banners.Banner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Banner);

		parent::tearDown();
	}

}
