<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Insumos Controller
 *
 * @property \App\Model\Table\InsumosTable $Insumos
 * @method \App\Model\Entity\Insumo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InsumosController extends AppController
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
        $insumos = $this->paginate($this->Insumos);

        $this->set(compact('insumos'));
    }

    /**
     * View method
     *
     * @param string|null $id Insumo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $insumo = $this->Insumos->get($id, [
            'contain' => ['Cultivos'],
        ]);

        $this->set(compact('insumo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $insumo = $this->Insumos->newEmptyEntity();
        if ($this->request->is('post')) {
            $insumo = $this->Insumos->patchEntity($insumo, $this->request->getData());
            if ($this->Insumos->save($insumo)) {
                $this->Flash->success(__('The insumo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insumo could not be saved. Please, try again.'));
        }
        $cultivos = $this->Insumos->Cultivos->find('list', ['limit' => 200]);
        $this->set(compact('insumo', 'cultivos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Insumo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $insumo = $this->Insumos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $insumo = $this->Insumos->patchEntity($insumo, $this->request->getData());
            if ($this->Insumos->save($insumo)) {
                $this->Flash->success(__('The insumo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insumo could not be saved. Please, try again.'));
        }
        $cultivos = $this->Insumos->Cultivos->find('list', ['limit' => 200]);
        $this->set(compact('insumo', 'cultivos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Insumo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $insumo = $this->Insumos->get($id);
        if ($this->Insumos->delete($insumo)) {
            $this->Flash->success(__('The insumo has been deleted.'));
        } else {
            $this->Flash->error(__('The insumo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
