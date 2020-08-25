<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

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
        $this->viewBuilder()->setLayout('default');
        //Chargement de modeles supplémentaires
        $this->loadModel('Souscriptions');
        $this->loadModel('Clients');

        //Vérifier si le client est connecté
        if ($this->Auth->user('id')) {
            // Redirection  vers la validation apres achoix de l'offre

        } else {
            //le client n'est pas connecté
            // return $this->redirect(['action' => 'client']);

            //Afficher les infos de l'offre
            $this->loadModel('Offres');
            $offre = $this->Offres->get($id);
            $this->set('offre', $offre);

            //enrégistrement du client
            $this->loadModel('Clients');
            $client = $this->Clients->newEntity();
            if ($this->request->is('post')) {

                //Reccuperation de l'ID de l'offre associée au client
                $this->loadModel('Offres');
                $offre = $this->Offres->get($id);
                $client->offre_id =  $offre->id;

                $client = $this->Clients->patchEntity($client, $this->request->getData());
                // debug($client);
                // exit;
                if ($this->Clients->save($client)) {
					// Connexion du client après enrégistrement
					$this->Auth->setUser($client->toArray());
                    // $this->Flash->success(__('Votre compte a été bien enrégistré.'));

                    return $this->redirect(['action' => 'validation', $client->id]);
                }
                $this->Flash->error(__('Echec de l\'enrégistrement du compte.'));
            }
            $offres = $this->Clients->Offres->find('list', ['limit' => 200]);
            $this->set(compact('client', 'offres'));
            }

     } // Fin fonction souscription

     public function validation($id = null){
		 
		if(empty($this->Auth->user('id'))){
			$this->viewBuilder()->setLayout('default');
			//Afficher les infos du client
			$this->loadModel('Clients');
			$client = $this->Clients->get($id, [
				'contain' => ['Commentaires', 'Offres', 'Souscriptions'],
			]);
			$this->set('client', $client);
			
			// Infos Offre
			$this->loadModel('Offres');
			// $offre = $this->Offres->get($id);
			// $this->set('offre', $offre);

			//Validation de la souscription avec la periode
			$souscription = $this->Souscriptions->newEntity();
			if ($this->request->is('post')) {

				//Reccuperation de l'ID de l'offre associée à la souscription
				$this->loadModel('Offres');
				// $offre = $this->Offres->get($id);
				// $offreid = $this->request->getData('offreid');
				// $souscription->offre_id =  $offreid;

				//Reccuperation de l'ID de l'offre associée au client
				// $this->loadModel('Clients');
				// $client = $this->Clients->get($id);
				// $souscription->client_id =  $client->id;

				$souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());
				// debug($this->request->getData());
				// exit;
				if ($this->Souscriptions->save($souscription)) {
					$this->Flash->success(__('The souscription has been saved.'));

					return $this->redirect(['action' => 'payment', $souscription->id]);
				}
				$this->Flash->error(__('The souscription could not be saved. Please, try again.'));
			}
			$clients = $this->Souscriptions->Clients->find('list', ['limit' => 200]);
			$offres = $this->Souscriptions->Offres->find('list', ['limit' => 200]);
			$periodes = $this->Souscriptions->Periodes->find('list', ['limit' => 200]);
			$this->set(compact('souscription', 'clients', 'offres', 'periodes'));
        }else{
			/* si le client est connecté */
			$this->viewBuilder()->setLayout('default');
			//Afficher les infos du client
			$this->loadModel('Clients');
			$client = $this->Clients->get($id, [
				'contain' => ['Offres', 'Souscriptions'],
			]);
			$this->set('client', $client);

			
			// Infos Offre
			$this->loadModel('Offres');
			// $offre = $this->Offres->get($id);
			// $this->set('offre', $offre);

			//Validation de la souscription avec la periode
			$souscription = $this->Souscriptions->newEntity();
			if ($this->request->is('post')) {

				//Reccuperation de l'ID de l'offre associée à la souscription
				$this->loadModel('Offres');
				// $offre = $this->Offres->get($id);
				// $offreid = $this->request->getData('offreid');
				// $souscription->offre_id =  $offreid;

				//Reccuperation de l'ID de l'offre associée au client
				// $this->loadModel('Clients');
				// $client = $this->Clients->get($id);
				// $souscription->client_id =  $client->id;

				$souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());
				// $this->loadModel('Offres');
                // $offre = $this->Offres->get($id);
                // $souscription->offre_id =  $client->offre->id;
				// debug($souscription);
                // exit;
                // $this->loadModel('Clients');
				// $client = $this->Clients->get($id);
                // $souscription->client_id =  $client->id;

                // Calcul de la date de fin abonnement
                // $periode = $this->request->getData('periode_id');
                // $datefin = $this->request->getData('datefin');
                // $time = new Time($periode);

                // if($periode==1){
                //     $datefin = $time->isWithinNext(3);
                // }
                
				if ($this->Souscriptions->save($souscription)) {
					$this->Flash->success(__('Souscription effectuée avec succès.'));

					return $this->redirect(['action' => 'payment', $souscription->id]);
				}
				$this->Flash->error(__('The souscription could not be saved. Please, try again.'));
			}
			$clients = $this->Souscriptions->Clients->find('list', ['limit' => 200]);
			$offres = $this->Souscriptions->Offres->find('list', ['limit' => 200]);
			$periodes = $this->Souscriptions->Periodes->find('list', ['limit' => 200]);
			$this->set(compact('souscription', 'clients', 'offres', 'periodes'));
			
			
		}

     }

    //Paiement de la souscription
    public function payment($id = null)
    {
        $this->loadModel('Paiements');

        $souscription = $this->Souscriptions->get($id, [
            'contain' => ['Clients', 'Offres', 'Periodes', 'Paiements'],
        ]);

        $this->set('souscription', $souscription);


        //Paiement
        $paiement = $this->Paiements->newEntity();
        if ($this->request->is('post')) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            // if ($this->Paiements->save($paiement)) {
            //     $this->Flash->success(__('The paiement has been saved.'));

            //     // return $this->redirect(['action' => 'index']);
            // }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $clients = $this->Paiements->Clients->find('list', ['limit' => 200]);
        $souscriptions = $this->Paiements->Souscriptions->find('list', ['limit' => 200]);
        $offres = $this->Paiements->Offres->find('list', ['limit' => 200]);
        $etatpaiements = $this->Paiements->Etatpaiements->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'clients', 'souscriptions', 'offres', 'etatpaiements'));


    } // Fin fonction payment



}
