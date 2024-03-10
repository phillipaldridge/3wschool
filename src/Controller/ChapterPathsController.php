<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ChapterPaths Controller
 *
 * @property \App\Model\Table\ChapterPathsTable $ChapterPaths
 * @method \App\Model\Entity\ChapterPath[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChapterPathsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Chapters', 'ChapterRules', 'ChapterActions'],
        ];
        $chapterPaths = $this->paginate($this->ChapterPaths);

        $this->set(compact('chapterPaths'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter Path id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapterPath = $this->ChapterPaths->get($id, [
            'contain' => ['Chapters', 'ChapterRules', 'ChapterActions'],
        ]);

        $this->set(compact('chapterPath'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapterPath = $this->ChapterPaths->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapterPath = $this->ChapterPaths->patchEntity($chapterPath, $this->request->getData());
            if ($this->ChapterPaths->save($chapterPath)) {
                $this->Flash->success(__('The chapter path has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter path could not be saved. Please, try again.'));
        }
        $chapters = $this->ChapterPaths->Chapters->find('list', ['limit' => 200])->all();
        $chapterRules = $this->ChapterPaths->ChapterRules->find('list', ['limit' => 200])->all();
        $chapterActions = $this->ChapterPaths->ChapterActions->find('list', ['limit' => 200])->all();
        $this->set(compact('chapterPath', 'chapters', 'chapterRules', 'chapterActions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter Path id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapterPath = $this->ChapterPaths->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapterPath = $this->ChapterPaths->patchEntity($chapterPath, $this->request->getData());
            if ($this->ChapterPaths->save($chapterPath)) {
                $this->Flash->success(__('The chapter path has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter path could not be saved. Please, try again.'));
        }
        $chapters = $this->ChapterPaths->Chapters->find('list', ['limit' => 200])->all();
        $chapterRules = $this->ChapterPaths->ChapterRules->find('list', ['limit' => 200])->all();
        $chapterActions = $this->ChapterPaths->ChapterActions->find('list', ['limit' => 200])->all();
        $this->set(compact('chapterPath', 'chapters', 'chapterRules', 'chapterActions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter Path id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapterPath = $this->ChapterPaths->get($id);
        if ($this->ChapterPaths->delete($chapterPath)) {
            $this->Flash->success(__('The chapter path has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter path could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
