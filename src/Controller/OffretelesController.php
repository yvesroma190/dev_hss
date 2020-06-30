<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Offreteles Controller
 *
 * @property \App\Model\Table\OffretelesTable $Offreteles
 *
 * @method \App\Model\Entity\Offretele[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OffretelesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $offreteles = $this->paginate($this->Offreteles);

        $this->set(compact('offreteles'));
    }

    /**
     * View method
     *
     * @param string|null $id Offretele id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offretele = $this->Offreteles->get($id, [
            'contain' => ['Elementteles', 'Souscriptionteles'],
        ]);

        $this->set('offretele', $offretele);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offretele = $this->Offreteles->newEntity();
        if ($this->request->is('post')) {
            $offretele = $this->Offreteles->patchEntity($offretele, $this->request->getData());
            if ($this->Offreteles->save($offretele)) {
                $this->Flash->success(__('The offretele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offretele could not be saved. Please, try again.'));
        }
        $this->set(compact('offretele'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Offretele id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offretele = $this->Offreteles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offretele = $this->Offreteles->patchEntity($offretele, $this->request->getData());
            if ($this->Offreteles->save($offretele)) {
                $this->Flash->success(__('The offretele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offretele could not be saved. Please, try again.'));
        }
        $this->set(compact('offretele'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Offretele id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offretele = $this->Offreteles->get($id);
        if ($this->Offreteles->delete($offretele)) {
            $this->Flash->success(__('The offretele has been deleted.'));
        } else {
            $this->Flash->error(__('The offretele could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
