<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ChapterAccesses Controller
 *
 * @property \App\Model\Table\ChapterAccessesTable $ChapterAccesses
 * @method \App\Model\Entity\ChapterAccess[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChapterAccessesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $chapterAccesses = $this->paginate($this->ChapterAccesses);

        $this->set(compact('chapterAccesses'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter Access id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapterAccess = $this->ChapterAccesses->get($id, [
            'contain' => ['Chapters'],
        ]);

        $this->set(compact('chapterAccess'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapterAccess = $this->ChapterAccesses->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapterAccess = $this->ChapterAccesses->patchEntity($chapterAccess, $this->request->getData());
            if ($this->ChapterAccesses->save($chapterAccess)) {
                $this->Flash->success(__('The chapter access has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter access could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterAccess'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter Access id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapterAccess = $this->ChapterAccesses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapterAccess = $this->ChapterAccesses->patchEntity($chapterAccess, $this->request->getData());
            if ($this->ChapterAccesses->save($chapterAccess)) {
                $this->Flash->success(__('The chapter access has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter access could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterAccess'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter Access id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapterAccess = $this->ChapterAccesses->get($id);
        if ($this->ChapterAccesses->delete($chapterAccess)) {
            $this->Flash->success(__('The chapter access has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter access could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
