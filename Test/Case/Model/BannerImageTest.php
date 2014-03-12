<?php
App::uses('BannerImage', 'Banners.Model');

/**
 * BannerImage Test Case
 *
 */
class BannerImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.banners.banner_image',
		'plugin.banners.banner'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BannerImage = ClassRegistry::init('Banners.BannerImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BannerImage);

		parent::tearDown();
	}

}
