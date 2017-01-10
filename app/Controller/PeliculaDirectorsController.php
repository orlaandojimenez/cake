<?php
App::uses('AppController', 'Controller');
/**
 * PeliculaDirectors Controller
 *
 * @property PeliculaDirector $PeliculaDirector
 * @property PaginatorComponent $Paginator
 */
class PeliculaDirectorsController extends AppController {

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
		$this->PeliculaDirector->recursive = 0;
		$this->set('peliculaDirectors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculaDirector->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula director'));
		}
		$options = array('conditions' => array('PeliculaDirector.' . $this->PeliculaDirector->primaryKey => $id));
		$this->set('peliculaDirector', $this->PeliculaDirector->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculaDirector->create();
			if ($this->PeliculaDirector->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula director has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula director could not be saved. Please, try again.'));
			}
		}
		$peliculas = $this->PeliculaDirector->Pelicula->find('list');
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
		if (!$this->PeliculaDirector->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula director'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculaDirector->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula director has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula director could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculaDirector.' . $this->PeliculaDirector->primaryKey => $id));
			$this->request->data = $this->PeliculaDirector->find('first', $options);
		}
		$peliculas = $this->PeliculaDirector->Pelicula->find('list');
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
		$this->PeliculaDirector->id = $id;
		if (!$this->PeliculaDirector->exists()) {
			throw new NotFoundException(__('Invalid pelicula director'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculaDirector->delete()) {
			$this->Session->setFlash(__('The pelicula director has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pelicula director could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
