<?php
App::uses('AppController', 'Controller');
/**
 * PeliculaCopias Controller
 *
 * @property PeliculaCopia $PeliculaCopia
 * @property PaginatorComponent $Paginator
 */
class PeliculaCopiasController extends AppController {

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
		$this->PeliculaCopia->recursive = 0;
		$this->set('peliculaCopias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculaCopia->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula copia'));
		}
		$options = array('conditions' => array('PeliculaCopia.' . $this->PeliculaCopia->primaryKey => $id));
		$this->set('peliculaCopia', $this->PeliculaCopia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculaCopia->create();
			if ($this->PeliculaCopia->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula copia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula copia could not be saved. Please, try again.'));
			}
		}
		$peliculas = $this->PeliculaCopia->Pelicula->find('list');
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
		if (!$this->PeliculaCopia->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula copia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculaCopia->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula copia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula copia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculaCopia.' . $this->PeliculaCopia->primaryKey => $id));
			$this->request->data = $this->PeliculaCopia->find('first', $options);
		}
		$peliculas = $this->PeliculaCopia->Pelicula->find('list');
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
		$this->PeliculaCopia->id = $id;
		if (!$this->PeliculaCopia->exists()) {
			throw new NotFoundException(__('Invalid pelicula copia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculaCopia->delete()) {
			$this->Session->setFlash(__('The pelicula copia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pelicula copia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
