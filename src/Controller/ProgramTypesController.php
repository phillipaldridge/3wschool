<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProgramTypes Controller
 *
 * @property \App\Model\Table\ProgramTypesTable $ProgramTypes
 * @method \App\Model\Entity\ProgramType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $programTypes = $this->paginate($this->ProgramTypes);

        $this->set(compact('programTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Program Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programType = $this->ProgramTypes->get($id, [
            'contain' => ['Programs'],
        ]);

        $this->set(compact('programType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programType = $this->ProgramTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $programType = $this->ProgramTypes->patchEntity($programType, $this->request->getData());
            if ($this->ProgramTypes->save($programType)) {
                $this->Flash->success(__('The program type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program type could not be saved. Please, try again.'));
        }
        $this->set(compact('programType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Program Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programType = $this->ProgramTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programType = $this->ProgramTypes->patchEntity($programType, $this->request->getData());
            if ($this->ProgramTypes->save($programType)) {
                $this->Flash->success(__('The program type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program type could not be saved. Please, try again.'));
        }
        $this->set(compact('programType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Program Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programType = $this->ProgramTypes->get($id);
        if ($this->ProgramTypes->delete($programType)) {
            $this->Flash->success(__('The program type has been deleted.'));
        } else {
            $this->Flash->error(__('The program type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
