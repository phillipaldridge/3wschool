<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3lessons Controller
 *
 * @property \App\Model\Table\W3lessonsTable $W3lessons
 * @method \App\Model\Entity\W3lesson[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3lessonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3lessonTypes'],
        ];
        $w3lessons = $this->paginate($this->W3lessons);

        $this->set(compact('w3lessons'));
    }

    /**
     * View method
     *
     * @param string|null $id W3lesson id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3lesson = $this->W3lessons->get($id, [
            'contain' => ['W3lessonTypes', 'W3classes', 'W3chapters', 'W3userTrackings'],
        ]);

        $this->set(compact('w3lesson'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3lesson = $this->W3lessons->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3lesson = $this->W3lessons->patchEntity($w3lesson, $this->request->getData());
            if ($this->W3lessons->save($w3lesson)) {
                $this->Flash->success(__('The w3lesson has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3lesson could not be saved. Please, try again.'));
        }
        $w3lessonTypes = $this->W3lessons->W3lessonTypes->find('list', ['limit' => 200])->all();
        $w3classes = $this->W3lessons->W3classes->find('list', ['limit' => 200])->all();
        $this->set(compact('w3lesson', 'w3lessonTypes', 'w3classes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3lesson id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3lesson = $this->W3lessons->get($id, [
            'contain' => ['W3classes'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3lesson = $this->W3lessons->patchEntity($w3lesson, $this->request->getData());
            if ($this->W3lessons->save($w3lesson)) {
                $this->Flash->success(__('The w3lesson has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3lesson could not be saved. Please, try again.'));
        }
        $w3lessonTypes = $this->W3lessons->W3lessonTypes->find('list', ['limit' => 200])->all();
        $w3classes = $this->W3lessons->W3classes->find('list', ['limit' => 200])->all();
        $this->set(compact('w3lesson', 'w3lessonTypes', 'w3classes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3lesson id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3lesson = $this->W3lessons->get($id);
        if ($this->W3lessons->delete($w3lesson)) {
            $this->Flash->success(__('The w3lesson has been deleted.'));
        } else {
            $this->Flash->error(__('The w3lesson could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
