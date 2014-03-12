<?php
App::uses('BannersAppModel', 'Banners.Model');
/**
 * BannerImage Model
 *
 * @property Banner $Banner
 */
class BannerImage extends BannersAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'banner_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Banner' => array(
			'className' => 'Banner',
			'foreignKey' => 'banner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
