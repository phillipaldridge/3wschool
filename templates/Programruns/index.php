<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Programrun> $programruns
 */
?>
<div class="programruns index content">
    <?= $this->Html->link(__('New Programrun'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Programruns') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('program_id') ?></th>
                    <th><?= $this->Paginator->sort('programrun_type_id') ?></th>
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
                <?php foreach ($programruns as $programrun): ?>
                <tr>
                    <td><?= $this->Number->format($programrun->id) ?></td>
                    <td><?= h($programrun->active) ?></td>
        <td><?= $programrun->has('program') ? $this->Html->link($programrun->program->name, ['controller' => 'Programs', 'action' => 'view', $programrun->program->id]) : '' ?></td>
        <td><?= $programrun->has('programrun_type') ? $this->Html->link($programrun->programrun_type->name, ['controller' => 'ProgramrunTypes', 'action' => 'view', $programrun->programrun_type->id]) : '' ?></td>
                    <td><?= h($programrun->name) ?></td>
                    <td><?= h($programrun->reference) ?></td>
                    <td><?= h($programrun->dateStart) ?></td>
                    <td><?= h($programrun->dateEnd) ?></td>
                    <td><?= h($programrun->created) ?></td>
                    <td><?= h($programrun->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $programrun->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programrun->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programrun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programrun->id)]) ?>
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
