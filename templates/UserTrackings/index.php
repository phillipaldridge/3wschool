<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserTracking> $userTrackings
 */
?>
<div class="userTrackings index content">
    <?= $this->Html->link(__('New User Tracking'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Trackings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('programrun_id') ?></th>
                    <th><?= $this->Paginator->sort('program_id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th><?= $this->Paginator->sort('class_id') ?></th>
                    <th><?= $this->Paginator->sort('lesson_id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userTrackings as $userTracking): ?>
                <tr>
                    <td><?= $this->Number->format($userTracking->id) ?></td>
        <td><?= $userTracking->has('programrun') ? $this->Html->link($userTracking->programrun->name, ['controller' => 'Programruns', 'action' => 'view', $userTracking->programrun->id]) : '' ?></td>
        <td><?= $userTracking->has('program') ? $this->Html->link($userTracking->program->name, ['controller' => 'Programs', 'action' => 'view', $userTracking->program->id]) : '' ?></td>
        <td><?= $userTracking->has('course') ? $this->Html->link($userTracking->course->name, ['controller' => 'Courses', 'action' => 'view', $userTracking->course->id]) : '' ?></td>
                    <td><?= $this->Number->format($userTracking->class_id) ?></td>
        <td><?= $userTracking->has('lesson') ? $this->Html->link($userTracking->lesson->name, ['controller' => 'Lessons', 'action' => 'view', $userTracking->lesson->id]) : '' ?></td>
        <td><?= $userTracking->has('chapter') ? $this->Html->link($userTracking->chapter->name, ['controller' => 'Chapters', 'action' => 'view', $userTracking->chapter->id]) : '' ?></td>
        <td><?= $userTracking->has('user') ? $this->Html->link($userTracking->user->name, ['controller' => 'Users', 'action' => 'view', $userTracking->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($userTracking->score) ?></td>
                    <td><?= h($userTracking->created) ?></td>
                    <td><?= h($userTracking->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userTracking->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userTracking->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userTracking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userTracking->id)]) ?>
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
