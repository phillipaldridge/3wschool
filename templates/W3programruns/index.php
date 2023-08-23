<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3programrun> $w3programruns
 */
?>
<div class="w3programruns index content">
    <?= $this->Html->link(__('New W3programrun'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3programruns') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('w3program_id') ?></th>
                    <th><?= $this->Paginator->sort('w3programrun_type_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('dateStart') ?></th>
                    <th><?= $this->Paginator->sort('dateEnd') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3programruns as $w3programrun): ?>
                <tr>
                    <td><?= $this->Number->format($w3programrun->id) ?></td>
                    <td><?= h($w3programrun->active) ?></td>
                    <td><?= $w3programrun->has('w3program') ? $this->Html->link($w3programrun->w3program->name, ['controller' => 'W3programs', 'action' => 'view', $w3programrun->w3program->id]) : '' ?></td>
                    <td><?= $w3programrun->has('w3programrun_type') ? $this->Html->link($w3programrun->w3programrun_type->name, ['controller' => 'W3programrunTypes', 'action' => 'view', $w3programrun->w3programrun_type->id]) : '' ?></td>
                    <td><?= h($w3programrun->name) ?></td>
                    <td><?= h($w3programrun->reference) ?></td>
                    <td><?= h($w3programrun->dateStart) ?></td>
                    <td><?= h($w3programrun->dateEnd) ?></td>
                    <td><?= h($w3programrun->created) ?></td>
                    <td><?= h($w3programrun->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3programrun->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3programrun->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3programrun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programrun->id)]) ?>
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
