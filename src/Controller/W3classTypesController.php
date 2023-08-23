<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3classTypes Controller
 *
 * @property \App\Model\Table\W3classTypesTable $W3classTypes
 * @method \App\Model\Entity\W3classType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3classTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3classTypes = $this->paginate($this->W3classTypes);

        $this->set(compact('w3classTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id W3class Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3classType = $this->W3classTypes->get($id, [
            'contain' => ['W3classes'],
        ]);

        $this->set(compact('w3classType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3classType = $this->W3classTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3classType = $this->W3classTypes->patchEntity($w3classType, $this->request->getData());
            if ($this->W3classTypes->save($w3classType)) {
                $this->Flash->success(__('The w3class type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3class type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3classType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3class Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3classType = $this->W3classTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3classType = $this->W3classTypes->patchEntity($w3classType, $this->request->getData());
            if ($this->W3classTypes->save($w3classType)) {
                $this->Flash->success(__('The w3class type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3class type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3classType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3class Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3classType = $this->W3classTypes->get($id);
        if ($this->W3classTypes->delete($w3classType)) {
            $this->Flash->success(__('The w3class type has been deleted.'));
        } else {
            $this->Flash->error(__('The w3class type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
