<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Offresmarts Controller
 *
 * @property \App\Model\Table\OffresmartsTable $Offresmarts
 *
 * @method \App\Model\Entity\Offresmart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OffresmartsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $offresmarts = $this->paginate($this->Offresmarts, ['contain' => ['Elementsmarts']]);

        $this->set(compact('offresmarts'));

        //Chargement des offres de télésurveillance
        $this->loadModel('Offreteles');

        $offreteles = $this->paginate($this->Offreteles, ['contain' => ['Elementteles']]);
        $this->set(compact('offreteles'));

    }

    /**
     * View method
     *
     * @param string|null $id Offresmart id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offresmart = $this->Offresmarts->get($id, [
            'contain' => ['Elementsmarts', 'Souscriptionsmarts'],
        ]);

        $this->set('offresmart', $offresmart);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offresmart = $this->Offresmarts->newEntity();
        if ($this->request->is('post')) {
            $offresmart = $this->Offresmarts->patchEntity($offresmart, $this->request->getData());
            if ($this->Offresmarts->save($offresmart)) {
                $this->Flash->success(__('The offresmart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offresmart could not be saved. Please, try again.'));
        }
        $this->set(compact('offresmart'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Offresmart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offresmart = $this->Offresmarts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offresmart = $this->Offresmarts->patchEntity($offresmart, $this->request->getData());
            if ($this->Offresmarts->save($offresmart)) {
                $this->Flash->success(__('The offresmart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offresmart could not be saved. Please, try again.'));
        }
        $this->set(compact('offresmart'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Offresmart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offresmart = $this->Offresmarts->get($id);
        if ($this->Offresmarts->delete($offresmart)) {
            $this->Flash->success(__('The offresmart has been deleted.'));
        } else {
            $this->Flash->error(__('The offresmart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function prestation(){
        //Solutions
        $this->viewBuilder()->setLayout('staticpage');
    }

    public function contact(){
        //contact
        $this->viewBuilder()->setLayout('staticpage');
    }

    public function reference(){
        //contact
        $this->viewBuilder()->setLayout('staticpage');
    }

    public function termecondition(){
        //contact
        $this->viewBuilder()->setLayout('staticpage');
    }

    public function contrat(){
        //contact
        $this->viewBuilder()->setLayout('staticpage');
    }
}
