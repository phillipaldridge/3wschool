<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterPath $chapterPath
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chapter Path'), ['action' => 'edit', $chapterPath->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chapter Path'), ['action' => 'delete', $chapterPath->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterPath->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chapter Paths'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chapter Path'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterPaths view content">
            <h3><?= h($chapterPath->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Chapter') ?></th>
                    <td><?= $chapterPath->has('chapter') ? $this->Html->link($chapterPath->chapter->name, ['controller' => 'Chapters', 'action' => 'view', $chapterPath->chapter->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Chapter Rule') ?></th>
                    <td><?= $chapterPath->has('chapter_rule') ? $this->Html->link($chapterPath->chapter_rule->name, ['controller' => 'ChapterRules', 'action' => 'view', $chapterPath->chapter_rule->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Chapter Action') ?></th>
                    <td><?= $chapterPath->has('chapter_action') ? $this->Html->link($chapterPath->chapter_action->name, ['controller' => 'ChapterActions', 'action' => 'view', $chapterPath->chapter_action->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chapterPath->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chapter Target Id') ?></th>
                    <td><?= $this->Number->format($chapterPath->chapter_target_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($chapterPath->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chapterPath->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chapterPath->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
