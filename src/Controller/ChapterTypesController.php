<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ChapterTypes Controller
 *
 * @property \App\Model\Table\ChapterTypesTable $ChapterTypes
 * @method \App\Model\Entity\ChapterType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChapterTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $chapterTypes = $this->paginate($this->ChapterTypes);

        $this->set(compact('chapterTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapterType = $this->ChapterTypes->get($id, [
            'contain' => ['Chapters'],
        ]);

        $this->set(compact('chapterType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapterType = $this->ChapterTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapterType = $this->ChapterTypes->patchEntity($chapterType, $this->request->getData());
            if ($this->ChapterTypes->save($chapterType)) {
                $this->Flash->success(__('The chapter type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter type could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapterType = $this->ChapterTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapterType = $this->ChapterTypes->patchEntity($chapterType, $this->request->getData());
            if ($this->ChapterTypes->save($chapterType)) {
                $this->Flash->success(__('The chapter type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter type could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapterType = $this->ChapterTypes->get($id);
        if ($this->ChapterTypes->delete($chapterType)) {
            $this->Flash->success(__('The chapter type has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
