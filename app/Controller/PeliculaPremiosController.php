<?php
App::uses('AppController', 'Controller');
/**
 * PeliculaPremios Controller
 *
 * @property PeliculaPremio $PeliculaPremio
 * @property PaginatorComponent $Paginator
 */
class PeliculaPremiosController extends AppController {

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
		$this->PeliculaPremio->recursive = 0;
		$this->set('peliculaPremios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculaPremio->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula premio'));
		}
		$options = array('conditions' => array('PeliculaPremio.' . $this->PeliculaPremio->primaryKey => $id));
		$this->set('peliculaPremio', $this->PeliculaPremio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculaPremio->create();
			if ($this->PeliculaPremio->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula premio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula premio could not be saved. Please, try again.'));
			}
		}
		$peliculas = $this->PeliculaPremio->Pelicula->find('list');
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
		if (!$this->PeliculaPremio->exists($id)) {
			throw new NotFoundException(__('Invalid pelicula premio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculaPremio->save($this->request->data)) {
				$this->Session->setFlash(__('The pelicula premio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pelicula premio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculaPremio.' . $this->PeliculaPremio->primaryKey => $id));
			$this->request->data = $this->PeliculaPremio->find('first', $options);
		}
		$peliculas = $this->PeliculaPremio->Pelicula->find('list');
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
		$this->PeliculaPremio->id = $id;
		if (!$this->PeliculaPremio->exists()) {
			throw new NotFoundException(__('Invalid pelicula premio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculaPremio->delete()) {
			$this->Session->setFlash(__('The pelicula premio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pelicula premio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
