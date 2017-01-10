<?php
App::uses('AppController', 'Controller');
/**
 * Videojuegos Controller
 *
 * @property Videojuego $Videojuego
 * @property PaginatorComponent $Paginator
 */
class VideojuegosController extends AppController {

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
		$this->Videojuego->recursive = 0;
		$this->set('videojuegos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Videojuego->exists($id)) {
			throw new NotFoundException(__('Invalid videojuego'));
		}
		$options = array('conditions' => array('Videojuego.' . $this->Videojuego->primaryKey => $id));
		$this->set('videojuego', $this->Videojuego->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Videojuego->create();
			if ($this->Videojuego->save($this->request->data)) {
				$this->Session->setFlash(__('The videojuego has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videojuego could not be saved. Please, try again.'));
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
		if (!$this->Videojuego->exists($id)) {
			throw new NotFoundException(__('Invalid videojuego'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Videojuego->save($this->request->data)) {
				$this->Session->setFlash(__('The videojuego has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videojuego could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Videojuego.' . $this->Videojuego->primaryKey => $id));
			$this->request->data = $this->Videojuego->find('first', $options);
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
		$this->Videojuego->id = $id;
		if (!$this->Videojuego->exists()) {
			throw new NotFoundException(__('Invalid videojuego'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Videojuego->delete()) {
			$this->Session->setFlash(__('The videojuego has been deleted.'));
		} else {
			$this->Session->setFlash(__('The videojuego could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
