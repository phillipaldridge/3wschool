<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3classType> $w3classTypes
 */
?>
<div class="w3classTypes index content">
    <?= $this->Html->link(__('New W3class Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3class Types') ?></h3>
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
                <?php foreach ($w3classTypes as $w3classType): ?>
                <tr>
                    <td><?= $this->Number->format($w3classType->id) ?></td>
                    <td><?= h($w3classType->name) ?></td>
                    <td><?= h($w3classType->created) ?></td>
                    <td><?= h($w3classType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3classType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3classType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3classType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3classType->id)]) ?>
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
