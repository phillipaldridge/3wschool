<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Systemdefault $systemdefault
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Systemdefault'), ['action' => 'edit', $systemdefault->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Systemdefault'), ['action' => 'delete', $systemdefault->id], ['confirm' => __('Are you sure you want to delete # {0}?', $systemdefault->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Systemdefaults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Systemdefault'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="systemdefaults view content">
            <h3><?= h($systemdefault->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($systemdefault->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($systemdefault->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($systemdefault->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($systemdefault->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Value') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($systemdefault->value)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
