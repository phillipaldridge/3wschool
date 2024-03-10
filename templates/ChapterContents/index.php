<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ChapterContent> $chapterContents
 */
?>
<div class="chapterContents index content">
    <?= $this->Html->link(__('New Chapter Content'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chapter Contents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chapterContents as $chapterContent): ?>
                <tr>
                    <td><?= $this->Number->format($chapterContent->id) ?></td>
        <td><?= $chapterContent->has('chapter') ? $this->Html->link($chapterContent->chapter->name, ['controller' => 'Chapters', 'action' => 'view', $chapterContent->chapter->id]) : '' ?></td>
                    <td><?= h($chapterContent->active) ?></td>
                    <td><?= h($chapterContent->name) ?></td>
                    <td><?= h($chapterContent->created) ?></td>
                    <td><?= h($chapterContent->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chapterContent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapterContent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapterContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterContent->id)]) ?>
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
