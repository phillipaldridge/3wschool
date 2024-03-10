<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CourseTypes Controller
 *
 * @property \App\Model\Table\CourseTypesTable $CourseTypes
 * @method \App\Model\Entity\CourseType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CourseTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $courseTypes = $this->paginate($this->CourseTypes);

        $this->set(compact('courseTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Course Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courseType = $this->CourseTypes->get($id, [
            'contain' => ['Courses'],
        ]);

        $this->set(compact('courseType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courseType = $this->CourseTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $courseType = $this->CourseTypes->patchEntity($courseType, $this->request->getData());
            if ($this->CourseTypes->save($courseType)) {
                $this->Flash->success(__('The course type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course type could not be saved. Please, try again.'));
        }
        $this->set(compact('courseType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courseType = $this->CourseTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courseType = $this->CourseTypes->patchEntity($courseType, $this->request->getData());
            if ($this->CourseTypes->save($courseType)) {
                $this->Flash->success(__('The course type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course type could not be saved. Please, try again.'));
        }
        $this->set(compact('courseType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courseType = $this->CourseTypes->get($id);
        if ($this->CourseTypes->delete($courseType)) {
            $this->Flash->success(__('The course type has been deleted.'));
        } else {
            $this->Flash->error(__('The course type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
