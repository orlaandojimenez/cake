<?php
App::uses('AppController', 'Controller');
/**
 * CopiaIdiomas Controller
 *
 * @property CopiaIdioma $CopiaIdioma
 * @property PaginatorComponent $Paginator
 */
class CopiaIdiomasController extends AppController {

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
		$this->CopiaIdioma->recursive = 0;
		$this->set('copiaIdiomas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CopiaIdioma->exists($id)) {
			throw new NotFoundException(__('Invalid copia idioma'));
		}
		$options = array('conditions' => array('CopiaIdioma.' . $this->CopiaIdioma->primaryKey => $id));
		$this->set('copiaIdioma', $this->CopiaIdioma->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CopiaIdioma->create();
			if ($this->CopiaIdioma->save($this->request->data)) {
				$this->Session->setFlash(__('The copia idioma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copia idioma could not be saved. Please, try again.'));
			}
		}
		$peliculaCopias = $this->CopiaIdioma->PeliculaCopia->Pelicula->find('list');
		$this->set(compact('peliculaCopias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CopiaIdioma->exists($id)) {
			throw new NotFoundException(__('Invalid copia idioma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CopiaIdioma->save($this->request->data)) {
				$this->Session->setFlash(__('The copia idioma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The copia idioma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CopiaIdioma.' . $this->CopiaIdioma->primaryKey => $id));
			$this->request->data = $this->CopiaIdioma->find('first', $options);
		}
		$peliculaCopias = $this->CopiaIdioma->PeliculaCopia->Pelicula->find('list');
		$this->set(compact('peliculaCopias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CopiaIdioma->id = $id;
		if (!$this->CopiaIdioma->exists()) {
			throw new NotFoundException(__('Invalid copia idioma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CopiaIdioma->delete()) {
			$this->Session->setFlash(__('The copia idioma has been deleted.'));
		} else {
			$this->Session->setFlash(__('The copia idioma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
