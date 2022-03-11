<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonthTip[]|\Cake\Collection\CollectionInterface $monthTips
 */
?>
<div class="monthTips index content">
    <?= $this->Html->link(__('New Month Tip'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Month Tips') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pay') ?></th>
                    <th><?= $this->Paginator->sort('staff_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monthTips as $monthTip): ?>
                <tr>
                    <td><?= $this->Number->format($monthTip->id) ?></td>
                    <td><?= h($monthTip->pay) ?></td>
                    <td><?= $monthTip->has('staff') ? $this->Html->link($monthTip->staff->id, ['controller' => 'Staffs', 'action' => 'view', $monthTip->staff->id]) : '' ?></td>
                    <td><?= h($monthTip->created) ?></td>
                    <td><?= h($monthTip->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monthTip->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monthTip->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monthTip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monthTip->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
