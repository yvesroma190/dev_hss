<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Souscriptions Controller
 *
 * @property \App\Model\Table\SouscriptionsTable $Souscriptions
 *
 * @method \App\Model\Entity\Souscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscriptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Offres', 'Periodes'],
        ];
        $souscriptions = $this->paginate($this->Souscriptions);

        $this->set(compact('souscriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Souscription id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $souscription = $this->Souscriptions->get($id, [
            'contain' => ['Clients', 'Offres', 'Periodes', 'Paiements'],
        ]);

        $this->set('souscription', $souscription);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $souscription = $this->Souscriptions->newEntity();
        if ($this->request->is('post')) {
            $souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());
            if ($this->Souscriptions->save($souscription)) {
                $this->Flash->success(__('The souscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscription could not be saved. Please, try again.'));
        }
        $clients = $this->Souscriptions->Clients->find('list', ['limit' => 200]);
        $offres = $this->Souscriptions->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Souscriptions->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('souscription', 'clients', 'offres', 'periodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Souscription id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $souscription = $this->Souscriptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());
            if ($this->Souscriptions->save($souscription)) {
                $this->Flash->success(__('The souscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscription could not be saved. Please, try again.'));
        }
        $clients = $this->Souscriptions->Clients->find('list', ['limit' => 200]);
        $offres = $this->Souscriptions->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Souscriptions->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('souscription', 'clients', 'offres', 'periodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Souscription id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $souscription = $this->Souscriptions->get($id);
        if ($this->Souscriptions->delete($souscription)) {
            $this->Flash->success(__('The souscription has been deleted.'));
        } else {
            $this->Flash->error(__('The souscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    //Souscription du client à l'offre
    public function subscribe($id = null)
    {
        $this->viewBuilder()->setLayout('staticpage');
        //Chargement de modeles supplémentaires
        $this->loadModel('Souscriptions');
        $this->loadModel('Clients');

        //Vérifier si le client est connecté
        if ($this->Auth->user('id')) {
            // debug($this->Auth->user('id'));
            // exit;

        } else {
            //le client n'est pas connecté

            //Afficher les infos de l'offre
            $this->loadModel('Offres');
            $offre = $this->Offres->get($id);
            $this->set('offre', $offre);

            //Connexion du client après enrégistrement
            $this->loadModel('clients');
            $client = $this->Clients->newEntity($this->request->getData());
            if ($this->request->is('post')) {
                $client = $this->Clients->patchEntity($client, $this->request->getData());
                if ($this->Clients->save($client)) {
                    $this->Auth->setUser($client->toArray());
                }
                $this->Flash->error(__('Impossible d\'enrégistrer les informations du client.'));
            }
            $this->set(compact('client'));

            //Formulaire d'ajout de souscription
            $souscription = $this->Souscriptions->newEntity();
            if ($this->request->is('post')) {
                //Recupération de la clé de l'offre
                $this->loadModel('Offres');
                $offre = $this->Offres->get($id);
                $souscription->offre_id =  $offre->id;

                //Recupération de l'Id du client connecté automatiquement
                // $this->Auth->user('id');
                $souscription->client_id = $this->Auth->user('id');

                $souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());

                //Calcul du montant total
                // $periode = $this->request->getData($souscription->periode->nbmois);
                // $prix_offre = $this->request->getData($souscription->offre->$this->Number->format($offre->prix));
                // $montanttotal = $prix_offre * $periode;
                // $souscription->montanttotal = $montanttotal;
                // $this->set('souscription');
				//$periode = $_POST[$periode->nbmois];
				//$prix_offre = $_POST[$offre->prix];
				//$montant_total = $_POST[$offre->prix]*$_POST[$periode->nbmois];
				//$montant_total = $_POST['montanttotal'];


                if ($this->Souscriptions->save($souscription)) {
                    $this->Flash->success(__('Succès de la souscription.'));

                    return $this->redirect(['action' => 'payment']);
                }
                $this->Flash->error(__('Echec de la souscription.'));
            }
            $clients = $this->Souscriptions->Clients->find('list', ['limit' => 200]);
            $offres = $this->Souscriptions->Offres->find('list', ['limit' => 200]);
            $periodes = $this->Souscriptions->Periodes->find('list', ['limit' => 200]);
            $this->set(compact('souscription', 'clients', 'offres', 'periodes'));
        }
    } // Fin fonction souscription

    //Paiement de la souscription
    public function payment()
    {
        $this->loadModel('Paiements');
    } // Fin fonction payment






}
