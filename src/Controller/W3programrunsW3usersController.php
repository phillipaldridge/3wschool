<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3programrunsW3users Controller
 *
 * @method \App\Model\Entity\W3programrunsW3user[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3programrunsW3usersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3programrunsW3users = $this->paginate($this->W3programrunsW3users);

        $this->set(compact('w3programrunsW3users'));
    }

    /**
     * View method
     *
     * @param string|null $id W3programruns W3user id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3programrunsW3user = $this->W3programrunsW3users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('w3programrunsW3user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3programrunsW3user = $this->W3programrunsW3users->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3programrunsW3user = $this->W3programrunsW3users->patchEntity($w3programrunsW3user, $this->request->getData());
            if ($this->W3programrunsW3users->save($w3programrunsW3user)) {
                $this->Flash->success(__('The w3programruns w3user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3programruns w3user could not be saved. Please, try again.'));
        }
        $this->set(compact('w3programrunsW3user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3programruns W3user id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3programrunsW3user = $this->W3programrunsW3users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3programrunsW3user = $this->W3programrunsW3users->patchEntity($w3programrunsW3user, $this->request->getData());
            if ($this->W3programrunsW3users->save($w3programrunsW3user)) {
                $this->Flash->success(__('The w3programruns w3user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3programruns w3user could not be saved. Please, try again.'));
        }
        $this->set(compact('w3programrunsW3user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3programruns W3user id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3programrunsW3user = $this->W3programrunsW3users->get($id);
        if ($this->W3programrunsW3users->delete($w3programrunsW3user)) {
            $this->Flash->success(__('The w3programruns w3user has been deleted.'));
        } else {
            $this->Flash->error(__('The w3programruns w3user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
