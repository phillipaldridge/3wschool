<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3programTypes Controller
 *
 * @property \App\Model\Table\W3programTypesTable $W3programTypes
 * @method \App\Model\Entity\W3programType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3programTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3programTypes = $this->paginate($this->W3programTypes);

        $this->set(compact('w3programTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id W3program Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3programType = $this->W3programTypes->get($id, [
            'contain' => ['W3programs'],
        ]);

        $this->set(compact('w3programType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3programType = $this->W3programTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3programType = $this->W3programTypes->patchEntity($w3programType, $this->request->getData());
            if ($this->W3programTypes->save($w3programType)) {
                $this->Flash->success(__('The w3program type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3program type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3programType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3program Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3programType = $this->W3programTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3programType = $this->W3programTypes->patchEntity($w3programType, $this->request->getData());
            if ($this->W3programTypes->save($w3programType)) {
                $this->Flash->success(__('The w3program type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3program type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3programType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3program Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3programType = $this->W3programTypes->get($id);
        if ($this->W3programTypes->delete($w3programType)) {
            $this->Flash->success(__('The w3program type has been deleted.'));
        } else {
            $this->Flash->error(__('The w3program type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
