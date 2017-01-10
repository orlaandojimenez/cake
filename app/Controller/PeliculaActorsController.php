<?php
App::uses('AppController', 'Controller');
/**
 * PeliculaActors Controller
 *
 * @property PeliculaActor $PeliculaActor
 * @property PaginatorComponent $Paginator
 */
class PeliculaActorsController extends AppController {

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
		$this->PeliculaActor->recursive = 0;
		$this->set('peliculaActors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculaActor->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula actor'));
		}
		$options = array('conditions' => array('PeliculaActor.' . $this->PeliculaActor->primaryKey => $id));
		$this->set('peliculaActor', $this->PeliculaActor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculaActor->create();
			if ($this->PeliculaActor->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula actor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula actor could not be saved. Please, try again.'));
			}
		}
		$peliculas = $this->PeliculaActor->Pelicula->find('list');
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
		if (!$this->PeliculaActor->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula actor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculaActor->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula actor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula actor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculaActor.' . $this->PeliculaActor->primaryKey => $id));
			$this->request->data = $this->PeliculaActor->find('first', $options);
		}
		$peliculas = $this->PeliculaActor->Pelicula->find('list');
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
		$this->PeliculaActor->id = $id;
		if (!$this->PeliculaActor->exists()) {
			throw new NotFoundException(__('Invalid pelicula actor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculaActor->delete()) {
			$this->Session->setFlash(__('The pelicula actor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pelicula actor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
