<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3chapterType> $w3chapterTypes
 */
?>
<div class="w3chapterTypes index content">
    <?= $this->Html->link(__('New W3chapter Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3chapter Types') ?></h3>
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
                <?php foreach ($w3chapterTypes as $w3chapterType): ?>
                <tr>
                    <td><?= $this->Number->format($w3chapterType->id) ?></td>
                    <td><?= h($w3chapterType->name) ?></td>
                    <td><?= h($w3chapterType->created) ?></td>
                    <td><?= h($w3chapterType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3chapterType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3chapterType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3chapterType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterType->id)]) ?>
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
