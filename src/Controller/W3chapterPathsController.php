<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3chapterPaths Controller
 *
 * @property \App\Model\Table\W3chapterPathsTable $W3chapterPaths
 * @method \App\Model\Entity\W3chapterPath[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3chapterPathsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3chapters', 'W3chapterRules', 'W3chapterActions'],
        ];
        $w3chapterPaths = $this->paginate($this->W3chapterPaths);

        $this->set(compact('w3chapterPaths'));
    }

    /**
     * View method
     *
     * @param string|null $id W3chapter Path id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3chapterPath = $this->W3chapterPaths->get($id, [
            'contain' => ['W3chapters', 'W3chapterRules', 'W3chapterActions'],
        ]);

        $this->set(compact('w3chapterPath'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3chapterPath = $this->W3chapterPaths->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3chapterPath = $this->W3chapterPaths->patchEntity($w3chapterPath, $this->request->getData());
            if ($this->W3chapterPaths->save($w3chapterPath)) {
                $this->Flash->success(__('The w3chapter path has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter path could not be saved. Please, try again.'));
        }
        $w3chapters = $this->W3chapterPaths->W3chapters->find('list', ['limit' => 200])->all();
        $w3chapterRules = $this->W3chapterPaths->W3chapterRules->find('list', ['limit' => 200])->all();
        $w3chapterActions = $this->W3chapterPaths->W3chapterActions->find('list', ['limit' => 200])->all();
        $this->set(compact('w3chapterPath', 'w3chapters', 'w3chapterRules', 'w3chapterActions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3chapter Path id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3chapterPath = $this->W3chapterPaths->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3chapterPath = $this->W3chapterPaths->patchEntity($w3chapterPath, $this->request->getData());
            if ($this->W3chapterPaths->save($w3chapterPath)) {
                $this->Flash->success(__('The w3chapter path has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter path could not be saved. Please, try again.'));
        }
        $w3chapters = $this->W3chapterPaths->W3chapters->find('list', ['limit' => 200])->all();
        $w3chapterRules = $this->W3chapterPaths->W3chapterRules->find('list', ['limit' => 200])->all();
        $w3chapterActions = $this->W3chapterPaths->W3chapterActions->find('list', ['limit' => 200])->all();
        $this->set(compact('w3chapterPath', 'w3chapters', 'w3chapterRules', 'w3chapterActions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3chapter Path id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3chapterPath = $this->W3chapterPaths->get($id);
        if ($this->W3chapterPaths->delete($w3chapterPath)) {
            $this->Flash->success(__('The w3chapter path has been deleted.'));
        } else {
            $this->Flash->error(__('The w3chapter path could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
