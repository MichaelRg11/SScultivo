<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cultivos Controller
 *
 * @property \App\Model\Table\CultivosTable $Cultivos
 * @method \App\Model\Entity\Cultivo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CultivosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios'],
        ];
        $cultivos = $this->paginate($this->Cultivos);
        $this->set(compact('cultivos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cultivo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cultivo = $this->Cultivos->get($id, [
            'contain' => ['Usuarios'],
        ]);
        $this->set(compact('cultivo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cultivo = $this->Cultivos->newEmptyEntity();
        if ($this->request->is('post')) {
            $cultivo = $this->Cultivos->patchEntity($cultivo, $this->request->getData());
            if ($this->Cultivos->save($cultivo)) {
                $this->Flash->success(__('The cultivo has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cultivo could not be saved. Please, try again.'));
        }
        $usuarios = $this->Cultivos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('cultivo', 'usuarios'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Cultivo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cultivo = $this->Cultivos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cultivo = $this->Cultivos->patchEntity($cultivo, $this->request->getData());
            if ($this->Cultivos->save($cultivo)) {
                $this->Flash->success(__('The cultivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cultivo could not be saved. Please, try again.'));
        }
        $usuarios = $this->Cultivos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('cultivo', 'usuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cultivo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cultivo = $this->Cultivos->get($id);
        if ($this->Cultivos->delete($cultivo)) {
            $this->Flash->success(__('The cultivo has been deleted.'));
        } else {
            $this->Flash->error(__('The cultivo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
