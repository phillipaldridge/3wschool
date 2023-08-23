<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterPath $w3chapterPath
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3chapter Path'), ['action' => 'edit', $w3chapterPath->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3chapter Path'), ['action' => 'delete', $w3chapterPath->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterPath->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3chapter Paths'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3chapter Path'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterPaths view content">
            <h3><?= h($w3chapterPath->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3chapter') ?></th>
                    <td><?= $w3chapterPath->has('w3chapter') ? $this->Html->link($w3chapterPath->w3chapter->name, ['controller' => 'W3chapters', 'action' => 'view', $w3chapterPath->w3chapter->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3chapter Rule') ?></th>
                    <td><?= $w3chapterPath->has('w3chapter_rule') ? $this->Html->link($w3chapterPath->w3chapter_rule->name, ['controller' => 'W3chapterRules', 'action' => 'view', $w3chapterPath->w3chapter_rule->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3chapter Action') ?></th>
                    <td><?= $w3chapterPath->has('w3chapter_action') ? $this->Html->link($w3chapterPath->w3chapter_action->name, ['controller' => 'W3chapterActions', 'action' => 'view', $w3chapterPath->w3chapter_action->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3chapterPath->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('W3chapter2 Id') ?></th>
                    <td><?= $this->Number->format($w3chapterPath->w3chapter2_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($w3chapterPath->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3chapterPath->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3chapterPath->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
