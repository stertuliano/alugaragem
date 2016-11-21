<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehiclesTypes Controller
 *
 * @property \App\Model\Table\VehiclesTypesTable $VehiclesTypes
 */
class VehiclesTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vehiclesTypes = $this->paginate($this->VehiclesTypes);

        $this->set(compact('vehiclesTypes'));
        $this->set('_serialize', ['vehiclesTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicles Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehiclesType = $this->VehiclesTypes->get($id, [
            'contain' => []
        ]);

        $this->set('vehiclesType', $vehiclesType);
        $this->set('_serialize', ['vehiclesType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehiclesType = $this->VehiclesTypes->newEntity();
        if ($this->request->is('post')) {
            $vehiclesType = $this->VehiclesTypes->patchEntity($vehiclesType, $this->request->data);
            if ($this->VehiclesTypes->save($vehiclesType)) {
                $this->Flash->success(__('The vehicles type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicles type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehiclesType'));
        $this->set('_serialize', ['vehiclesType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicles Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehiclesType = $this->VehiclesTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehiclesType = $this->VehiclesTypes->patchEntity($vehiclesType, $this->request->data);
            if ($this->VehiclesTypes->save($vehiclesType)) {
                $this->Flash->success(__('The vehicles type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicles type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vehiclesType'));
        $this->set('_serialize', ['vehiclesType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicles Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehiclesType = $this->VehiclesTypes->get($id);
        if ($this->VehiclesTypes->delete($vehiclesType)) {
            $this->Flash->success(__('The vehicles type has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicles type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
