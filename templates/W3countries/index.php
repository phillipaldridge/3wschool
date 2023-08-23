<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3country> $w3countries
 */
?>
<div class="w3countries index content">
    <?= $this->Html->link(__('New W3country'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3countries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name_en') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3countries as $w3country): ?>
                <tr>
                    <td><?= $this->Number->format($w3country->id) ?></td>
                    <td><?= h($w3country->name_en) ?></td>
                    <td><?= h($w3country->name) ?></td>
                    <td><?= h($w3country->code) ?></td>
                    <td><?= h($w3country->is_active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3country->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3country->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3country->id)]) ?>
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
