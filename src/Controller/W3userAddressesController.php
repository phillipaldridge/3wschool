<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3userAddresses Controller
 *
 * @property \App\Model\Table\W3userAddressesTable $W3userAddresses
 * @method \App\Model\Entity\W3userAddress[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3userAddressesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3users', 'W3countries'],
        ];
        $w3userAddresses = $this->paginate($this->W3userAddresses);

        $this->set(compact('w3userAddresses'));
    }

    /**
     * View method
     *
     * @param string|null $id W3user Address id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3userAddress = $this->W3userAddresses->get($id, [
            'contain' => ['W3users', 'W3countries'],
        ]);

        $this->set(compact('w3userAddress'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3userAddress = $this->W3userAddresses->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3userAddress = $this->W3userAddresses->patchEntity($w3userAddress, $this->request->getData());
            if ($this->W3userAddresses->save($w3userAddress)) {
                $this->Flash->success(__('The w3user address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user address could not be saved. Please, try again.'));
        }
        $w3users = $this->W3userAddresses->W3users->find('list', ['limit' => 200])->all();
        $w3countries = $this->W3userAddresses->W3countries->find('list', ['limit' => 200])->all();
        $this->set(compact('w3userAddress', 'w3users', 'w3countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3user Address id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3userAddress = $this->W3userAddresses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3userAddress = $this->W3userAddresses->patchEntity($w3userAddress, $this->request->getData());
            if ($this->W3userAddresses->save($w3userAddress)) {
                $this->Flash->success(__('The w3user address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user address could not be saved. Please, try again.'));
        }
        $w3users = $this->W3userAddresses->W3users->find('list', ['limit' => 200])->all();
        $w3countries = $this->W3userAddresses->W3countries->find('list', ['limit' => 200])->all();
        $this->set(compact('w3userAddress', 'w3users', 'w3countries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3user Address id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3userAddress = $this->W3userAddresses->get($id);
        if ($this->W3userAddresses->delete($w3userAddress)) {
            $this->Flash->success(__('The w3user address has been deleted.'));
        } else {
            $this->Flash->error(__('The w3user address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
