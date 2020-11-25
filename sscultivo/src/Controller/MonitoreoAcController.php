<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * MonitoreoAc Controller
 *
 * @property \App\Model\Table\MonitoreoAcTable $MonitoreoAc
 * @method \App\Model\Entity\MonitoreoAc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonitoreoAcController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cultivos'],
        ];

        $monitoreoAc = $this->paginate($this->MonitoreoAc);

        $this->set(compact('monitoreoAc'));
    }

    /**
     * View method
     *
     * @param string|null $id Monitoreo Ac id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monitoreoAc = $this->MonitoreoAc->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('monitoreoAc'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monitoreoAc = $this->MonitoreoAc->newEmptyEntity();
        if ($this->request->is('post')) {
            $monitoreoAc = $this->MonitoreoAc->patchEntity($monitoreoAc, $this->request->getData());
            if ($this->MonitoreoAc->save($monitoreoAc)) {
                $this->Flash->success(__('The monitoreo ac has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitoreo ac could not be saved. Please, try again.'));
        }
        $this->set(compact('monitoreoAc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monitoreo Ac id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monitoreoAc = $this->MonitoreoAc->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monitoreoAc = $this->MonitoreoAc->patchEntity($monitoreoAc, $this->request->getData());
            if ($this->MonitoreoAc->save($monitoreoAc)) {
                $this->Flash->success(__('The monitoreo ac has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitoreo ac could not be saved. Please, try again.'));
        }
        $this->set(compact('monitoreoAc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monitoreo Ac id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monitoreoAc = $this->MonitoreoAc->get($id);
        if ($this->MonitoreoAc->delete($monitoreoAc)) {
            $this->Flash->success(__('The monitoreo ac has been deleted.'));
        } else {
            $this->Flash->error(__('The monitoreo ac could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
