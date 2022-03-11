<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tip'), ['action' => 'edit', $tip->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tip'), ['action' => 'delete', $tip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tip->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tip'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tips view content">
            <h3><?= h($tip->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('NumberTable') ?></th>
                    <td><?= h($tip->numberTable) ?></td>
                </tr>
                <tr>
                    <th><?= __('AmountTable') ?></th>
                    <td><?= h($tip->amountTable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= h($tip->payment) ?></td>
                </tr>
                <tr>
                    <th><?= __('AmountTip') ?></th>
                    <td><?= h($tip->amountTip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $tip->has('staff') ? $this->Html->link($tip->staff->id, ['controller' => 'Staffs', 'action' => 'view', $tip->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tip->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tip->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tip->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
