<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3classesW3courses Controller
 *
 * @method \App\Model\Entity\W3classesW3course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3classesW3coursesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3classesW3courses = $this->paginate($this->W3classesW3courses);

        $this->set(compact('w3classesW3courses'));
    }

    /**
     * View method
     *
     * @param string|null $id W3classes W3course id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3classesW3course = $this->W3classesW3courses->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('w3classesW3course'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3classesW3course = $this->W3classesW3courses->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3classesW3course = $this->W3classesW3courses->patchEntity($w3classesW3course, $this->request->getData());
            if ($this->W3classesW3courses->save($w3classesW3course)) {
                $this->Flash->success(__('The w3classes w3course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3classes w3course could not be saved. Please, try again.'));
        }
        $this->set(compact('w3classesW3course'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3classes W3course id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3classesW3course = $this->W3classesW3courses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3classesW3course = $this->W3classesW3courses->patchEntity($w3classesW3course, $this->request->getData());
            if ($this->W3classesW3courses->save($w3classesW3course)) {
                $this->Flash->success(__('The w3classes w3course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3classes w3course could not be saved. Please, try again.'));
        }
        $this->set(compact('w3classesW3course'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3classes W3course id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3classesW3course = $this->W3classesW3courses->get($id);
        if ($this->W3classesW3courses->delete($w3classesW3course)) {
            $this->Flash->success(__('The w3classes w3course has been deleted.'));
        } else {
            $this->Flash->error(__('The w3classes w3course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
