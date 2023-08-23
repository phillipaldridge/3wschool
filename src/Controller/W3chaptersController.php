<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3chapters Controller
 *
 * @property \App\Model\Table\W3chaptersTable $W3chapters
 * @method \App\Model\Entity\W3chapter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3chaptersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3lessons', 'W3chapterTypes', 'W3chapterAccesses'],
        ];
        $w3chapters = $this->paginate($this->W3chapters);

        $this->set(compact('w3chapters'));
    }

    /**
     * View method
     *
     * @param string|null $id W3chapter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3chapter = $this->W3chapters->get($id, [
            'contain' => ['W3lessons', 'W3chapterTypes', 'W3chapterAccesses', 'W3chapterContents', 'W3chapterPaths', 'W3userTrackings'],
        ]);

        $this->set(compact('w3chapter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3chapter = $this->W3chapters->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3chapter = $this->W3chapters->patchEntity($w3chapter, $this->request->getData());
            if ($this->W3chapters->save($w3chapter)) {
                $this->Flash->success(__('The w3chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter could not be saved. Please, try again.'));
        }
        $w3lessons = $this->W3chapters->W3lessons->find('list', ['limit' => 200])->all();
        $w3chapterTypes = $this->W3chapters->W3chapterTypes->find('list', ['limit' => 200])->all();
        $w3chapterAccesses = $this->W3chapters->W3chapterAccesses->find('list', ['limit' => 200])->all();
        $this->set(compact('w3chapter', 'w3lessons', 'w3chapterTypes', 'w3chapterAccesses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3chapter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3chapter = $this->W3chapters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3chapter = $this->W3chapters->patchEntity($w3chapter, $this->request->getData());
            if ($this->W3chapters->save($w3chapter)) {
                $this->Flash->success(__('The w3chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter could not be saved. Please, try again.'));
        }
        $w3lessons = $this->W3chapters->W3lessons->find('list', ['limit' => 200])->all();
        $w3chapterTypes = $this->W3chapters->W3chapterTypes->find('list', ['limit' => 200])->all();
        $w3chapterAccesses = $this->W3chapters->W3chapterAccesses->find('list', ['limit' => 200])->all();
        $this->set(compact('w3chapter', 'w3lessons', 'w3chapterTypes', 'w3chapterAccesses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3chapter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3chapter = $this->W3chapters->get($id);
        if ($this->W3chapters->delete($w3chapter)) {
            $this->Flash->success(__('The w3chapter has been deleted.'));
        } else {
            $this->Flash->error(__('The w3chapter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
