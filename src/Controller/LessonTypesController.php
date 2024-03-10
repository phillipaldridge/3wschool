<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LessonTypes Controller
 *
 * @property \App\Model\Table\LessonTypesTable $LessonTypes
 * @method \App\Model\Entity\LessonType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LessonTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $lessonTypes = $this->paginate($this->LessonTypes);

        $this->set(compact('lessonTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Lesson Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lessonType = $this->LessonTypes->get($id, [
            'contain' => ['Lessons'],
        ]);

        $this->set(compact('lessonType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lessonType = $this->LessonTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $lessonType = $this->LessonTypes->patchEntity($lessonType, $this->request->getData());
            if ($this->LessonTypes->save($lessonType)) {
                $this->Flash->success(__('The lesson type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lesson type could not be saved. Please, try again.'));
        }
        $this->set(compact('lessonType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lesson Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lessonType = $this->LessonTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lessonType = $this->LessonTypes->patchEntity($lessonType, $this->request->getData());
            if ($this->LessonTypes->save($lessonType)) {
                $this->Flash->success(__('The lesson type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lesson type could not be saved. Please, try again.'));
        }
        $this->set(compact('lessonType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lesson Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lessonType = $this->LessonTypes->get($id);
        if ($this->LessonTypes->delete($lessonType)) {
            $this->Flash->success(__('The lesson type has been deleted.'));
        } else {
            $this->Flash->error(__('The lesson type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
