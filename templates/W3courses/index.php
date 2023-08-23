<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3course> $w3courses
 */
?>
<div class="w3courses index content">
    <?= $this->Html->link(__('New W3course'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3courses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3course_type_id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('unitValue') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3courses as $w3course): ?>
                <tr>
                    <td><?= $this->Number->format($w3course->id) ?></td>
                    <td><?= $w3course->has('w3course_type') ? $this->Html->link($w3course->w3course_type->name, ['controller' => 'W3courseTypes', 'action' => 'view', $w3course->w3course_type->id]) : '' ?></td>
                    <td><?= h($w3course->active) ?></td>
                    <td><?= h($w3course->reference) ?></td>
                    <td><?= h($w3course->name) ?></td>
                    <td><?= $this->Number->format($w3course->unitValue) ?></td>
                    <td><?= h($w3course->created) ?></td>
                    <td><?= h($w3course->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3course->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3course->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3course->id)]) ?>
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
