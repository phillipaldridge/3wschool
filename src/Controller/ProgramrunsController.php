<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Programruns Controller
 *
 * @property \App\Model\Table\ProgramrunsTable $Programruns
 * @method \App\Model\Entity\Programrun[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramrunsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Programs', 'ProgramrunTypes'],
        ];
        $programruns = $this->paginate($this->Programruns);

        $this->set(compact('programruns'));
    }

    /**
     * View method
     *
     * @param string|null $id Programrun id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programrun = $this->Programruns->get($id, [
            'contain' => ['Programs', 'ProgramrunTypes', 'Users', 'UserTrackings'],
        ]);

        $this->set(compact('programrun'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programrun = $this->Programruns->newEmptyEntity();
        if ($this->request->is('post')) {
            $programrun = $this->Programruns->patchEntity($programrun, $this->request->getData());
            if ($this->Programruns->save($programrun)) {
                $this->Flash->success(__('The programrun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programrun could not be saved. Please, try again.'));
        }
        $programs = $this->Programruns->Programs->find('list', ['limit' => 200])->all();
        $programrunTypes = $this->Programruns->ProgramrunTypes->find('list', ['limit' => 200])->all();
        $users = $this->Programruns->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('programrun', 'programs', 'programrunTypes', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programrun id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programrun = $this->Programruns->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programrun = $this->Programruns->patchEntity($programrun, $this->request->getData());
            if ($this->Programruns->save($programrun)) {
                $this->Flash->success(__('The programrun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programrun could not be saved. Please, try again.'));
        }
        $programs = $this->Programruns->Programs->find('list', ['limit' => 200])->all();
        $programrunTypes = $this->Programruns->ProgramrunTypes->find('list', ['limit' => 200])->all();
        $users = $this->Programruns->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('programrun', 'programs', 'programrunTypes', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programrun id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programrun = $this->Programruns->get($id);
        if ($this->Programruns->delete($programrun)) {
            $this->Flash->success(__('The programrun has been deleted.'));
        } else {
            $this->Flash->error(__('The programrun could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
