<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use SoapClient;
/* use Cake\Http\Client;
use Cake\Http\Response; */



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
            // Redirection  vers la validation apres choix de l'offre

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

                //Reccuperation de l'ID de l'offre
                /* $this->loadModel('Offres');
                $offre = $this->Offres->get($id);
                $client->offre_id =  $offre->id; */

                $client = $this->Clients->patchEntity($client, $this->request->getData());
                // debug($client);
                // exit;
                if ($this->Clients->save($client)) {
					// Connexion du client après enrégistrement
					$this->Auth->setUser($client->toArray());
                    // $this->Flash->success(__('Votre compte a été bien enrégistré.'));

                    return $this->redirect(['action' => 'validation', $offre->id]);
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
			$client = $this->Clients->get($this->request->getSession()->read('Auth.User.id'));
			$this->set('client', $client);

			
			// Infos Offre
			$this->loadModel('Offres');
			$offre = $this->Offres->get($id);
			$this->set('offre', $offre);


			//Détermination de la debut de souscription
			$datedebut = Time::now();
			$datedebut->timezone = 'Africa/Abidjan';

			//Déterminiation du nombre de mois			
			$nmois = $this->request->getData('nmois');
			
			//Calcul de la date de fin d'abonnement
			$date = Time::now();
			$datefin = $date->addMonth($nmois);	
			$datefin->timezone = 'Africa/Abidjan';

			//Validation de la souscription avec la periode
			$souscription = $this->Souscriptions->newEntity();
			if ($this->request->is('post')) {

				//Reccuperation de l'ID de l'offre associée à la souscription
				$this->loadModel('Offres');
				$offre = $this->Offres->get($id);
				$offreid = $this->request->getData('offreid');
				$souscription->offre_id =  $offre->id;

				$souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());

				//Définition des differntes dates
				$souscription->datedebut = $datedebut;
				$souscription->datefin = $datefin;
                
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
		$this->viewBuilder()->setLayout('default');
		
        $this->loadModel('Paiements');
		

        $souscription = $this->Souscriptions->get($id, [
            'contain' => ['Clients', 'Offres', 'Periodes'],
        ]);
        $this->set('souscription', $souscription);
		
		//Paiement vers API
		
		if ($this->request->is('post')) {
            //$paiement = $this->request->getData();
			//$this->loadModel('Etatpaiements');
			//$etatpaiements = $this->Etatpaiements->find('all');
			
			/* debug($this->request->getData());
			exit; */
			/* $souscriptionid = $souscription->id;
			$offreid = $souscription->offre->id; */
			$amount = $this->request->getData('montanttotal');
			$customerId = $this->request->getData('client_id');
			$email = $this->request->getData('client_email');
			$name = $this->request->getData('client_name');
			$lname = $this->request->getData('client_name');
			$cel = $this->request->getData('client_cel');
			$mpaid = $this->request->getData('paid');			
	
			
			ini_set("soap.wsdl_cache_enabled", 0); 
			 $url="https://www.paiementpro.net/webservice/OnlineServicePayment_v2.php?wsdl"; 
			 $client = new SoapClient($url,array('cache_wsdl' => WSDL_CACHE_NONE)); 
			 $array= ['merchantId'=>'PP-F105', 
			 'countryCurrencyCode'=>'952', 
			 'amount'=>$amount, 
			 'customerId'=>$customerId,
			 'channel'=>$mpaid,
			 'customerEmail'=>$email, 
			 'customerFirstName'=>$name, 
			 'customerLastname'=>$lname, 
			 'customerPhoneNumber'=>$cel, 
			 'referenceNumber'=>'878AABCDEFZ'.time(),
			 'notificationURL'=>'http://highstarsecurity.com/souscriptions/notification',			 
			 'returnURL'=>'http://highstarsecurity.com/souscriptions/notification', 
			 'description'=>'achat en ligne', 
			 'returnContext'=>'test=2&ok=1&oui=2',
			  ];
			  
			 
			 try{ 
			 $response=$client->initTransact($array); 
			 /* debug($response);
				exit; */
			if($response->Code==0){
				/* debug($client->initTransact($array));
				exit; */

			// var_dump($response->Sessionid);die();
			return $this->redirect("https://www.paiementpro.net/webservice/onlinepayment/processing_v2.php?sessionid=".$response->Sessionid);

			}

			  }
			   catch(Exception $e)
			  { 
			  echo $e->getMessage();
			   }						
			
        }
	

		
    } // Fin fonction payment
	
	public function notification($id = null){
		
		$this->viewBuilder()->setLayout('default');
		
		// Connexion du client automatiquement
		//$this->Auth->setUser($client->toArray());
		
		//Chargement de la table paiement
		$this->loadModel('Paiements');	
		
		
		//Reccuperation ID souscription lié au paiement
		$souscription = $this->Souscriptions->get($id, [
            'contain' => ['Clients', 'Offres', 'Periodes'],
        ]);	
		$this->set('souscription', $souscription);	
		
		//Recuperation du nombre de mois de la periode associée à la souscription
		$this->loadModel('Periodes');		
		
		//Deduction nombre de mois
		//$nbmois = $periode->nbmois;		
		$nbmois = $souscription->periode->nbmois;		
		
		
		$date = Time::now();
		$datefin = $date->addMonth($nbmois);	
		$datefin->timezone = 'Africa/Abidjan';
		
		/* $commande = $_GET['purchaseref'];
		$sessionid = $_GET['sessionid'];
		$montant = $_GET['amount'];
		$ref = $_GET['payid'];
		$telephone = $_GET['telephone'];
		$description = $_GET['description'];
		$date = $_GET['date'];
		$time = $_GET['time'];
		$channel = $_GET['channel']; */
		
		$commande = $this->request->getData('purchaseref');
		$sessionid = $this->request->getData('sessionid');
		$montant = $this->request->getData('amount');
		$ref = $this->request->getData('payid');
		$telephone = $this->request->getData('telephone');
		$description = $this->request->getData('description');
		$date = $this->request->getData('date');
		$time = $this->request->getData('time');
		$channel = $this->request->getData('channel');
		
		
		if($this->Auth->user('id')){
			
		//Recuperer l'ID du client
		$this->loadModel('Clients');
		$clientid = $this->Clients->get($this->request->getSession()->read('Auth.User.id'));		
			
			$paiement = $this->Paiements->newEntity();
			if ($this->request->is('post')) {
				$paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
			
			$paiement->refpay = $commande;
			$paiement->session = $sessionid;
			$paiement->payid = $ref;
			$paiement->souscription_id = $souscription;
			$paiement->client_id = $clientid;
			$paiement->montant = $montant;
			$paiement->tel = $telephone;
			$paiement->description = $description;
			$paiement->datepay = $date;
			$paiement->timepay = $time;
			$paiement->datefin = $datefin;
			$paiement->canal = $channel;			
				
				if ($this->Paiements->save($paiement)){
					$this->Flash->success(__('Succès, paiement achevé.'));

					return $this->redirect(['controller' => 'Offres', 'action' => 'index']);
				}
				$this->Flash->error(__('Echec.'));
			}
			
		}		
		
		
	}
	
	
	
}
