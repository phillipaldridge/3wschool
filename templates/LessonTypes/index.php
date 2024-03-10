<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LessonType> $lessonTypes
 */
?>
<div class="lessonTypes index content">
    <?= $this->Html->link(__('New Lesson Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lesson Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lessonTypes as $lessonType): ?>
                <tr>
                    <td><?= $this->Number->format($lessonType->id) ?></td>
                    <td><?= h($lessonType->name) ?></td>
                    <td><?= h($lessonType->created) ?></td>
                    <td><?= h($lessonType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lessonType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lessonType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lessonType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lessonType->id)]) ?>
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
