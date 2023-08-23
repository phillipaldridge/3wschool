<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3default $w3default
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3default'), ['action' => 'edit', $w3default->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3default'), ['action' => 'delete', $w3default->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3default->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3defaults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3default'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3defaults view content">
            <h3><?= h($w3default->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3default->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3default->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3default->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3default->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Value') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3default->value)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
