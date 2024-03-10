<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ChapterRules Controller
 *
 * @property \App\Model\Table\ChapterRulesTable $ChapterRules
 * @method \App\Model\Entity\ChapterRule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChapterRulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $chapterRules = $this->paginate($this->ChapterRules);

        $this->set(compact('chapterRules'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter Rule id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapterRule = $this->ChapterRules->get($id, [
            'contain' => ['ChapterPaths'],
        ]);

        $this->set(compact('chapterRule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapterRule = $this->ChapterRules->newEmptyEntity();
        if ($this->request->is('post')) {
            $chapterRule = $this->ChapterRules->patchEntity($chapterRule, $this->request->getData());
            if ($this->ChapterRules->save($chapterRule)) {
                $this->Flash->success(__('The chapter rule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter rule could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterRule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter Rule id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapterRule = $this->ChapterRules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapterRule = $this->ChapterRules->patchEntity($chapterRule, $this->request->getData());
            if ($this->ChapterRules->save($chapterRule)) {
                $this->Flash->success(__('The chapter rule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter rule could not be saved. Please, try again.'));
        }
        $this->set(compact('chapterRule'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter Rule id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapterRule = $this->ChapterRules->get($id);
        if ($this->ChapterRules->delete($chapterRule)) {
            $this->Flash->success(__('The chapter rule has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter rule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
