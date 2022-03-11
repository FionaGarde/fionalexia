<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MonthTips Controller
 *
 * @property \App\Model\Table\MonthTipsTable $MonthTips
 * @method \App\Model\Entity\MonthTip[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonthTipsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs'],
        ];
        $monthTips = $this->paginate($this->MonthTips);

        $this->set(compact('monthTips'));
    }

    /**
     * View method
     *
     * @param string|null $id Month Tip id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monthTip = $this->MonthTips->get($id, [
            'contain' => ['Staffs'],
        ]);

        $this->set(compact('monthTip'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monthTip = $this->MonthTips->newEmptyEntity();
        if ($this->request->is('post')) {
            $monthTip = $this->MonthTips->patchEntity($monthTip, $this->request->getData());
            if ($this->MonthTips->save($monthTip)) {
                $this->Flash->success(__('The month tip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The month tip could not be saved. Please, try again.'));
        }
        $staffs = $this->MonthTips->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('monthTip', 'staffs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Month Tip id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monthTip = $this->MonthTips->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monthTip = $this->MonthTips->patchEntity($monthTip, $this->request->getData());
            if ($this->MonthTips->save($monthTip)) {
                $this->Flash->success(__('The month tip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The month tip could not be saved. Please, try again.'));
        }
        $staffs = $this->MonthTips->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('monthTip', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Month Tip id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monthTip = $this->MonthTips->get($id);
        if ($this->MonthTips->delete($monthTip)) {
            $this->Flash->success(__('The month tip has been deleted.'));
        } else {
            $this->Flash->error(__('The month tip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
