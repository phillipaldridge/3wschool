<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UserTrackings Controller
 *
 * @property \App\Model\Table\UserTrackingsTable $UserTrackings
 * @method \App\Model\Entity\UserTracking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserTrackingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Programruns', 'Programs', 'Courses', 'Lessons', 'Chapters', 'Users'],
        ];
        $userTrackings = $this->paginate($this->UserTrackings);

        $this->set(compact('userTrackings'));
    }

    /**
     * View method
     *
     * @param string|null $id User Tracking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userTracking = $this->UserTrackings->get($id, [
            'contain' => ['Programruns', 'Programs', 'Courses', 'Lessons', 'Chapters', 'Users'],
        ]);

        $this->set(compact('userTracking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userTracking = $this->UserTrackings->newEmptyEntity();
        if ($this->request->is('post')) {
            $userTracking = $this->UserTrackings->patchEntity($userTracking, $this->request->getData());
            if ($this->UserTrackings->save($userTracking)) {
                $this->Flash->success(__('The user tracking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user tracking could not be saved. Please, try again.'));
        }
        $programruns = $this->UserTrackings->Programruns->find('list', ['limit' => 200])->all();
        $programs = $this->UserTrackings->Programs->find('list', ['limit' => 200])->all();
        $courses = $this->UserTrackings->Courses->find('list', ['limit' => 200])->all();
        $lessons = $this->UserTrackings->Lessons->find('list', ['limit' => 200])->all();
        $chapters = $this->UserTrackings->Chapters->find('list', ['limit' => 200])->all();
        $users = $this->UserTrackings->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('userTracking', 'programruns', 'programs', 'courses', 'lessons', 'chapters', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Tracking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userTracking = $this->UserTrackings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userTracking = $this->UserTrackings->patchEntity($userTracking, $this->request->getData());
            if ($this->UserTrackings->save($userTracking)) {
                $this->Flash->success(__('The user tracking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user tracking could not be saved. Please, try again.'));
        }
        $programruns = $this->UserTrackings->Programruns->find('list', ['limit' => 200])->all();
        $programs = $this->UserTrackings->Programs->find('list', ['limit' => 200])->all();
        $courses = $this->UserTrackings->Courses->find('list', ['limit' => 200])->all();
        $lessons = $this->UserTrackings->Lessons->find('list', ['limit' => 200])->all();
        $chapters = $this->UserTrackings->Chapters->find('list', ['limit' => 200])->all();
        $users = $this->UserTrackings->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('userTracking', 'programruns', 'programs', 'courses', 'lessons', 'chapters', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Tracking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userTracking = $this->UserTrackings->get($id);
        if ($this->UserTrackings->delete($userTracking)) {
            $this->Flash->success(__('The user tracking has been deleted.'));
        } else {
            $this->Flash->error(__('The user tracking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
