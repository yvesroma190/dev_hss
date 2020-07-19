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
    public function add($id = null)
    {

        //Reccuperation de l'ID de l'offre associé à l'élément ajoutée
        $this->loadModel('Offresmarts');
        //$offresmart = $this->Offresmarts->get($id);
        //$souscriptionsmart->offresmart_id =  $offresmart->id;
        $offresmart = $this->request->session()->read('Offresmart.id');
        echo $offresmart;

        //recherche du dernier client enrégistré
        $this->loadModel('Clients');
        $query = $this->Clients->find('all', [
            'order' => ['Clients.id' => 'DESC']
        ]);
        $client = $query->first();
        //$souscriptionsmart->client_id =  $client;
        $this->set(compact('client'));
//debug($client);
//exit;

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
    
    //Etape 1 enrégistrement CLient
    public function souscrire($id = null){

        //Reccuperation de l'ID de l'offre associé à l'élément ajoutée
        $this->loadModel('Offresmarts');
        $offresmart = $this->Offresmarts->get($id);
        //$souscriptionsmart->offresmart_id =  $offresmart->id;
        //debug($offresmart);
        //exit;
        $this->set(compact('offresmart'));

        // Verification de l'état de connexion du client
        if(!$this->Auth->user('id')){
            $this->Flash->error(__('Attention, vous devez créer un compte avant de souscrire à une offre.'));
            return $this->redirect(['controller' => 'Clients', 'action' => 'add']);
        }


        // Enrégistrement du client
        $this->loadModel('Clients');
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $d = $this->request->getData();
            $client = $this->Clients->patchEntity($client, $d);
            if ($this->Clients->save($client)) {
                //debug($d);
                //exit;

                $this->Flash->success(__('Vos informations ont bien été enrégistrées.'));

                //Recuperation du client
                //$idClient = $this->Clients->getInsertID();
                //$email = $this->request->getData('email');
                /*$query = $this->Clients->find('all', [
                    'order' => ['Clients.id' => 'DESC']
                ]);
                $client = $query->first();
                $this->set(compact('client'));*/

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }

        $this->set(compact('client'));


    }

    //Etape 2 validation de la souscription
    public function validation(){


    }

}
