<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * W3chapterTypes Controller
 *
 * @property \App\Model\Table\W3chapterTypesTable $W3chapterTypes
 * @method \App\Model\Entity\W3chapterType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class W3chapterTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $w3chapterTypes = $this->paginate($this->W3chapterTypes);

        $this->set(compact('w3chapterTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id W3chapter Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $w3chapterType = $this->W3chapterTypes->get($id, [
            'contain' => ['W3chapters'],
        ]);

        $this->set(compact('w3chapterType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $w3chapterType = $this->W3chapterTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $w3chapterType = $this->W3chapterTypes->patchEntity($w3chapterType, $this->request->getData());
            if ($this->W3chapterTypes->save($w3chapterType)) {
                $this->Flash->success(__('The w3chapter type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id W3chapter Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $w3chapterType = $this->W3chapterTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $w3chapterType = $this->W3chapterTypes->patchEntity($w3chapterType, $this->request->getData());
            if ($this->W3chapterTypes->save($w3chapterType)) {
                $this->Flash->success(__('The w3chapter type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The w3chapter type could not be saved. Please, try again.'));
        }
        $this->set(compact('w3chapterType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id W3chapter Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $w3chapterType = $this->W3chapterTypes->get($id);
        if ($this->W3chapterTypes->delete($w3chapterType)) {
            $this->Flash->success(__('The w3chapter type has been deleted.'));
        } else {
            $this->Flash->error(__('The w3chapter type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
