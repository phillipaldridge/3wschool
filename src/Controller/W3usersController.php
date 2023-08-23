<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3users Controller
 *
 * @property \App\Model\Table\W3usersTable $W3users
 * @method \App\Model\Entity\W3user[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3usersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3users = $this->paginate($this->W3users);

        $this->set(compact('w3users'));
    }

    /**
     * View method
     *
     * @param string|null $id W3user id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3user = $this->W3users->get($id, [
            'contain' => ['W3programruns', 'W3userProfiles', 'W3userAddresses', 'W3userTrackings'],
        ]);

        $this->set(compact('w3user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3user = $this->W3users->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3user = $this->W3users->patchEntity($w3user, $this->request->getData());
            if ($this->W3users->save($w3user)) {
                $this->Flash->success(__('The w3user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user could not be saved. Please, try again.'));
        }
        $w3programruns = $this->W3users->W3programruns->find('list', ['limit' => 200])->all();
        $this->set(compact('w3user', 'w3programruns'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3user id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3user = $this->W3users->get($id, [
            'contain' => ['W3programruns'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3user = $this->W3users->patchEntity($w3user, $this->request->getData());
            if ($this->W3users->save($w3user)) {
                $this->Flash->success(__('The w3user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user could not be saved. Please, try again.'));
        }
        $w3programruns = $this->W3users->W3programruns->find('list', ['limit' => 200])->all();
        $this->set(compact('w3user', 'w3programruns'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3user id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3user = $this->W3users->get($id);
        if ($this->W3users->delete($w3user)) {
            $this->Flash->success(__('The w3user has been deleted.'));
        } else {
            $this->Flash->error(__('The w3user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
