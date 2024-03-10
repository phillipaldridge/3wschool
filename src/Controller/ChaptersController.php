<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chapters Controller
 *
 * @property \App\Model\Table\ChaptersTable $Chapters
 * @method \App\Model\Entity\Chapter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChaptersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lessons', 'ChapterTypes', 'ChapterAccesses'],
        ];
        $chapters = $this->paginate($this->Chapters);

        $this->set(compact('chapters'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapter = $this->Chapters->get($id, [
            'contain' => ['Lessons', 'ChapterTypes', 'ChapterAccesses', 'ChapterContents', 'ChapterPaths', 'UserTrackings'],
        ]);

        $this->set(compact('chapter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapter = $this->Chapters->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->getData());
            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
        }
        $lessons = $this->Chapters->Lessons->find('list', ['limit' => 200])->all();
        $chapterTypes = $this->Chapters->ChapterTypes->find('list', ['limit' => 200])->all();
        $chapterAccesses = $this->Chapters->ChapterAccesses->find('list', ['limit' => 200])->all();
        $this->set(compact('chapter', 'lessons', 'chapterTypes', 'chapterAccesses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapter = $this->Chapters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->getData());
            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
        }
        $lessons = $this->Chapters->Lessons->find('list', ['limit' => 200])->all();
        $chapterTypes = $this->Chapters->ChapterTypes->find('list', ['limit' => 200])->all();
        $chapterAccesses = $this->Chapters->ChapterAccesses->find('list', ['limit' => 200])->all();
        $this->set(compact('chapter', 'lessons', 'chapterTypes', 'chapterAccesses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapter = $this->Chapters->get($id);
        if ($this->Chapters->delete($chapter)) {
            $this->Flash->success(__('The chapter has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
