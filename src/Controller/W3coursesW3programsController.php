<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3coursesW3programs Controller
 *
 * @method \App\Model\Entity\W3coursesW3program[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3coursesW3programsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3coursesW3programs = $this->paginate($this->W3coursesW3programs);

        $this->set(compact('w3coursesW3programs'));
    }

    /**
     * View method
     *
     * @param string|null $id W3courses W3program id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3coursesW3program = $this->W3coursesW3programs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('w3coursesW3program'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3coursesW3program = $this->W3coursesW3programs->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3coursesW3program = $this->W3coursesW3programs->patchEntity($w3coursesW3program, $this->request->getData());
            if ($this->W3coursesW3programs->save($w3coursesW3program)) {
                $this->Flash->success(__('The w3courses w3program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3courses w3program could not be saved. Please, try again.'));
        }
        $this->set(compact('w3coursesW3program'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3courses W3program id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3coursesW3program = $this->W3coursesW3programs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3coursesW3program = $this->W3coursesW3programs->patchEntity($w3coursesW3program, $this->request->getData());
            if ($this->W3coursesW3programs->save($w3coursesW3program)) {
                $this->Flash->success(__('The w3courses w3program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3courses w3program could not be saved. Please, try again.'));
        }
        $this->set(compact('w3coursesW3program'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3courses W3program id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3coursesW3program = $this->W3coursesW3programs->get($id);
        if ($this->W3coursesW3programs->delete($w3coursesW3program)) {
            $this->Flash->success(__('The w3courses w3program has been deleted.'));
        } else {
            $this->Flash->error(__('The w3courses w3program could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
