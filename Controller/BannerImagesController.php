<?php
App::uses('BannersAppController', 'Banners.Controller');
/**
 * BannerImages Controller
 *
 * @property BannerImage $BannerImage
 * @property PaginatorComponent $Paginator
 */
class BannerImagesController extends BannersAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->BannerImage->recursive = 0;
		$this->set('bannerImages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BannerImage->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid banner image'));
		}
		$options = array('conditions' => array('BannerImage.' . $this->BannerImage->primaryKey => $id));
		$this->set('bannerImage', $this->BannerImage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->BannerImage->create();
			if ($this->BannerImage->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The banner image has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The banner image could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$banners = $this->BannerImage->Banner->find('list');
		$this->set(compact('banners'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->BannerImage->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid banner image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BannerImage->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The banner image has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The banner image could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('BannerImage.' . $this->BannerImage->primaryKey => $id));
			$this->request->data = $this->BannerImage->find('first', $options);
		}
		$banners = $this->BannerImage->Banner->find('list');
		$this->set(compact('banners'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->BannerImage->id = $id;
		if (!$this->BannerImage->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid banner image'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BannerImage->delete()) {
			$this->Session->setFlash(__d('croogo', 'Banner image deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Banner image was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}}
