<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3userTracking $w3userTracking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3user Tracking'), ['action' => 'edit', $w3userTracking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3user Tracking'), ['action' => 'delete', $w3userTracking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userTracking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3user Trackings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3user Tracking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3userTrackings view content">
            <h3><?= h($w3userTracking->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3programrun') ?></th>
                    <td><?= $w3userTracking->has('w3programrun') ? $this->Html->link($w3userTracking->w3programrun->name, ['controller' => 'W3programruns', 'action' => 'view', $w3userTracking->w3programrun->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3program') ?></th>
                    <td><?= $w3userTracking->has('w3program') ? $this->Html->link($w3userTracking->w3program->name, ['controller' => 'W3programs', 'action' => 'view', $w3userTracking->w3program->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3course') ?></th>
                    <td><?= $w3userTracking->has('w3course') ? $this->Html->link($w3userTracking->w3course->name, ['controller' => 'W3courses', 'action' => 'view', $w3userTracking->w3course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3class') ?></th>
                    <td><?= $w3userTracking->has('w3class') ? $this->Html->link($w3userTracking->w3class->name, ['controller' => 'W3classes', 'action' => 'view', $w3userTracking->w3class->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3lesson') ?></th>
                    <td><?= $w3userTracking->has('w3lesson') ? $this->Html->link($w3userTracking->w3lesson->name, ['controller' => 'W3lessons', 'action' => 'view', $w3userTracking->w3lesson->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3chapter') ?></th>
                    <td><?= $w3userTracking->has('w3chapter') ? $this->Html->link($w3userTracking->w3chapter->name, ['controller' => 'W3chapters', 'action' => 'view', $w3userTracking->w3chapter->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3user') ?></th>
                    <td><?= $w3userTracking->has('w3user') ? $this->Html->link($w3userTracking->w3user->name, ['controller' => 'W3users', 'action' => 'view', $w3userTracking->w3user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3userTracking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($w3userTracking->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3userTracking->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3userTracking->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
