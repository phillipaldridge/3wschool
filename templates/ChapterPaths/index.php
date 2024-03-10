<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ChapterPath> $chapterPaths
 */
?>
<div class="chapterPaths index content">
    <?= $this->Html->link(__('New Chapter Path'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chapter Paths') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_target_id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_rule_id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_action_id') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chapterPaths as $chapterPath): ?>
                <tr>
                    <td><?= $this->Number->format($chapterPath->id) ?></td>
        <td><?= $chapterPath->has('chapter') ? $this->Html->link($chapterPath->chapter->name, ['controller' => 'Chapters', 'action' => 'view', $chapterPath->chapter->id]) : '' ?></td>
                    <td><?= $this->Number->format($chapterPath->chapter_target_id) ?></td>
        <td><?= $chapterPath->has('chapter_rule') ? $this->Html->link($chapterPath->chapter_rule->name, ['controller' => 'ChapterRules', 'action' => 'view', $chapterPath->chapter_rule->id]) : '' ?></td>
        <td><?= $chapterPath->has('chapter_action') ? $this->Html->link($chapterPath->chapter_action->name, ['controller' => 'ChapterActions', 'action' => 'view', $chapterPath->chapter_action->id]) : '' ?></td>
                    <td><?= $this->Number->format($chapterPath->score) ?></td>
                    <td><?= h($chapterPath->created) ?></td>
                    <td><?= h($chapterPath->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chapterPath->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapterPath->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapterPath->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterPath->id)]) ?>
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
