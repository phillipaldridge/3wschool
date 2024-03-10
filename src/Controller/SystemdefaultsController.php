<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Systemdefaults Controller
 *
 * @property \App\Model\Table\SystemdefaultsTable $Systemdefaults
 * @method \App\Model\Entity\Systemdefault[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SystemdefaultsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $systemdefaults = $this->paginate($this->Systemdefaults);

        $this->set(compact('systemdefaults'));
    }

    /**
     * View method
     *
     * @param string|null $id Systemdefault id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $systemdefault = $this->Systemdefaults->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('systemdefault'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $systemdefault = $this->Systemdefaults->newEmptyEntity();
        if ($this->request->is('post')) {
            $systemdefault = $this->Systemdefaults->patchEntity($systemdefault, $this->request->getData());
            if ($this->Systemdefaults->save($systemdefault)) {
                $this->Flash->success(__('The systemdefault has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The systemdefault could not be saved. Please, try again.'));
        }
        $this->set(compact('systemdefault'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Systemdefault id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $systemdefault = $this->Systemdefaults->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $systemdefault = $this->Systemdefaults->patchEntity($systemdefault, $this->request->getData());
            if ($this->Systemdefaults->save($systemdefault)) {
                $this->Flash->success(__('The systemdefault has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The systemdefault could not be saved. Please, try again.'));
        }
        $this->set(compact('systemdefault'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Systemdefault id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $systemdefault = $this->Systemdefaults->get($id);
        if ($this->Systemdefaults->delete($systemdefault)) {
            $this->Flash->success(__('The systemdefault has been deleted.'));
        } else {
            $this->Flash->error(__('The systemdefault could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
