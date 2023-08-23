<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3defaults Controller
 *
 * @property \App\Model\Table\W3defaultsTable $W3defaults
 * @method \App\Model\Entity\W3default[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3defaultsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3defaults = $this->paginate($this->W3defaults);

        $this->set(compact('w3defaults'));
    }

    /**
     * View method
     *
     * @param string|null $id W3default id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3default = $this->W3defaults->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('w3default'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3default = $this->W3defaults->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3default = $this->W3defaults->patchEntity($w3default, $this->request->getData());
            if ($this->W3defaults->save($w3default)) {
                $this->Flash->success(__('The w3default has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3default could not be saved. Please, try again.'));
        }
        $this->set(compact('w3default'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3default id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3default = $this->W3defaults->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3default = $this->W3defaults->patchEntity($w3default, $this->request->getData());
            if ($this->W3defaults->save($w3default)) {
                $this->Flash->success(__('The w3default has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3default could not be saved. Please, try again.'));
        }
        $this->set(compact('w3default'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3default id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3default = $this->W3defaults->get($id);
        if ($this->W3defaults->delete($w3default)) {
            $this->Flash->success(__('The w3default has been deleted.'));
        } else {
            $this->Flash->error(__('The w3default could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
