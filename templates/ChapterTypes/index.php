<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ChapterType> $chapterTypes
 */
?>
<div class="chapterTypes index content">
    <?= $this->Html->link(__('New Chapter Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chapter Types') ?></h3>
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
                <?php foreach ($chapterTypes as $chapterType): ?>
                <tr>
                    <td><?= $this->Number->format($chapterType->id) ?></td>
                    <td><?= h($chapterType->name) ?></td>
                    <td><?= h($chapterType->created) ?></td>
                    <td><?= h($chapterType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chapterType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapterType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapterType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterType->id)]) ?>
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
