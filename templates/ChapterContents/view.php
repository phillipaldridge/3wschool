<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterContent $chapterContent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chapter Content'), ['action' => 'edit', $chapterContent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chapter Content'), ['action' => 'delete', $chapterContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterContent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chapter Contents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chapter Content'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterContents view content">
            <h3><?= h($chapterContent->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Chapter') ?></th>
                    <td><?= $chapterContent->has('chapter') ? $this->Html->link($chapterContent->chapter->name, ['controller' => 'Chapters', 'action' => 'view', $chapterContent->chapter->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($chapterContent->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chapterContent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chapterContent->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chapterContent->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $chapterContent->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chapterContent->content)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
