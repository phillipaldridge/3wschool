<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ClassroomType> $classroomTypes
 */
?>
<div class="classroomTypes index content">
    <?= $this->Html->link(__('New Classroom Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Classroom Types') ?></h3>
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
                <?php foreach ($classroomTypes as $classroomType): ?>
                <tr>
                    <td><?= $this->Number->format($classroomType->id) ?></td>
                    <td><?= h($classroomType->name) ?></td>
                    <td><?= h($classroomType->created) ?></td>
                    <td><?= h($classroomType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classroomType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classroomType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classroomType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classroomType->id)]) ?>
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
