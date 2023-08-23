<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3chapterRules Controller
 *
 * @property \App\Model\Table\W3chapterRulesTable $W3chapterRules
 * @method \App\Model\Entity\W3chapterRule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3chapterRulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3chapterRules = $this->paginate($this->W3chapterRules);

        $this->set(compact('w3chapterRules'));
    }

    /**
     * View method
     *
     * @param string|null $id W3chapter Rule id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3chapterRule = $this->W3chapterRules->get($id, [
            'contain' => ['W3chapterPaths'],
        ]);

        $this->set(compact('w3chapterRule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3chapterRule = $this->W3chapterRules->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3chapterRule = $this->W3chapterRules->patchEntity($w3chapterRule, $this->request->getData());
            if ($this->W3chapterRules->save($w3chapterRule)) {
                $this->Flash->success(__('The w3chapter rule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter rule could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterRule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3chapter Rule id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3chapterRule = $this->W3chapterRules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3chapterRule = $this->W3chapterRules->patchEntity($w3chapterRule, $this->request->getData());
            if ($this->W3chapterRules->save($w3chapterRule)) {
                $this->Flash->success(__('The w3chapter rule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter rule could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterRule'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3chapter Rule id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3chapterRule = $this->W3chapterRules->get($id);
        if ($this->W3chapterRules->delete($w3chapterRule)) {
            $this->Flash->success(__('The w3chapter rule has been deleted.'));
        } else {
            $this->Flash->error(__('The w3chapter rule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
