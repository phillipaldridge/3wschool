<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterContent $w3chapterContent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3chapter Content'), ['action' => 'edit', $w3chapterContent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3chapter Content'), ['action' => 'delete', $w3chapterContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterContent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3chapter Contents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3chapter Content'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterContents view content">
            <h3><?= h($w3chapterContent->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3chapter') ?></th>
                    <td><?= $w3chapterContent->has('w3chapter') ? $this->Html->link($w3chapterContent->w3chapter->name, ['controller' => 'W3chapters', 'action' => 'view', $w3chapterContent->w3chapter->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3chapterContent->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3chapterContent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3chapterContent->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3chapterContent->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3chapterContent->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3chapterContent->content)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
