<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ClassroomTypes Controller
 *
 * @property \App\Model\Table\ClassroomTypesTable $ClassroomTypes
 * @method \App\Model\Entity\ClassroomType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClassroomTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $classroomTypes = $this->paginate($this->ClassroomTypes);

        $this->set(compact('classroomTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Classroom Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classroomType = $this->ClassroomTypes->get($id, [
            'contain' => ['Classrooms'],
        ]);

        $this->set(compact('classroomType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classroomType = $this->ClassroomTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $classroomType = $this->ClassroomTypes->patchEntity($classroomType, $this->request->getData());
            if ($this->ClassroomTypes->save($classroomType)) {
                $this->Flash->success(__('The classroom type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom type could not be saved. Please, try again.'));
        }
        $this->set(compact('classroomType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Classroom Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classroomType = $this->ClassroomTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classroomType = $this->ClassroomTypes->patchEntity($classroomType, $this->request->getData());
            if ($this->ClassroomTypes->save($classroomType)) {
                $this->Flash->success(__('The classroom type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom type could not be saved. Please, try again.'));
        }
        $this->set(compact('classroomType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Classroom Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classroomType = $this->ClassroomTypes->get($id);
        if ($this->ClassroomTypes->delete($classroomType)) {
            $this->Flash->success(__('The classroom type has been deleted.'));
        } else {
            $this->Flash->error(__('The classroom type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
