<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProgramrunTypes Controller
 *
 * @property \App\Model\Table\ProgramrunTypesTable $ProgramrunTypes
 * @method \App\Model\Entity\ProgramrunType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramrunTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $programrunTypes = $this->paginate($this->ProgramrunTypes);

        $this->set(compact('programrunTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Programrun Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programrunType = $this->ProgramrunTypes->get($id, [
            'contain' => ['Programruns'],
        ]);

        $this->set(compact('programrunType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programrunType = $this->ProgramrunTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $programrunType = $this->ProgramrunTypes->patchEntity($programrunType, $this->request->getData());
            if ($this->ProgramrunTypes->save($programrunType)) {
                $this->Flash->success(__('The programrun type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programrun type could not be saved. Please, try again.'));
        }
        $this->set(compact('programrunType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programrun Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programrunType = $this->ProgramrunTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programrunType = $this->ProgramrunTypes->patchEntity($programrunType, $this->request->getData());
            if ($this->ProgramrunTypes->save($programrunType)) {
                $this->Flash->success(__('The programrun type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programrun type could not be saved. Please, try again.'));
        }
        $this->set(compact('programrunType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programrun Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programrunType = $this->ProgramrunTypes->get($id);
        if ($this->ProgramrunTypes->delete($programrunType)) {
            $this->Flash->success(__('The programrun type has been deleted.'));
        } else {
            $this->Flash->error(__('The programrun type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
