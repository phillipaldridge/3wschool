<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3programs Controller
 *
 * @property \App\Model\Table\W3programsTable $W3programs
 * @method \App\Model\Entity\W3program[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3programsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3programTypes'],
        ];
        $w3programs = $this->paginate($this->W3programs);

        $this->set(compact('w3programs'));
    }

    /**
     * View method
     *
     * @param string|null $id W3program id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3program = $this->W3programs->get($id, [
            'contain' => ['W3programTypes', 'W3courses', 'W3programruns', 'W3userTrackings'],
        ]);

        $this->set(compact('w3program'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3program = $this->W3programs->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3program = $this->W3programs->patchEntity($w3program, $this->request->getData());
            if ($this->W3programs->save($w3program)) {
                $this->Flash->success(__('The w3program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3program could not be saved. Please, try again.'));
        }
        $w3programTypes = $this->W3programs->W3programTypes->find('list', ['limit' => 200])->all();
        $w3courses = $this->W3programs->W3courses->find('list', ['limit' => 200])->all();
        $this->set(compact('w3program', 'w3programTypes', 'w3courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3program id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3program = $this->W3programs->get($id, [
            'contain' => ['W3courses'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3program = $this->W3programs->patchEntity($w3program, $this->request->getData());
            if ($this->W3programs->save($w3program)) {
                $this->Flash->success(__('The w3program has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3program could not be saved. Please, try again.'));
        }
        $w3programTypes = $this->W3programs->W3programTypes->find('list', ['limit' => 200])->all();
        $w3courses = $this->W3programs->W3courses->find('list', ['limit' => 200])->all();
        $this->set(compact('w3program', 'w3programTypes', 'w3courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3program id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3program = $this->W3programs->get($id);
        if ($this->W3programs->delete($w3program)) {
            $this->Flash->success(__('The w3program has been deleted.'));
        } else {
            $this->Flash->error(__('The w3program could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
