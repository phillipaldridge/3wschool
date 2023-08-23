<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3classes Controller
 *
 * @property \App\Model\Table\W3classesTable $W3classes
 * @method \App\Model\Entity\W3class[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3classesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3classTypes'],
        ];
        $w3classes = $this->paginate($this->W3classes);

        $this->set(compact('w3classes'));
    }

    /**
     * View method
     *
     * @param string|null $id W3class id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3class = $this->W3classes->get($id, [
            'contain' => ['W3classTypes', 'W3lessons', 'W3courses', 'W3userTrackings'],
        ]);

        $this->set(compact('w3class'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3class = $this->W3classes->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3class = $this->W3classes->patchEntity($w3class, $this->request->getData());
            if ($this->W3classes->save($w3class)) {
                $this->Flash->success(__('The w3class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3class could not be saved. Please, try again.'));
        }
        $w3classTypes = $this->W3classes->W3classTypes->find('list', ['limit' => 200])->all();
        $w3lessons = $this->W3classes->W3lessons->find('list', ['limit' => 200])->all();
        $w3courses = $this->W3classes->W3courses->find('list', ['limit' => 200])->all();
        $this->set(compact('w3class', 'w3classTypes', 'w3lessons', 'w3courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3class id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3class = $this->W3classes->get($id, [
            'contain' => ['W3lessons', 'W3courses'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3class = $this->W3classes->patchEntity($w3class, $this->request->getData());
            if ($this->W3classes->save($w3class)) {
                $this->Flash->success(__('The w3class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3class could not be saved. Please, try again.'));
        }
        $w3classTypes = $this->W3classes->W3classTypes->find('list', ['limit' => 200])->all();
        $w3lessons = $this->W3classes->W3lessons->find('list', ['limit' => 200])->all();
        $w3courses = $this->W3classes->W3courses->find('list', ['limit' => 200])->all();
        $this->set(compact('w3class', 'w3classTypes', 'w3lessons', 'w3courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3class id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3class = $this->W3classes->get($id);
        if ($this->W3classes->delete($w3class)) {
            $this->Flash->success(__('The w3class has been deleted.'));
        } else {
            $this->Flash->error(__('The w3class could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
