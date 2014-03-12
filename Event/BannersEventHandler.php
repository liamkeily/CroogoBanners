<?php
App::uses('CakeEventListener','Event');

class BannersEventHandler implements CakeEventListener {
	public function implementedEvents() {
		return array(
		'Croogo.setupAdminData' => array(
		'callable' => 'onSetupAdminData',
		),
		);
	}

	public function onSetupAdminData($event){
		CroogoNav::add('banners', array(
		'title' => __d('croogo', 'Banners'),
		'icon' => array('star', 'large'),
		'url' => array(
		'admin' => true,
		'plugin' => 'banners',
		'controller' => 'banners',
		'action' => 'index',

		),
		));
	}
}
