<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip[]|\Cake\Collection\CollectionInterface $tips
 */
?>
<div class="tips index content">
    <?= $this->Html->link(__('New Tip'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tips') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numberTable') ?></th>
                    <th><?= $this->Paginator->sort('amountTable') ?></th>
                    <th><?= $this->Paginator->sort('payment') ?></th>
                    <th><?= $this->Paginator->sort('amountTip') ?></th>
                    <th><?= $this->Paginator->sort('staff_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tips as $tip): ?>
                <tr>
                    <td><?= $this->Number->format($tip->id) ?></td>
                    <td><?= h($tip->numberTable) ?></td>
                    <td><?= h($tip->amountTable) ?></td>
                    <td><?= h($tip->payment) ?></td>
                    <td><?= h($tip->amountTip) ?></td>
                    <td><?= $tip->has('staff') ? $this->Html->link($tip->staff->id, ['controller' => 'Staffs', 'action' => 'view', $tip->staff->id]) : '' ?></td>
                    <td><?= h($tip->created) ?></td>
                    <td><?= h($tip->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tip->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tip->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tip->id)]) ?>
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
