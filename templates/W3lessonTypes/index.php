<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3lessonType> $w3lessonTypes
 */
?>
<div class="w3lessonTypes index content">
    <?= $this->Html->link(__('New W3lesson Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3lesson Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3lessonTypes as $w3lessonType): ?>
                <tr>
                    <td><?= $this->Number->format($w3lessonType->id) ?></td>
                    <td><?= h($w3lessonType->name) ?></td>
                    <td><?= h($w3lessonType->created) ?></td>
                    <td><?= h($w3lessonType->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3lessonType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3lessonType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3lessonType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3lessonType->id)]) ?>
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
