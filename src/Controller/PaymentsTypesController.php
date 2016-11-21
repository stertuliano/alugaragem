<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PaymentsTypes Controller
 *
 * @property \App\Model\Table\PaymentsTypesTable $PaymentsTypes
 */
class PaymentsTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
      $this->paginate['limit'] = 10;
        $paymentsTypes = $this->paginate($this->PaymentsTypes);

        $this->set(compact('paymentsTypes'));
        $this->set('_serialize', ['paymentsTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Payments Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentsType = $this->PaymentsTypes->get($id, [
            'contain' => []
        ]);

        $this->set('paymentsType', $paymentsType);
        $this->set('_serialize', ['paymentsType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentsType = $this->PaymentsTypes->newEntity();
        if ($this->request->is('post')) {
            $paymentsType = $this->PaymentsTypes->patchEntity($paymentsType, $this->request->data);
            if ($this->PaymentsTypes->save($paymentsType)) {
                $this->Flash->success(__('The payments type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payments type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paymentsType'));
        $this->set('_serialize', ['paymentsType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Payments Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentsType = $this->PaymentsTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentsType = $this->PaymentsTypes->patchEntity($paymentsType, $this->request->data);
            if ($this->PaymentsTypes->save($paymentsType)) {
                $this->Flash->success(__('The payments type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The payments type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paymentsType'));
        $this->set('_serialize', ['paymentsType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Payments Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentsType = $this->PaymentsTypes->get($id);
        if ($this->PaymentsTypes->delete($paymentsType)) {
            $this->Flash->success(__('The payments type has been deleted.'));
        } else {
            $this->Flash->error(__('The payments type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
