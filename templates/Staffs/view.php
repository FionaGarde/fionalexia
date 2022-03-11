<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffs view content">
            <h3><?= h($staff->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($staff->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($staff->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= h($staff->service) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($staff->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($staff->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($staff->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Month Tips') ?></h4>
                <?php if (!empty($staff->month_tips)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pay') ?></th>
                            <th><?= __('Staff Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($staff->month_tips as $monthTips) : ?>
                        <tr>
                            <td><?= h($monthTips->id) ?></td>
                            <td><?= h($monthTips->pay) ?></td>
                            <td><?= h($monthTips->staff_id) ?></td>
                            <td><?= h($monthTips->created) ?></td>
                            <td><?= h($monthTips->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MonthTips', 'action' => 'view', $monthTips->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MonthTips', 'action' => 'edit', $monthTips->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MonthTips', 'action' => 'delete', $monthTips->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monthTips->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Services') ?></h4>
                <?php if (!empty($staff->services)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Start') ?></th>
                            <th><?= __('End') ?></th>
                            <th><?= __('Staff Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($staff->services as $services) : ?>
                        <tr>
                            <td><?= h($services->id) ?></td>
                            <td><?= h($services->start) ?></td>
                            <td><?= h($services->end) ?></td>
                            <td><?= h($services->staff_id) ?></td>
                            <td><?= h($services->created) ?></td>
                            <td><?= h($services->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Services', 'action' => 'view', $services->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Services', 'action' => 'edit', $services->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Services', 'action' => 'delete', $services->id], ['confirm' => __('Are you sure you want to delete # {0}?', $services->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tips') ?></h4>
                <?php if (!empty($staff->tips)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('NumberTable') ?></th>
                            <th><?= __('AmountTable') ?></th>
                            <th><?= __('Payment') ?></th>
                            <th><?= __('AmountTip') ?></th>
                            <th><?= __('Staff Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($staff->tips as $tips) : ?>
                        <tr>
                            <td><?= h($tips->id) ?></td>
                            <td><?= h($tips->numberTable) ?></td>
                            <td><?= h($tips->amountTable) ?></td>
                            <td><?= h($tips->payment) ?></td>
                            <td><?= h($tips->amountTip) ?></td>
                            <td><?= h($tips->staff_id) ?></td>
                            <td><?= h($tips->created) ?></td>
                            <td><?= h($tips->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tips', 'action' => 'view', $tips->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tips', 'action' => 'edit', $tips->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tips', 'action' => 'delete', $tips->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tips->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
