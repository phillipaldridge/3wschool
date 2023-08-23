<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3program> $w3programs
 */
?>
<div class="w3programs index content">
    <?= $this->Html->link(__('New W3program'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3programs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('w3program_type_id') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('total_units_needed') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3programs as $w3program): ?>
                <tr>
                    <td><?= $this->Number->format($w3program->id) ?></td>
                    <td><?= h($w3program->active) ?></td>
                    <td><?= $w3program->has('w3program_type') ? $this->Html->link($w3program->w3program_type->name, ['controller' => 'W3programTypes', 'action' => 'view', $w3program->w3program_type->id]) : '' ?></td>
                    <td><?= h($w3program->reference) ?></td>
                    <td><?= h($w3program->name) ?></td>
                    <td><?= $w3program->total_units_needed === null ? '' : $this->Number->format($w3program->total_units_needed) ?></td>
                    <td><?= h($w3program->created) ?></td>
                    <td><?= h($w3program->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3program->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3program->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3program->id)]) ?>
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
