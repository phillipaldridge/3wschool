<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3chapterContent> $w3chapterContents
 */
?>
<div class="w3chapterContents index content">
    <?= $this->Html->link(__('New W3chapter Content'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3chapter Contents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter_id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3chapterContents as $w3chapterContent): ?>
                <tr>
                    <td><?= $this->Number->format($w3chapterContent->id) ?></td>
                    <td><?= $w3chapterContent->has('w3chapter') ? $this->Html->link($w3chapterContent->w3chapter->name, ['controller' => 'W3chapters', 'action' => 'view', $w3chapterContent->w3chapter->id]) : '' ?></td>
                    <td><?= h($w3chapterContent->active) ?></td>
                    <td><?= h($w3chapterContent->name) ?></td>
                    <td><?= h($w3chapterContent->created) ?></td>
                    <td><?= h($w3chapterContent->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3chapterContent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3chapterContent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3chapterContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterContent->id)]) ?>
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
