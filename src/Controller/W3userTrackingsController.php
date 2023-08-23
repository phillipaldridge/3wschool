<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3userTrackings Controller
 *
 * @property \App\Model\Table\W3userTrackingsTable $W3userTrackings
 * @method \App\Model\Entity\W3userTracking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3userTrackingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3programruns', 'W3programs', 'W3courses', 'W3classes', 'W3lessons', 'W3chapters', 'W3users'],
        ];
        $w3userTrackings = $this->paginate($this->W3userTrackings);

        $this->set(compact('w3userTrackings'));
    }

    /**
     * View method
     *
     * @param string|null $id W3user Tracking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3userTracking = $this->W3userTrackings->get($id, [
            'contain' => ['W3programruns', 'W3programs', 'W3courses', 'W3classes', 'W3lessons', 'W3chapters', 'W3users'],
        ]);

        $this->set(compact('w3userTracking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3userTracking = $this->W3userTrackings->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3userTracking = $this->W3userTrackings->patchEntity($w3userTracking, $this->request->getData());
            if ($this->W3userTrackings->save($w3userTracking)) {
                $this->Flash->success(__('The w3user tracking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user tracking could not be saved. Please, try again.'));
        }
        $w3programruns = $this->W3userTrackings->W3programruns->find('list', ['limit' => 200])->all();
        $w3programs = $this->W3userTrackings->W3programs->find('list', ['limit' => 200])->all();
        $w3courses = $this->W3userTrackings->W3courses->find('list', ['limit' => 200])->all();
        $w3classes = $this->W3userTrackings->W3classes->find('list', ['limit' => 200])->all();
        $w3lessons = $this->W3userTrackings->W3lessons->find('list', ['limit' => 200])->all();
        $w3chapters = $this->W3userTrackings->W3chapters->find('list', ['limit' => 200])->all();
        $w3users = $this->W3userTrackings->W3users->find('list', ['limit' => 200])->all();
        $this->set(compact('w3userTracking', 'w3programruns', 'w3programs', 'w3courses', 'w3classes', 'w3lessons', 'w3chapters', 'w3users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3user Tracking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3userTracking = $this->W3userTrackings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3userTracking = $this->W3userTrackings->patchEntity($w3userTracking, $this->request->getData());
            if ($this->W3userTrackings->save($w3userTracking)) {
                $this->Flash->success(__('The w3user tracking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3user tracking could not be saved. Please, try again.'));
        }
        $w3programruns = $this->W3userTrackings->W3programruns->find('list', ['limit' => 200])->all();
        $w3programs = $this->W3userTrackings->W3programs->find('list', ['limit' => 200])->all();
        $w3courses = $this->W3userTrackings->W3courses->find('list', ['limit' => 200])->all();
        $w3classes = $this->W3userTrackings->W3classes->find('list', ['limit' => 200])->all();
        $w3lessons = $this->W3userTrackings->W3lessons->find('list', ['limit' => 200])->all();
        $w3chapters = $this->W3userTrackings->W3chapters->find('list', ['limit' => 200])->all();
        $w3users = $this->W3userTrackings->W3users->find('list', ['limit' => 200])->all();
        $this->set(compact('w3userTracking', 'w3programruns', 'w3programs', 'w3courses', 'w3classes', 'w3lessons', 'w3chapters', 'w3users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3user Tracking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3userTracking = $this->W3userTrackings->get($id);
        if ($this->W3userTrackings->delete($w3userTracking)) {
            $this->Flash->success(__('The w3user tracking has been deleted.'));
        } else {
            $this->Flash->error(__('The w3user tracking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
