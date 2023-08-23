<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3chapterActions Controller
 *
 * @property \App\Model\Table\W3chapterActionsTable $W3chapterActions
 * @method \App\Model\Entity\W3chapterAction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3chapterActionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3chapterActions = $this->paginate($this->W3chapterActions);

        $this->set(compact('w3chapterActions'));
    }

    /**
     * View method
     *
     * @param string|null $id W3chapter Action id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3chapterAction = $this->W3chapterActions->get($id, [
            'contain' => ['W3chapterPaths'],
        ]);

        $this->set(compact('w3chapterAction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3chapterAction = $this->W3chapterActions->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3chapterAction = $this->W3chapterActions->patchEntity($w3chapterAction, $this->request->getData());
            if ($this->W3chapterActions->save($w3chapterAction)) {
                $this->Flash->success(__('The w3chapter action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter action could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterAction'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3chapter Action id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3chapterAction = $this->W3chapterActions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3chapterAction = $this->W3chapterActions->patchEntity($w3chapterAction, $this->request->getData());
            if ($this->W3chapterActions->save($w3chapterAction)) {
                $this->Flash->success(__('The w3chapter action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter action could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterAction'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3chapter Action id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3chapterAction = $this->W3chapterActions->get($id);
        if ($this->W3chapterActions->delete($w3chapterAction)) {
            $this->Flash->success(__('The w3chapter action has been deleted.'));
        } else {
            $this->Flash->error(__('The w3chapter action could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
