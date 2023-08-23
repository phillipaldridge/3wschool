<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3class> $w3classes
 */
?>
<div class="w3classes index content">
    <?= $this->Html->link(__('New W3class'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3classes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('w3class_type_id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3classes as $w3class): ?>
                <tr>
                    <td><?= $this->Number->format($w3class->id) ?></td>
                    <td><?= h($w3class->reference) ?></td>
                    <td><?= h($w3class->name) ?></td>
                    <td><?= $w3class->has('w3class_type') ? $this->Html->link($w3class->w3class_type->name, ['controller' => 'W3classTypes', 'action' => 'view', $w3class->w3class_type->id]) : '' ?></td>
                    <td><?= h($w3class->active) ?></td>
                    <td><?= $this->Number->format($w3class->position) ?></td>
                    <td><?= h($w3class->created) ?></td>
                    <td><?= h($w3class->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3class->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3class->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3class->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3class->id)]) ?>
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
