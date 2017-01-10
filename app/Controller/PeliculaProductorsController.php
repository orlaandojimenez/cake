<?php
App::uses('AppController', 'Controller');
/**
 * PeliculaProductors Controller
 *
 * @property PeliculaProductor $PeliculaProductor
 * @property PaginatorComponent $Paginator
 */
class PeliculaProductorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PeliculaProductor->recursive = 0;
		$this->set('peliculaProductors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculaProductor->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula productor'));
		}
		$options = array('conditions' => array('PeliculaProductor.' . $this->PeliculaProductor->primaryKey => $id));
		$this->set('peliculaProductor', $this->PeliculaProductor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculaProductor->create();
			if ($this->PeliculaProductor->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula productor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula productor could not be saved. Please, try again.'));
			}
		}
		$peliculas = $this->PeliculaProductor->Pelicula->find('list');
		$this->set(compact('peliculas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PeliculaProductor->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula productor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculaProductor->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula productor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula productor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculaProductor.' . $this->PeliculaProductor->primaryKey => $id));
			$this->request->data = $this->PeliculaProductor->find('first', $options);
		}
		$peliculas = $this->PeliculaProductor->Pelicula->find('list');
		$this->set(compact('peliculas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PeliculaProductor->id = $id;
		if (!$this->PeliculaProductor->exists()) {
			throw new NotFoundException(__('Invalid pelicula productor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculaProductor->delete()) {
			$this->Session->setFlash(__('The pelicula productor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pelicula productor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
