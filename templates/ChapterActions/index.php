<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ChapterAction> $chapterActions
 */
?>
<div class="chapterActions index content">
    <?= $this->Html->link(__('New Chapter Action'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chapter Actions') ?></h3>
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
                <?php foreach ($chapterActions as $chapterAction): ?>
                <tr>
                    <td><?= $this->Number->format($chapterAction->id) ?></td>
                    <td><?= h($chapterAction->name) ?></td>
                    <td><?= h($chapterAction->created) ?></td>
                    <td><?= h($chapterAction->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chapterAction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapterAction->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapterAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterAction->id)]) ?>
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
