<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3courses Controller
 *
 * @property \App\Model\Table\W3coursesTable $W3courses
 * @method \App\Model\Entity\W3course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3coursesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3courseTypes'],
        ];
        $w3courses = $this->paginate($this->W3courses);

        $this->set(compact('w3courses'));
    }

    /**
     * View method
     *
     * @param string|null $id W3course id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3course = $this->W3courses->get($id, [
            'contain' => ['W3courseTypes', 'W3classes', 'W3programs', 'W3userTrackings'],
        ]);

        $this->set(compact('w3course'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3course = $this->W3courses->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3course = $this->W3courses->patchEntity($w3course, $this->request->getData());
            if ($this->W3courses->save($w3course)) {
                $this->Flash->success(__('The w3course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3course could not be saved. Please, try again.'));
        }
        $w3courseTypes = $this->W3courses->W3courseTypes->find('list', ['limit' => 200])->all();
        $w3classes = $this->W3courses->W3classes->find('list', ['limit' => 200])->all();
        $w3programs = $this->W3courses->W3programs->find('list', ['limit' => 200])->all();
        $this->set(compact('w3course', 'w3courseTypes', 'w3classes', 'w3programs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3course id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3course = $this->W3courses->get($id, [
            'contain' => ['W3classes', 'W3programs'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3course = $this->W3courses->patchEntity($w3course, $this->request->getData());
            if ($this->W3courses->save($w3course)) {
                $this->Flash->success(__('The w3course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3course could not be saved. Please, try again.'));
        }
        $w3courseTypes = $this->W3courses->W3courseTypes->find('list', ['limit' => 200])->all();
        $w3classes = $this->W3courses->W3classes->find('list', ['limit' => 200])->all();
        $w3programs = $this->W3courses->W3programs->find('list', ['limit' => 200])->all();
        $this->set(compact('w3course', 'w3courseTypes', 'w3classes', 'w3programs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3course id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3course = $this->W3courses->get($id);
        if ($this->W3courses->delete($w3course)) {
            $this->Flash->success(__('The w3course has been deleted.'));
        } else {
            $this->Flash->error(__('The w3course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
