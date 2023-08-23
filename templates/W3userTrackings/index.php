<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3userTracking> $w3userTrackings
 */
?>
<div class="w3userTrackings index content">
    <?= $this->Html->link(__('New W3user Tracking'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3user Trackings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3programrun_id') ?></th>
                    <th><?= $this->Paginator->sort('w3program_id') ?></th>
                    <th><?= $this->Paginator->sort('w3course_id') ?></th>
                    <th><?= $this->Paginator->sort('w3class_id') ?></th>
                    <th><?= $this->Paginator->sort('w3lesson_id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter_id') ?></th>
                    <th><?= $this->Paginator->sort('w3user_id') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3userTrackings as $w3userTracking): ?>
                <tr>
                    <td><?= $this->Number->format($w3userTracking->id) ?></td>
                    <td><?= $w3userTracking->has('w3programrun') ? $this->Html->link($w3userTracking->w3programrun->name, ['controller' => 'W3programruns', 'action' => 'view', $w3userTracking->w3programrun->id]) : '' ?></td>
                    <td><?= $w3userTracking->has('w3program') ? $this->Html->link($w3userTracking->w3program->name, ['controller' => 'W3programs', 'action' => 'view', $w3userTracking->w3program->id]) : '' ?></td>
                    <td><?= $w3userTracking->has('w3course') ? $this->Html->link($w3userTracking->w3course->name, ['controller' => 'W3courses', 'action' => 'view', $w3userTracking->w3course->id]) : '' ?></td>
                    <td><?= $w3userTracking->has('w3class') ? $this->Html->link($w3userTracking->w3class->name, ['controller' => 'W3classes', 'action' => 'view', $w3userTracking->w3class->id]) : '' ?></td>
                    <td><?= $w3userTracking->has('w3lesson') ? $this->Html->link($w3userTracking->w3lesson->name, ['controller' => 'W3lessons', 'action' => 'view', $w3userTracking->w3lesson->id]) : '' ?></td>
                    <td><?= $w3userTracking->has('w3chapter') ? $this->Html->link($w3userTracking->w3chapter->name, ['controller' => 'W3chapters', 'action' => 'view', $w3userTracking->w3chapter->id]) : '' ?></td>
                    <td><?= $w3userTracking->has('w3user') ? $this->Html->link($w3userTracking->w3user->name, ['controller' => 'W3users', 'action' => 'view', $w3userTracking->w3user->id]) : '' ?></td>
                    <td><?= $this->Number->format($w3userTracking->score) ?></td>
                    <td><?= h($w3userTracking->created) ?></td>
                    <td><?= h($w3userTracking->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3userTracking->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3userTracking->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3userTracking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userTracking->id)]) ?>
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
