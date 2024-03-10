<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Chapter> $chapters
 */
?>
<div class="chapters index content">
    <?= $this->Html->link(__('New Chapter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chapters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('lesson_id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_type_id') ?></th>
                    <th><?= $this->Paginator->sort('chapter_access_id') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('unitValue') ?></th>
                    <th><?= $this->Paginator->sort('passValue') ?></th>
                    <th><?= $this->Paginator->sort('failValue') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chapters as $chapter): ?>
                <tr>
                    <td><?= $this->Number->format($chapter->id) ?></td>
        <td><?= $chapter->has('lesson') ? $this->Html->link($chapter->lesson->name, ['controller' => 'Lessons', 'action' => 'view', $chapter->lesson->id]) : '' ?></td>
        <td><?= $chapter->has('chapter_type') ? $this->Html->link($chapter->chapter_type->name, ['controller' => 'ChapterTypes', 'action' => 'view', $chapter->chapter_type->id]) : '' ?></td>
        <td><?= $chapter->has('chapter_access') ? $this->Html->link($chapter->chapter_access->name, ['controller' => 'ChapterAccesses', 'action' => 'view', $chapter->chapter_access->id]) : '' ?></td>
                    <td><?= h($chapter->reference) ?></td>
                    <td><?= h($chapter->name) ?></td>
                    <td><?= h($chapter->active) ?></td>
                    <td><?= $this->Number->format($chapter->position) ?></td>
                    <td><?= $this->Number->format($chapter->unitValue) ?></td>
                    <td><?= $chapter->passValue === null ? '' : $this->Number->format($chapter->passValue) ?></td>
                    <td><?= $chapter->failValue === null ? '' : $this->Number->format($chapter->failValue) ?></td>
                    <td><?= h($chapter->created) ?></td>
                    <td><?= h($chapter->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chapter->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapter->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id)]) ?>
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
