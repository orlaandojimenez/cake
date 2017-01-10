<?php
App::uses('AppController', 'Controller');
/**
 * Peliculas Controller
 *
 * @property Pelicula $Pelicula
 * @property PaginatorComponent $Paginator
 */
class PeliculasController extends AppController {

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
		$this->Pelicula->recursive = 0;
		$this->set('peliculas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pelicula->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula'));
		}
		$options = array('conditions' => array('Pelicula.' . $this->Pelicula->primaryKey => $id));
		$this->set('pelicula', $this->Pelicula->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pelicula->create();
			if ($this->Pelicula->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pelicula->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pelicula->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pelicula.' . $this->Pelicula->primaryKey => $id));
			$this->request->data = $this->Pelicula->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pelicula->id = $id;
		if (!$this->Pelicula->exists()) {
			throw new NotFoundException(__('Invalid pelicula'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pelicula->delete()) {
			$this->Session->setFlash(__('The pelicula has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pelicula could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
