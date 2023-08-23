<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3countries Controller
 *
 * @property \App\Model\Table\W3countriesTable $W3countries
 * @method \App\Model\Entity\W3country[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3countriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3countries = $this->paginate($this->W3countries);

        $this->set(compact('w3countries'));
    }

    /**
     * View method
     *
     * @param string|null $id W3country id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3country = $this->W3countries->get($id, [
            'contain' => ['W3userAddresses'],
        ]);

        $this->set(compact('w3country'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3country = $this->W3countries->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3country = $this->W3countries->patchEntity($w3country, $this->request->getData());
            if ($this->W3countries->save($w3country)) {
                $this->Flash->success(__('The w3country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3country could not be saved. Please, try again.'));
        }
        $this->set(compact('w3country'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3country id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3country = $this->W3countries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3country = $this->W3countries->patchEntity($w3country, $this->request->getData());
            if ($this->W3countries->save($w3country)) {
                $this->Flash->success(__('The w3country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3country could not be saved. Please, try again.'));
        }
        $this->set(compact('w3country'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3country id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3country = $this->W3countries->get($id);
        if ($this->W3countries->delete($w3country)) {
            $this->Flash->success(__('The w3country has been deleted.'));
        } else {
            $this->Flash->error(__('The w3country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
