<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonthTip $monthTip
 * @var string[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monthTip->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monthTip->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Month Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monthTips form content">
            <?= $this->Form->create($monthTip) ?>
            <fieldset>
                <legend><?= __('Edit Month Tip') ?></legend>
                <?php
                    echo $this->Form->control('pay');
                    echo $this->Form->control('staff_id', ['options' => $staffs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
