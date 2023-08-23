<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3courseTypes Controller
 *
 * @property \App\Model\Table\W3courseTypesTable $W3courseTypes
 * @method \App\Model\Entity\W3courseType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3courseTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3courseTypes = $this->paginate($this->W3courseTypes);

        $this->set(compact('w3courseTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id W3course Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3courseType = $this->W3courseTypes->get($id, [
            'contain' => ['W3courses'],
        ]);

        $this->set(compact('w3courseType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3courseType = $this->W3courseTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3courseType = $this->W3courseTypes->patchEntity($w3courseType, $this->request->getData());
            if ($this->W3courseTypes->save($w3courseType)) {
                $this->Flash->success(__('The w3course type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3course type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3courseType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3course Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3courseType = $this->W3courseTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3courseType = $this->W3courseTypes->patchEntity($w3courseType, $this->request->getData());
            if ($this->W3courseTypes->save($w3courseType)) {
                $this->Flash->success(__('The w3course type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3course type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3courseType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3course Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3courseType = $this->W3courseTypes->get($id);
        if ($this->W3courseTypes->delete($w3courseType)) {
            $this->Flash->success(__('The w3course type has been deleted.'));
        } else {
            $this->Flash->error(__('The w3course type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
