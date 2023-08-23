<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3chapterAccesses Controller
 *
 * @property \App\Model\Table\W3chapterAccessesTable $W3chapterAccesses
 * @method \App\Model\Entity\W3chapterAccess[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3chapterAccessesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3chapterAccesses = $this->paginate($this->W3chapterAccesses);

        $this->set(compact('w3chapterAccesses'));
    }

    /**
     * View method
     *
     * @param string|null $id W3chapter Access id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3chapterAccess = $this->W3chapterAccesses->get($id, [
            'contain' => ['W3chapters'],
        ]);

        $this->set(compact('w3chapterAccess'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3chapterAccess = $this->W3chapterAccesses->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3chapterAccess = $this->W3chapterAccesses->patchEntity($w3chapterAccess, $this->request->getData());
            if ($this->W3chapterAccesses->save($w3chapterAccess)) {
                $this->Flash->success(__('The w3chapter access has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter access could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterAccess'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3chapter Access id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3chapterAccess = $this->W3chapterAccesses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3chapterAccess = $this->W3chapterAccesses->patchEntity($w3chapterAccess, $this->request->getData());
            if ($this->W3chapterAccesses->save($w3chapterAccess)) {
                $this->Flash->success(__('The w3chapter access has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter access could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterAccess'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3chapter Access id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3chapterAccess = $this->W3chapterAccesses->get($id);
        if ($this->W3chapterAccesses->delete($w3chapterAccess)) {
            $this->Flash->success(__('The w3chapter access has been deleted.'));
        } else {
            $this->Flash->error(__('The w3chapter access could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
