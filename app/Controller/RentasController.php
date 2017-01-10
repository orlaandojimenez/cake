<?php
App::uses('AppController', 'Controller');
/**
 * Rentas Controller
 *
 * @property Renta $Renta
 * @property PaginatorComponent $Paginator
 */
class RentasController extends AppController {

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
		$this->Renta->recursive = 0;
		$this->set('rentas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Renta->exists($id)) {
			throw new NotFoundException(__('Invalid renta'));
		}
		$options = array('conditions' => array('Renta.' . $this->Renta->primaryKey => $id));
		$this->set('renta', $this->Renta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Renta->create();
			if ($this->Renta->save($this->request->data)) {
				$this->Session->setFlash(__('The renta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renta could not be saved. Please, try again.'));
			}
		}
		
		$membresias = $this->Renta->Membresia->Cliente->find('list');
		$this->set(compact('membresias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Renta->exists($id)) {
			throw new NotFoundException(__('Invalid renta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Renta->save($this->request->data)) {
				$this->Session->setFlash(__('The renta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Renta.' . $this->Renta->primaryKey => $id));
			$this->request->data = $this->Renta->find('first', $options);
		}
		$membresias = $this->Renta->Membresia->Cliente->find('list');
		$this->set(compact('membresias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Renta->id = $id;
		if (!$this->Renta->exists()) {
			throw new NotFoundException(__('Invalid renta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Renta->delete()) {
			$this->Session->setFlash(__('The renta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The renta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
