<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * MonitoreoTr Controller
 *
 * @property \App\Model\Table\MonitoreoTrTable $MonitoreoTr
 * @method \App\Model\Entity\MonitoreoTr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonitoreoTrController extends AppController
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

        $monitoreoTr = $this->paginate($this->MonitoreoTr);

        $this->set(compact('monitoreoTr'));
    }

    /**
     * View method
     *
     * @param string|null $id Monitoreo Tr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monitoreoTr = $this->MonitoreoTr->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('monitoreoTr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monitoreoTr = $this->MonitoreoTr->newEmptyEntity();
        if ($this->request->is('post')) {
            $monitoreoTr = $this->MonitoreoTr->patchEntity($monitoreoTr, $this->request->getData());
            if ($this->MonitoreoTr->save($monitoreoTr)) {
                $this->Flash->success(__('The monitoreo tr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitoreo tr could not be saved. Please, try again.'));
        }
        $consulta = "SELECT * FROM cultivos WHERE usuario_id = ";
        $cultivos = $this->MonitoreoTr->Cultivos->query($consulta);
        $this->set(compact('monitoreoTr', 'cultivos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monitoreo Tr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monitoreoTr = $this->MonitoreoTr->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monitoreoTr = $this->MonitoreoTr->patchEntity($monitoreoTr, $this->request->getData());
            if ($this->MonitoreoTr->save($monitoreoTr)) {
                $this->Flash->success(__('The monitoreo tr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitoreo tr could not be saved. Please, try again.'));
        }
        $this->set(compact('monitoreoTr'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monitoreo Tr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monitoreoTr = $this->MonitoreoTr->get($id);
        if ($this->MonitoreoTr->delete($monitoreoTr)) {
            $this->Flash->success(__('The monitoreo tr has been deleted.'));
        } else {
            $this->Flash->error(__('The monitoreo tr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
