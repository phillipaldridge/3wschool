<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3classesW3lessons Controller
 *
 * @method \App\Model\Entity\W3classesW3lesson[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3classesW3lessonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3classesW3lessons = $this->paginate($this->W3classesW3lessons);

        $this->set(compact('w3classesW3lessons'));
    }

    /**
     * View method
     *
     * @param string|null $id W3classes W3lesson id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3classesW3lesson = $this->W3classesW3lessons->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('w3classesW3lesson'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3classesW3lesson = $this->W3classesW3lessons->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3classesW3lesson = $this->W3classesW3lessons->patchEntity($w3classesW3lesson, $this->request->getData());
            if ($this->W3classesW3lessons->save($w3classesW3lesson)) {
                $this->Flash->success(__('The w3classes w3lesson has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3classes w3lesson could not be saved. Please, try again.'));
        }
        $this->set(compact('w3classesW3lesson'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3classes W3lesson id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3classesW3lesson = $this->W3classesW3lessons->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3classesW3lesson = $this->W3classesW3lessons->patchEntity($w3classesW3lesson, $this->request->getData());
            if ($this->W3classesW3lessons->save($w3classesW3lesson)) {
                $this->Flash->success(__('The w3classes w3lesson has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3classes w3lesson could not be saved. Please, try again.'));
        }
        $this->set(compact('w3classesW3lesson'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3classes W3lesson id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3classesW3lesson = $this->W3classesW3lessons->get($id);
        if ($this->W3classesW3lessons->delete($w3classesW3lesson)) {
            $this->Flash->success(__('The w3classes w3lesson has been deleted.'));
        } else {
            $this->Flash->error(__('The w3classes w3lesson could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
