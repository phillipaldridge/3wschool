<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3lessonTypes Controller
 *
 * @property \App\Model\Table\W3lessonTypesTable $W3lessonTypes
 * @method \App\Model\Entity\W3lessonType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3lessonTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3lessonTypes = $this->paginate($this->W3lessonTypes);

        $this->set(compact('w3lessonTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id W3lesson Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3lessonType = $this->W3lessonTypes->get($id, [
            'contain' => ['W3lessons'],
        ]);

        $this->set(compact('w3lessonType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3lessonType = $this->W3lessonTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3lessonType = $this->W3lessonTypes->patchEntity($w3lessonType, $this->request->getData());
            if ($this->W3lessonTypes->save($w3lessonType)) {
                $this->Flash->success(__('The w3lesson type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3lesson type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3lessonType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3lesson Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3lessonType = $this->W3lessonTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3lessonType = $this->W3lessonTypes->patchEntity($w3lessonType, $this->request->getData());
            if ($this->W3lessonTypes->save($w3lessonType)) {
                $this->Flash->success(__('The w3lesson type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3lesson type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3lessonType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3lesson Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3lessonType = $this->W3lessonTypes->get($id);
        if ($this->W3lessonTypes->delete($w3lessonType)) {
            $this->Flash->success(__('The w3lesson type has been deleted.'));
        } else {
            $this->Flash->error(__('The w3lesson type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
