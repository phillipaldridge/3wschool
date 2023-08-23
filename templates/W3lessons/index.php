<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3lesson> $w3lessons
 */
?>
<div class="w3lessons index content">
    <?= $this->Html->link(__('New W3lesson'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3lessons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3lesson_type_id') ?></th>
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
                <?php foreach ($w3lessons as $w3lesson): ?>
                <tr>
                    <td><?= $this->Number->format($w3lesson->id) ?></td>
                    <td><?= $w3lesson->has('w3lesson_type') ? $this->Html->link($w3lesson->w3lesson_type->name, ['controller' => 'W3lessonTypes', 'action' => 'view', $w3lesson->w3lesson_type->id]) : '' ?></td>
                    <td><?= h($w3lesson->active) ?></td>
                    <td><?= $w3lesson->position === null ? '' : $this->Number->format($w3lesson->position) ?></td>
                    <td><?= h($w3lesson->access) ?></td>
                    <td><?= h($w3lesson->reference) ?></td>
                    <td><?= h($w3lesson->name) ?></td>
                    <td><?= h($w3lesson->created) ?></td>
                    <td><?= h($w3lesson->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3lesson->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3lesson->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3lesson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3lesson->id)]) ?>
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
