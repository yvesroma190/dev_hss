<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Elementsmarts Controller
 *
 * @property \App\Model\Table\ElementsmartsTable $Elementsmarts
 *
 * @method \App\Model\Entity\Elementsmart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ElementsmartsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offresmarts'],
        ];
        $elementsmarts = $this->paginate($this->Elementsmarts);

        $this->set(compact('elementsmarts'));
    }

    /**
     * View method
     *
     * @param string|null $id Elementsmart id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $elementsmart = $this->Elementsmarts->get($id, [
            'contain' => ['Offresmarts'],
        ]);

        $this->set('elementsmart', $elementsmart);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $elementsmart = $this->Elementsmarts->newEntity();
        if ($this->request->is('post')) {
            $elementsmart = $this->Elementsmarts->patchEntity($elementsmart, $this->request->getData());
            if ($this->Elementsmarts->save($elementsmart)) {
                $this->Flash->success(__('The elementsmart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elementsmart could not be saved. Please, try again.'));
        }
        $offresmarts = $this->Elementsmarts->Offresmarts->find('list', ['limit' => 200]);
        $this->set(compact('elementsmart', 'offresmarts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Elementsmart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $elementsmart = $this->Elementsmarts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $elementsmart = $this->Elementsmarts->patchEntity($elementsmart, $this->request->getData());
            if ($this->Elementsmarts->save($elementsmart)) {
                $this->Flash->success(__('The elementsmart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elementsmart could not be saved. Please, try again.'));
        }
        $offresmarts = $this->Elementsmarts->Offresmarts->find('list', ['limit' => 200]);
        $this->set(compact('elementsmart', 'offresmarts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Elementsmart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $elementsmart = $this->Elementsmarts->get($id);
        if ($this->Elementsmarts->delete($elementsmart)) {
            $this->Flash->success(__('The elementsmart has been deleted.'));
        } else {
            $this->Flash->error(__('The elementsmart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
