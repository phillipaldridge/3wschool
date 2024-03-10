<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Defaults Controller
 *
 * @property \App\Model\Table\DefaultsTable $Defaults
 * @method \App\Model\Entity\Default[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DefaultsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $defaults = $this->paginate($this->Defaults);

        $this->set(compact('defaults'));
    }

    /**
     * View method
     *
     * @param string|null $id Default id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $default = $this->Defaults->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('default'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $default = $this->Defaults->newEmptyEntity();
        if ($this->request->is('post')) {
            $default = $this->Defaults->patchEntity($default, $this->request->getData());
            if ($this->Defaults->save($default)) {
                $this->Flash->success(__('The default has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default could not be saved. Please, try again.'));
        }
        $this->set(compact('default'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Default id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $default = $this->Defaults->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $default = $this->Defaults->patchEntity($default, $this->request->getData());
            if ($this->Defaults->save($default)) {
                $this->Flash->success(__('The default has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default could not be saved. Please, try again.'));
        }
        $this->set(compact('default'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Default id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $default = $this->Defaults->get($id);
        if ($this->Defaults->delete($default)) {
            $this->Flash->success(__('The default has been deleted.'));
        } else {
            $this->Flash->error(__('The default could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
