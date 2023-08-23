<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3chapterPath> $w3chapterPaths
 */
?>
<div class="w3chapterPaths index content">
    <?= $this->Html->link(__('New W3chapter Path'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3chapter Paths') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter_id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter2_id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter_rule_id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter_action_id') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3chapterPaths as $w3chapterPath): ?>
                <tr>
                    <td><?= $this->Number->format($w3chapterPath->id) ?></td>
                    <td><?= $w3chapterPath->has('w3chapter') ? $this->Html->link($w3chapterPath->w3chapter->name, ['controller' => 'W3chapters', 'action' => 'view', $w3chapterPath->w3chapter->id]) : '' ?></td>
                    <td><?= $this->Number->format($w3chapterPath->w3chapter2_id) ?></td>
                    <td><?= $w3chapterPath->has('w3chapter_rule') ? $this->Html->link($w3chapterPath->w3chapter_rule->name, ['controller' => 'W3chapterRules', 'action' => 'view', $w3chapterPath->w3chapter_rule->id]) : '' ?></td>
                    <td><?= $w3chapterPath->has('w3chapter_action') ? $this->Html->link($w3chapterPath->w3chapter_action->name, ['controller' => 'W3chapterActions', 'action' => 'view', $w3chapterPath->w3chapter_action->id]) : '' ?></td>
                    <td><?= $this->Number->format($w3chapterPath->score) ?></td>
                    <td><?= h($w3chapterPath->created) ?></td>
                    <td><?= h($w3chapterPath->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3chapterPath->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3chapterPath->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3chapterPath->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterPath->id)]) ?>
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
