<?php
App::uses('AppController', 'Controller');
/**
 * VideojuegoCopias Controller
 *
 * @property VideojuegoCopia $VideojuegoCopia
 * @property PaginatorComponent $Paginator
 */
class VideojuegoCopiasController extends AppController {

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
		$this->VideojuegoCopia->recursive = 0;
		$this->set('videojuegoCopias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VideojuegoCopia->exists($id)) {
			throw new NotFoundException(__('Invalid videojuego copia'));
		}
		$options = array('conditions' => array('VideojuegoCopia.' . $this->VideojuegoCopia->primaryKey => $id));
		$this->set('videojuegoCopia', $this->VideojuegoCopia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VideojuegoCopia->create();
			if ($this->VideojuegoCopia->save($this->request->data)) {
				$this->Session->setFlash(__('The videojuego copia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videojuego copia could not be saved. Please, try again.'));
			}
		}
		$videojuegos = $this->VideojuegoCopia->Videojuego->find('list');
		$this->set(compact('videojuegos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VideojuegoCopia->exists($id)) {
			throw new NotFoundException(__('Invalid videojuego copia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VideojuegoCopia->save($this->request->data)) {
				$this->Session->setFlash(__('The videojuego copia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videojuego copia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VideojuegoCopia.' . $this->VideojuegoCopia->primaryKey => $id));
			$this->request->data = $this->VideojuegoCopia->find('first', $options);
		}
		$videojuegos = $this->VideojuegoCopia->Videojuego->find('list');
		$this->set(compact('videojuegos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VideojuegoCopia->id = $id;
		if (!$this->VideojuegoCopia->exists()) {
			throw new NotFoundException(__('Invalid videojuego copia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->VideojuegoCopia->delete()) {
			$this->Session->setFlash(__('The videojuego copia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The videojuego copia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
