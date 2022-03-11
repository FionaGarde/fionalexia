<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonthTip $monthTip
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Month Tip'), ['action' => 'edit', $monthTip->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Month Tip'), ['action' => 'delete', $monthTip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monthTip->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Month Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Month Tip'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monthTips view content">
            <h3><?= h($monthTip->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $monthTip->has('staff') ? $this->Html->link($monthTip->staff->id, ['controller' => 'Staffs', 'action' => 'view', $monthTip->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($monthTip->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($monthTip->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($monthTip->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay') ?></th>
                    <td><?= $monthTip->pay ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
