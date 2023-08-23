<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3chapterContents Controller
 *
 * @property \App\Model\Table\W3chapterContentsTable $W3chapterContents
 * @method \App\Model\Entity\W3chapterContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3chapterContentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['W3chapters'],
        ];
        $w3chapterContents = $this->paginate($this->W3chapterContents);

        $this->set(compact('w3chapterContents'));
    }

    /**
     * View method
     *
     * @param string|null $id W3chapter Content id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3chapterContent = $this->W3chapterContents->get($id, [
            'contain' => ['W3chapters'],
        ]);

        $this->set(compact('w3chapterContent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3chapterContent = $this->W3chapterContents->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3chapterContent = $this->W3chapterContents->patchEntity($w3chapterContent, $this->request->getData());
            if ($this->W3chapterContents->save($w3chapterContent)) {
                $this->Flash->success(__('The w3chapter content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter content could not be saved. Please, try again.'));
        }
        $w3chapters = $this->W3chapterContents->W3chapters->find('list', ['limit' => 200])->all();
        $this->set(compact('w3chapterContent', 'w3chapters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3chapter Content id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3chapterContent = $this->W3chapterContents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3chapterContent = $this->W3chapterContents->patchEntity($w3chapterContent, $this->request->getData());
            if ($this->W3chapterContents->save($w3chapterContent)) {
                $this->Flash->success(__('The w3chapter content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter content could not be saved. Please, try again.'));
        }
        $w3chapters = $this->W3chapterContents->W3chapters->find('list', ['limit' => 200])->all();
        $this->set(compact('w3chapterContent', 'w3chapters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3chapter Content id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3chapterContent = $this->W3chapterContents->get($id);
        if ($this->W3chapterContents->delete($w3chapterContent)) {
            $this->Flash->success(__('The w3chapter content has been deleted.'));
        } else {
            $this->Flash->error(__('The w3chapter content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
