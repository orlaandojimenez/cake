<?php
App::uses('AppController', 'Controller');
/**
 * ClienteTelefonos Controller
 *
 * @property ClienteTelefono $ClienteTelefono
 * @property PaginatorComponent $Paginator
 */
class ClienteTelefonosController extends AppController {

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
		$this->ClienteTelefono->recursive = 0;
		$this->set('clienteTelefonos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClienteTelefono->exists($id)) {
			throw new NotFoundException(__('Invalid cliente telefono'));
		}
		$options = array('conditions' => array('ClienteTelefono.' . $this->ClienteTelefono->primaryKey => $id));
		$this->set('clienteTelefono', $this->ClienteTelefono->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClienteTelefono->create();
			if ($this->ClienteTelefono->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente telefono has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente telefono could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->ClienteTelefono->Cliente->find('list');
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
		if (!$this->ClienteTelefono->exists($id)) {
			throw new NotFoundException(__('Invalid cliente telefono'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClienteTelefono->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente telefono has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente telefono could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClienteTelefono.' . $this->ClienteTelefono->primaryKey => $id));
			$this->request->data = $this->ClienteTelefono->find('first', $options);
		}
		$clientes = $this->ClienteTelefono->Cliente->find('list');
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
		$this->ClienteTelefono->id = $id;
		if (!$this->ClienteTelefono->exists()) {
			throw new NotFoundException(__('Invalid cliente telefono'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClienteTelefono->delete()) {
			$this->Session->setFlash(__('The cliente telefono has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cliente telefono could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
