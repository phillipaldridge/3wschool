<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ChapterContents Controller
 *
 * @property \App\Model\Table\ChapterContentsTable $ChapterContents
 * @method \App\Model\Entity\ChapterContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChapterContentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Chapters'],
        ];
        $chapterContents = $this->paginate($this->ChapterContents);

        $this->set(compact('chapterContents'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter Content id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapterContent = $this->ChapterContents->get($id, [
            'contain' => ['Chapters'],
        ]);

        $this->set(compact('chapterContent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapterContent = $this->ChapterContents->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapterContent = $this->ChapterContents->patchEntity($chapterContent, $this->request->getData());
            if ($this->ChapterContents->save($chapterContent)) {
                $this->Flash->success(__('The chapter content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter content could not be saved. Please, try again.'));
        }
        $chapters = $this->ChapterContents->Chapters->find('list', ['limit' => 200])->all();
        $this->set(compact('chapterContent', 'chapters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter Content id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapterContent = $this->ChapterContents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapterContent = $this->ChapterContents->patchEntity($chapterContent, $this->request->getData());
            if ($this->ChapterContents->save($chapterContent)) {
                $this->Flash->success(__('The chapter content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter content could not be saved. Please, try again.'));
        }
        $chapters = $this->ChapterContents->Chapters->find('list', ['limit' => 200])->all();
        $this->set(compact('chapterContent', 'chapters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter Content id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapterContent = $this->ChapterContents->get($id);
        if ($this->ChapterContents->delete($chapterContent)) {
            $this->Flash->success(__('The chapter content has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
