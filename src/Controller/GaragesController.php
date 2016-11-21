<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Garages Controller
 *
 * @property \App\Model\Table\GaragesTable $Garages
 */
class GaragesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Addresses', 'VehiclesTypes', 'Plans', 'PaymentsTypes']
        ];
        $garages = $this->paginate($this->Garages);

        $this->set(compact('garages'));
        $this->set('_serialize', ['garages']);
    }

    /**
     * View method
     *
     * @param string|null $id Garage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $garage = $this->Garages->get($id, [
            'contain' => ['Users', 'Addresses', 'VehiclesTypes', 'Plans', 'PaymentsTypes', 'GaragesTowhouses', 'Periods']
        ]);

        $this->set('garage', $garage);
        $this->set('_serialize', ['garage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $garage = $this->Garages->newEntity();
        if ($this->request->is('post')) {
            $garage = $this->Garages->patchEntity($garage, $this->request->data);
            if ($this->Garages->save($garage)) {
                $this->Flash->success(__('The garage has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The garage could not be saved. Please, try again.'));
            }
        }
        $users = $this->Garages->Users->find('list', ['limit' => 200]);
        $addresses = $this->Garages->Addresses->find('list', ['limit' => 200]);
        $vehiclesTypes = $this->Garages->VehiclesTypes->find('list', ['limit' => 200]);
        $plans = $this->Garages->Plans->find('list', ['limit' => 200]);
        $paymentsTypes = $this->Garages->PaymentsTypes->find('list', ['limit' => 200]);
        $this->set(compact('garage', 'users', 'addresses', 'vehiclesTypes', 'plans', 'paymentsTypes'));
        $this->set('_serialize', ['garage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Garage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $garage = $this->Garages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $garage = $this->Garages->patchEntity($garage, $this->request->data);
            if ($this->Garages->save($garage)) {
                $this->Flash->success(__('The garage has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The garage could not be saved. Please, try again.'));
            }
        }
        $users = $this->Garages->Users->find('list', ['limit' => 200]);
        $addresses = $this->Garages->Addresses->find('list', ['limit' => 200]);
        $vehiclesTypes = $this->Garages->VehiclesTypes->find('list', ['limit' => 200]);
        $plans = $this->Garages->Plans->find('list', ['limit' => 200]);
        $paymentsTypes = $this->Garages->PaymentsTypes->find('list', ['limit' => 200]);
        $this->set(compact('garage', 'users', 'addresses', 'vehiclesTypes', 'plans', 'paymentsTypes'));
        $this->set('_serialize', ['garage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Garage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $garage = $this->Garages->get($id);
        if ($this->Garages->delete($garage)) {
            $this->Flash->success(__('The garage has been deleted.'));
        } else {
            $this->Flash->error(__('The garage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
