<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Classroom> $classrooms
 */
?>
<div class="classrooms index content">
    <?= $this->Html->link(__('New Classroom'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Classrooms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('classroom_type_id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classrooms as $classroom): ?>
                <tr>
                    <td><?= $this->Number->format($classroom->id) ?></td>
                    <td><?= h($classroom->reference) ?></td>
                    <td><?= h($classroom->name) ?></td>
        <td><?= $classroom->has('classroom_type') ? $this->Html->link($classroom->classroom_type->name, ['controller' => 'ClassroomTypes', 'action' => 'view', $classroom->classroom_type->id]) : '' ?></td>
                    <td><?= h($classroom->active) ?></td>
                    <td><?= $this->Number->format($classroom->position) ?></td>
                    <td><?= h($classroom->created) ?></td>
                    <td><?= h($classroom->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classroom->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classroom->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classroom->id)]) ?>
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
