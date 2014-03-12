<?php
App::uses('BannersAppModel', 'Banners.Model');
/**
 * Banner Model
 *
 * @property BannerImage $BannerImage
 */
class Banner extends BannersAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BannerImage' => array(
			'className' => 'BannerImage',
			'foreignKey' => 'banner_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
