<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3userProfiles Controller
 *
 * @property \App\Model\Table\W3userProfilesTable $W3userProfiles
 * @method \App\Model\Entity\W3userProfile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3userProfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3users'],
        ];
        $w3userProfiles = $this->paginate($this->W3userProfiles);

        $this->set(compact('w3userProfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id W3user Profile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3userProfile = $this->W3userProfiles->get($id, [
            'contain' => ['W3users'],
        ]);

        $this->set(compact('w3userProfile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3userProfile = $this->W3userProfiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3userProfile = $this->W3userProfiles->patchEntity($w3userProfile, $this->request->getData());
            if ($this->W3userProfiles->save($w3userProfile)) {
                $this->Flash->success(__('The w3user profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user profile could not be saved. Please, try again.'));
        }
        $w3users = $this->W3userProfiles->W3users->find('list', ['limit' => 200])->all();
        $this->set(compact('w3userProfile', 'w3users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3user Profile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3userProfile = $this->W3userProfiles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3userProfile = $this->W3userProfiles->patchEntity($w3userProfile, $this->request->getData());
            if ($this->W3userProfiles->save($w3userProfile)) {
                $this->Flash->success(__('The w3user profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user profile could not be saved. Please, try again.'));
        }
        $w3users = $this->W3userProfiles->W3users->find('list', ['limit' => 200])->all();
        $this->set(compact('w3userProfile', 'w3users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3user Profile id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3userProfile = $this->W3userProfiles->get($id);
        if ($this->W3userProfiles->delete($w3userProfile)) {
            $this->Flash->success(__('The w3user profile has been deleted.'));
        } else {
            $this->Flash->error(__('The w3user profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
