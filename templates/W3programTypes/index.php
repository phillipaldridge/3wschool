<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3programType> $w3programTypes
 */
?>
<div class="w3programTypes index content">
    <?= $this->Html->link(__('New W3program Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3program Types') ?></h3>
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
                <?php foreach ($w3programTypes as $w3programType): ?>
                <tr>
                    <td><?= $this->Number->format($w3programType->id) ?></td>
                    <td><?= h($w3programType->name) ?></td>
                    <td><?= h($w3programType->created) ?></td>
                    <td><?= h($w3programType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3programType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3programType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3programType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programType->id)]) ?>
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
