<?php
App::uses('AppController', 'Controller');
/**
 * CopiaPlataformas Controller
 *
 * @property CopiaPlataforma $CopiaPlataforma
 * @property PaginatorComponent $Paginator
 */
class CopiaPlataformasController extends AppController {

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
		$this->CopiaPlataforma->recursive = 0;
		$this->set('copiaPlataformas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CopiaPlataforma->exists($id)) {
			throw new NotFoundException(__('Invalid copia plataforma'));
		}
		$options = array('conditions' => array('CopiaPlataforma.' . $this->CopiaPlataforma->primaryKey => $id));
		$this->set('copiaPlataforma', $this->CopiaPlataforma->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CopiaPlataforma->create();
			if ($this->CopiaPlataforma->save($this->request->data)) {
				$this->Session->setFlash(__('The copia plataforma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copia plataforma could not be saved. Please, try again.'));
			}
		}
		$videojuegoCopias = $this->CopiaPlataforma->VideojuegoCopia->Videojuego->find('list');
		$this->set(compact('videojuegoCopias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CopiaPlataforma->exists($id)) {
			throw new NotFoundException(__('Invalid copia plataforma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CopiaPlataforma->save($this->request->data)) {
				$this->Session->setFlash(__('The copia plataforma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copia plataforma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CopiaPlataforma.' . $this->CopiaPlataforma->primaryKey => $id));
			$this->request->data = $this->CopiaPlataforma->find('first', $options);
		}
		$videojuegoCopias = $this->CopiaPlataforma->VideojuegoCopia->Videojuego->find('list');
		$this->set(compact('videojuegoCopias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CopiaPlataforma->id = $id;
		if (!$this->CopiaPlataforma->exists()) {
			throw new NotFoundException(__('Invalid copia plataforma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CopiaPlataforma->delete()) {
			$this->Session->setFlash(__('The copia plataforma has been deleted.'));
		} else {
			$this->Session->setFlash(__('The copia plataforma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
