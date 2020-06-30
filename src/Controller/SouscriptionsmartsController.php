<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Souscriptionsmarts Controller
 *
 * @property \App\Model\Table\SouscriptionsmartsTable $Souscriptionsmarts
 *
 * @method \App\Model\Entity\Souscriptionsmart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscriptionsmartsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offresmarts', 'Clients'],
        ];
        $souscriptionsmarts = $this->paginate($this->Souscriptionsmarts);

        $this->set(compact('souscriptionsmarts'));
    }

    /**
     * View method
     *
     * @param string|null $id Souscriptionsmart id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $souscriptionsmart = $this->Souscriptionsmarts->get($id, [
            'contain' => ['Offresmarts', 'Clients'],
        ]);

        $this->set('souscriptionsmart', $souscriptionsmart);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $souscriptionsmart = $this->Souscriptionsmarts->newEntity();
        if ($this->request->is('post')) {
            $souscriptionsmart = $this->Souscriptionsmarts->patchEntity($souscriptionsmart, $this->request->getData());
            if ($this->Souscriptionsmarts->save($souscriptionsmart)) {
                $this->Flash->success(__('The souscriptionsmart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscriptionsmart could not be saved. Please, try again.'));
        }
        $offresmarts = $this->Souscriptionsmarts->Offresmarts->find('list', ['limit' => 200]);
        $clients = $this->Souscriptionsmarts->Clients->find('list', ['limit' => 200]);
        $this->set(compact('souscriptionsmart', 'offresmarts', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Souscriptionsmart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $souscriptionsmart = $this->Souscriptionsmarts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $souscriptionsmart = $this->Souscriptionsmarts->patchEntity($souscriptionsmart, $this->request->getData());
            if ($this->Souscriptionsmarts->save($souscriptionsmart)) {
                $this->Flash->success(__('The souscriptionsmart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscriptionsmart could not be saved. Please, try again.'));
        }
        $offresmarts = $this->Souscriptionsmarts->Offresmarts->find('list', ['limit' => 200]);
        $clients = $this->Souscriptionsmarts->Clients->find('list', ['limit' => 200]);
        $this->set(compact('souscriptionsmart', 'offresmarts', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Souscriptionsmart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $souscriptionsmart = $this->Souscriptionsmarts->get($id);
        if ($this->Souscriptionsmarts->delete($souscriptionsmart)) {
            $this->Flash->success(__('The souscriptionsmart has been deleted.'));
        } else {
            $this->Flash->error(__('The souscriptionsmart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
