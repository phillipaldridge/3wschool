<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lesson> $lessons
 */
?>
<div class="lessons index content">
    <?= $this->Html->link(__('New Lesson'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lessons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lesson_type_id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('access') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lessons as $lesson): ?>
                <tr>
                    <td><?= $this->Number->format($lesson->id) ?></td>
        <td><?= $lesson->has('lesson_type') ? $this->Html->link($lesson->lesson_type->name, ['controller' => 'LessonTypes', 'action' => 'view', $lesson->lesson_type->id]) : '' ?></td>
                    <td><?= h($lesson->active) ?></td>
                    <td><?= $lesson->position === null ? '' : $this->Number->format($lesson->position) ?></td>
                    <td><?= h($lesson->access) ?></td>
                    <td><?= h($lesson->reference) ?></td>
                    <td><?= h($lesson->name) ?></td>
                    <td><?= h($lesson->created) ?></td>
                    <td><?= h($lesson->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lesson->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lesson->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lesson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lesson->id)]) ?>
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
