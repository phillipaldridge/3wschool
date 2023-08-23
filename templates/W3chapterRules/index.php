<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3chapterRule> $w3chapterRules
 */
?>
<div class="w3chapterRules index content">
    <?= $this->Html->link(__('New W3chapter Rule'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3chapter Rules') ?></h3>
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
                <?php foreach ($w3chapterRules as $w3chapterRule): ?>
                <tr>
                    <td><?= $this->Number->format($w3chapterRule->id) ?></td>
                    <td><?= h($w3chapterRule->name) ?></td>
                    <td><?= h($w3chapterRule->created) ?></td>
                    <td><?= h($w3chapterRule->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3chapterRule->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3chapterRule->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3chapterRule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterRule->id)]) ?>
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
