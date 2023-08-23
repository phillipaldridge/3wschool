<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3programrunTypes Controller
 *
 * @property \App\Model\Table\W3programrunTypesTable $W3programrunTypes
 * @method \App\Model\Entity\W3programrunType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3programrunTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3programrunTypes = $this->paginate($this->W3programrunTypes);

        $this->set(compact('w3programrunTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id W3programrun Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3programrunType = $this->W3programrunTypes->get($id, [
            'contain' => ['W3programruns'],
        ]);

        $this->set(compact('w3programrunType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3programrunType = $this->W3programrunTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3programrunType = $this->W3programrunTypes->patchEntity($w3programrunType, $this->request->getData());
            if ($this->W3programrunTypes->save($w3programrunType)) {
                $this->Flash->success(__('The w3programrun type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3programrun type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3programrunType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3programrun Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3programrunType = $this->W3programrunTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3programrunType = $this->W3programrunTypes->patchEntity($w3programrunType, $this->request->getData());
            if ($this->W3programrunTypes->save($w3programrunType)) {
                $this->Flash->success(__('The w3programrun type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3programrun type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3programrunType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3programrun Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3programrunType = $this->W3programrunTypes->get($id);
        if ($this->W3programrunTypes->delete($w3programrunType)) {
            $this->Flash->success(__('The w3programrun type has been deleted.'));
        } else {
            $this->Flash->error(__('The w3programrun type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
