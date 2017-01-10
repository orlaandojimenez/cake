<?php
App::uses('AppController', 'Controller');
/**
 * Membresias Controller
 *
 * @property Membresia $Membresia
 * @property PaginatorComponent $Paginator
 */
class MembresiasController extends AppController {

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
		$this->Membresia->recursive = 0;
		$this->set('membresias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Membresia->exists($id)) {
			throw new NotFoundException(__('Invalid membresia'));
		}
		$options = array('conditions' => array('Membresia.' . $this->Membresia->primaryKey => $id));
		$this->set('membresia', $this->Membresia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Membresia->create();
			if ($this->Membresia->save($this->request->data)) {
				$this->Session->setFlash(__('The membresia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membresia could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Membresia->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Membresia->exists($id)) {
			throw new NotFoundException(__('Invalid membresia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Membresia->save($this->request->data)) {
				$this->Session->setFlash(__('The membresia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membresia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Membresia.' . $this->Membresia->primaryKey => $id));
			$this->request->data = $this->Membresia->find('first', $options);
		}
		$clientes = $this->Membresia->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Membresia->id = $id;
		if (!$this->Membresia->exists()) {
			throw new NotFoundException(__('Invalid membresia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Membresia->delete()) {
			$this->Session->setFlash(__('The membresia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The membresia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
