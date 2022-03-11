<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MonthTip $monthTip
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Month Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="monthTips form content">
            <?= $this->Form->create($monthTip) ?>
            <fieldset>
                <legend><?= __('Add Month Tip') ?></legend>
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
