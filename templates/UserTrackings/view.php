<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTracking $userTracking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Tracking'), ['action' => 'edit', $userTracking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Tracking'), ['action' => 'delete', $userTracking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userTracking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Trackings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Tracking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userTrackings view content">
            <h3><?= h($userTracking->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Programrun') ?></th>
                    <td><?= $userTracking->has('programrun') ? $this->Html->link($userTracking->programrun->name, ['controller' => 'Programruns', 'action' => 'view', $userTracking->programrun->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Program') ?></th>
                    <td><?= $userTracking->has('program') ? $this->Html->link($userTracking->program->name, ['controller' => 'Programs', 'action' => 'view', $userTracking->program->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $userTracking->has('course') ? $this->Html->link($userTracking->course->name, ['controller' => 'Courses', 'action' => 'view', $userTracking->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lesson') ?></th>
                    <td><?= $userTracking->has('lesson') ? $this->Html->link($userTracking->lesson->name, ['controller' => 'Lessons', 'action' => 'view', $userTracking->lesson->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Chapter') ?></th>
                    <td><?= $userTracking->has('chapter') ? $this->Html->link($userTracking->chapter->name, ['controller' => 'Chapters', 'action' => 'view', $userTracking->chapter->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userTracking->has('user') ? $this->Html->link($userTracking->user->name, ['controller' => 'Users', 'action' => 'view', $userTracking->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userTracking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class Id') ?></th>
                    <td><?= $this->Number->format($userTracking->class_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($userTracking->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userTracking->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userTracking->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
