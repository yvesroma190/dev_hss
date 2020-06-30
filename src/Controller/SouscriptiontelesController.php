<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Souscriptionteles Controller
 *
 * @property \App\Model\Table\SouscriptiontelesTable $Souscriptionteles
 *
 * @method \App\Model\Entity\Souscriptiontele[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscriptiontelesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offreteles', 'Clients'],
        ];
        $souscriptionteles = $this->paginate($this->Souscriptionteles);

        $this->set(compact('souscriptionteles'));
    }

    /**
     * View method
     *
     * @param string|null $id Souscriptiontele id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $souscriptiontele = $this->Souscriptionteles->get($id, [
            'contain' => ['Offreteles', 'Clients'],
        ]);

        $this->set('souscriptiontele', $souscriptiontele);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $souscriptiontele = $this->Souscriptionteles->newEntity();
        if ($this->request->is('post')) {
            $souscriptiontele = $this->Souscriptionteles->patchEntity($souscriptiontele, $this->request->getData());
            if ($this->Souscriptionteles->save($souscriptiontele)) {
                $this->Flash->success(__('The souscriptiontele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscriptiontele could not be saved. Please, try again.'));
        }
        $offreteles = $this->Souscriptionteles->Offreteles->find('list', ['limit' => 200]);
        $clients = $this->Souscriptionteles->Clients->find('list', ['limit' => 200]);
        $this->set(compact('souscriptiontele', 'offreteles', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Souscriptiontele id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $souscriptiontele = $this->Souscriptionteles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $souscriptiontele = $this->Souscriptionteles->patchEntity($souscriptiontele, $this->request->getData());
            if ($this->Souscriptionteles->save($souscriptiontele)) {
                $this->Flash->success(__('The souscriptiontele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscriptiontele could not be saved. Please, try again.'));
        }
        $offreteles = $this->Souscriptionteles->Offreteles->find('list', ['limit' => 200]);
        $clients = $this->Souscriptionteles->Clients->find('list', ['limit' => 200]);
        $this->set(compact('souscriptiontele', 'offreteles', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Souscriptiontele id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $souscriptiontele = $this->Souscriptionteles->get($id);
        if ($this->Souscriptionteles->delete($souscriptiontele)) {
            $this->Flash->success(__('The souscriptiontele has been deleted.'));
        } else {
            $this->Flash->error(__('The souscriptiontele could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
