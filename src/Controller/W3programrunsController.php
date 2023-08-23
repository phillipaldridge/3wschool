<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3programruns Controller
 *
 * @property \App\Model\Table\W3programrunsTable $W3programruns
 * @method \App\Model\Entity\W3programrun[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3programrunsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3programs', 'W3programrunTypes'],
        ];
        $w3programruns = $this->paginate($this->W3programruns);

        $this->set(compact('w3programruns'));
    }

    /**
     * View method
     *
     * @param string|null $id W3programrun id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3programrun = $this->W3programruns->get($id, [
            'contain' => ['W3programs', 'W3programrunTypes', 'W3users', 'W3userTrackings'],
        ]);

        $this->set(compact('w3programrun'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3programrun = $this->W3programruns->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3programrun = $this->W3programruns->patchEntity($w3programrun, $this->request->getData());
            if ($this->W3programruns->save($w3programrun)) {
                $this->Flash->success(__('The w3programrun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3programrun could not be saved. Please, try again.'));
        }
        $w3programs = $this->W3programruns->W3programs->find('list', ['limit' => 200])->all();
        $w3programrunTypes = $this->W3programruns->W3programrunTypes->find('list', ['limit' => 200])->all();
        $w3users = $this->W3programruns->W3users->find('list', ['limit' => 200])->all();
        $this->set(compact('w3programrun', 'w3programs', 'w3programrunTypes', 'w3users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3programrun id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3programrun = $this->W3programruns->get($id, [
            'contain' => ['W3users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3programrun = $this->W3programruns->patchEntity($w3programrun, $this->request->getData());
            if ($this->W3programruns->save($w3programrun)) {
                $this->Flash->success(__('The w3programrun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3programrun could not be saved. Please, try again.'));
        }
        $w3programs = $this->W3programruns->W3programs->find('list', ['limit' => 200])->all();
        $w3programrunTypes = $this->W3programruns->W3programrunTypes->find('list', ['limit' => 200])->all();
        $w3users = $this->W3programruns->W3users->find('list', ['limit' => 200])->all();
        $this->set(compact('w3programrun', 'w3programs', 'w3programrunTypes', 'w3users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3programrun id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3programrun = $this->W3programruns->get($id);
        if ($this->W3programruns->delete($w3programrun)) {
            $this->Flash->success(__('The w3programrun has been deleted.'));
        } else {
            $this->Flash->error(__('The w3programrun could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
