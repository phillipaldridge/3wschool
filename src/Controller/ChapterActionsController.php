<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ChapterActions Controller
 *
 * @property \App\Model\Table\ChapterActionsTable $ChapterActions
 * @method \App\Model\Entity\ChapterAction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChapterActionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $chapterActions = $this->paginate($this->ChapterActions);

        $this->set(compact('chapterActions'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter Action id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapterAction = $this->ChapterActions->get($id, [
            'contain' => ['ChapterPaths'],
        ]);

        $this->set(compact('chapterAction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapterAction = $this->ChapterActions->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapterAction = $this->ChapterActions->patchEntity($chapterAction, $this->request->getData());
            if ($this->ChapterActions->save($chapterAction)) {
                $this->Flash->success(__('The chapter action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter action could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterAction'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter Action id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapterAction = $this->ChapterActions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapterAction = $this->ChapterActions->patchEntity($chapterAction, $this->request->getData());
            if ($this->ChapterActions->save($chapterAction)) {
                $this->Flash->success(__('The chapter action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter action could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterAction'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter Action id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapterAction = $this->ChapterActions->get($id);
        if ($this->ChapterActions->delete($chapterAction)) {
            $this->Flash->success(__('The chapter action has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter action could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
