<?php
App::uses('AppController', 'Controller');
/**
 * RentaCopias Controller
 *
 * @property RentaCopia $RentaCopia
 * @property PaginatorComponent $Paginator
 */
class RentaCopiasController extends AppController {

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
		$this->RentaCopia->recursive = 0;
		$this->set('rentaCopias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RentaCopia->exists($id)) {
			throw new NotFoundException(__('Invalid renta copia'));
		}
		$options = array('conditions' => array('RentaCopia.' . $this->RentaCopia->primaryKey => $id));
		$this->set('rentaCopia', $this->RentaCopia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RentaCopia->create();
			if ($this->RentaCopia->save($this->request->data)) {
				$this->Session->setFlash(__('The renta copia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renta copia could not be saved. Please, try again.'));
			}
		}
		$rentas = $this->RentaCopia->Renta->Membresia->Cliente->find('list');
		$peliculaCopias = $this->RentaCopia->PeliculaCopia->Pelicula->find('list');
		$videojuegoCopias = $this->RentaCopia->VideojuegoCopia->Videojuego->find('list');
		$this->set(compact('rentas', 'peliculaCopias', 'videojuegoCopias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RentaCopia->exists($id)) {
			throw new NotFoundException(__('Invalid renta copia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RentaCopia->save($this->request->data)) {
				$this->Session->setFlash(__('The renta copia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renta copia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RentaCopia.' . $this->RentaCopia->primaryKey => $id));
			$this->request->data = $this->RentaCopia->find('first', $options);
		}
		$rentas = $this->RentaCopia->Renta->find('list');
		$peliculaCopias = $this->RentaCopia->PeliculaCopium->find('list');
		$videojuegoCopias = $this->RentaCopia->VideojuegoCopium->find('list');
		$this->set(compact('rentas', 'peliculaCopias', 'videojuegoCopias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RentaCopia->id = $id;
		if (!$this->RentaCopia->exists()) {
			throw new NotFoundException(__('Invalid renta copia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RentaCopia->delete()) {
			$this->Session->setFlash(__('The renta copia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The renta copia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
