<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Systemdefault> $systemdefaults
 */
?>
<div class="systemdefaults index content">
    <?= $this->Html->link(__('New Systemdefault'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Systemdefaults') ?></h3>
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
                <?php foreach ($systemdefaults as $systemdefault): ?>
                <tr>
                    <td><?= $this->Number->format($systemdefault->id) ?></td>
                    <td><?= h($systemdefault->name) ?></td>
                    <td><?= h($systemdefault->created) ?></td>
                    <td><?= h($systemdefault->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $systemdefault->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $systemdefault->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $systemdefault->id], ['confirm' => __('Are you sure you want to delete # {0}?', $systemdefault->id)]) ?>
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
