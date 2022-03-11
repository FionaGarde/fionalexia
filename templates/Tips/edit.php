<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 * @var string[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tip->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tip->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tips form content">
            <?= $this->Form->create($tip) ?>
            <fieldset>
                <legend><?= __('Edit Tip') ?></legend>
                <?php
                    echo $this->Form->control('numberTable');
                    echo $this->Form->control('amountTable');
                    echo $this->Form->control('payment');
                    echo $this->Form->control('amountTip');
                    echo $this->Form->control('staff_id', ['options' => $staffs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
