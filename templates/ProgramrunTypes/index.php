<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ProgramrunType> $programrunTypes
 */
?>
<div class="programrunTypes index content">
    <?= $this->Html->link(__('New Programrun Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Programrun Types') ?></h3>
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
                <?php foreach ($programrunTypes as $programrunType): ?>
                <tr>
                    <td><?= $this->Number->format($programrunType->id) ?></td>
                    <td><?= h($programrunType->name) ?></td>
                    <td><?= h($programrunType->created) ?></td>
                    <td><?= h($programrunType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $programrunType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programrunType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programrunType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programrunType->id)]) ?>
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
