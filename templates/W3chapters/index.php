<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3chapter> $w3chapters
 */
?>
<div class="w3chapters index content">
    <?= $this->Html->link(__('New W3chapter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3chapters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3lesson_id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter_type_id') ?></th>
                    <th><?= $this->Paginator->sort('w3chapter_access_id') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('access') ?></th>
                    <th><?= $this->Paginator->sort('unitValue') ?></th>
                    <th><?= $this->Paginator->sort('passValue') ?></th>
                    <th><?= $this->Paginator->sort('failValue') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3chapters as $w3chapter): ?>
                <tr>
                    <td><?= $this->Number->format($w3chapter->id) ?></td>
                    <td><?= $w3chapter->has('w3lesson') ? $this->Html->link($w3chapter->w3lesson->name, ['controller' => 'W3lessons', 'action' => 'view', $w3chapter->w3lesson->id]) : '' ?></td>
                    <td><?= $w3chapter->has('w3chapter_type') ? $this->Html->link($w3chapter->w3chapter_type->name, ['controller' => 'W3chapterTypes', 'action' => 'view', $w3chapter->w3chapter_type->id]) : '' ?></td>
                    <td><?= $w3chapter->has('w3chapter_access') ? $this->Html->link($w3chapter->w3chapter_access->name, ['controller' => 'W3chapterAccesses', 'action' => 'view', $w3chapter->w3chapter_access->id]) : '' ?></td>
                    <td><?= h($w3chapter->reference) ?></td>
                    <td><?= h($w3chapter->name) ?></td>
                    <td><?= h($w3chapter->active) ?></td>
                    <td><?= $this->Number->format($w3chapter->position) ?></td>
                    <td><?= h($w3chapter->access) ?></td>
                    <td><?= $this->Number->format($w3chapter->unitValue) ?></td>
                    <td><?= $w3chapter->passValue === null ? '' : $this->Number->format($w3chapter->passValue) ?></td>
                    <td><?= $w3chapter->failValue === null ? '' : $this->Number->format($w3chapter->failValue) ?></td>
                    <td><?= h($w3chapter->created) ?></td>
                    <td><?= h($w3chapter->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3chapter->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3chapter->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapter->id)]) ?>
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
