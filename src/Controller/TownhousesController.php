<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Townhouses Controller
 *
 * @property \App\Model\Table\TownhousesTable $Townhouses
 */
class TownhousesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Addresses']
        ];
        $townhouses = $this->paginate($this->Townhouses);

        $this->set(compact('townhouses'));
        $this->set('_serialize', ['townhouses']);
    }

    /**
     * View method
     *
     * @param string|null $id Townhouse id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $townhouse = $this->Townhouses->get($id, [
            'contain' => ['Addresses']
        ]);

        $this->set('townhouse', $townhouse);
        $this->set('_serialize', ['townhouse']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $townhouse = $this->Townhouses->newEntity();
        if ($this->request->is('post')) {
            $townhouse = $this->Townhouses->patchEntity($townhouse, $this->request->data);
            if ($this->Townhouses->save($townhouse)) {
                $this->Flash->success(__('The townhouse has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The townhouse could not be saved. Please, try again.'));
            }
        }
        $addresses = $this->Townhouses->Addresses->find('list', ['limit' => 200]);
        $this->set(compact('townhouse', 'addresses'));
        $this->set('_serialize', ['townhouse']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Townhouse id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $townhouse = $this->Townhouses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $townhouse = $this->Townhouses->patchEntity($townhouse, $this->request->data);
            if ($this->Townhouses->save($townhouse)) {
                $this->Flash->success(__('The townhouse has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The townhouse could not be saved. Please, try again.'));
            }
        }
        $addresses = $this->Townhouses->Addresses->find('list', ['limit' => 200]);
        $this->set(compact('townhouse', 'addresses'));
        $this->set('_serialize', ['townhouse']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Townhouse id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $townhouse = $this->Townhouses->get($id);
        if ($this->Townhouses->delete($townhouse)) {
            $this->Flash->success(__('The townhouse has been deleted.'));
        } else {
            $this->Flash->error(__('The townhouse could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
