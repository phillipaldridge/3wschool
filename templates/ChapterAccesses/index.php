<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ChapterAccess> $chapterAccesses
 */
?>
<div class="chapterAccesses index content">
    <?= $this->Html->link(__('New Chapter Access'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chapter Accesses') ?></h3>
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
                <?php foreach ($chapterAccesses as $chapterAccess): ?>
                <tr>
                    <td><?= $this->Number->format($chapterAccess->id) ?></td>
                    <td><?= h($chapterAccess->name) ?></td>
                    <td><?= h($chapterAccess->created) ?></td>
                    <td><?= h($chapterAccess->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chapterAccess->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapterAccess->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapterAccess->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterAccess->id)]) ?>
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
