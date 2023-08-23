<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3user> $w3users
 */
?>
<div class="w3users index content">
    <?= $this->Html->link(__('New W3user'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('level') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('revisioncount') ?></th>
                    <th><?= $this->Paginator->sort('changescount') ?></th>
                    <th><?= $this->Paginator->sort('signuptime') ?></th>
                    <th><?= $this->Paginator->sort('lastpassword') ?></th>
                    <th><?= $this->Paginator->sort('lastlogin') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3users as $w3user): ?>
                <tr>
                    <td><?= $this->Number->format($w3user->id) ?></td>
                    <td><?= h($w3user->active) ?></td>
                    <td><?= $this->Number->format($w3user->level) ?></td>
                    <td><?= h($w3user->name) ?></td>
                    <td><?= h($w3user->email) ?></td>
                    <td><?= $this->Number->format($w3user->revisioncount) ?></td>
                    <td><?= $this->Number->format($w3user->changescount) ?></td>
                    <td><?= h($w3user->signuptime) ?></td>
                    <td><?= h($w3user->lastpassword) ?></td>
                    <td><?= h($w3user->lastlogin) ?></td>
                    <td><?= h($w3user->created) ?></td>
                    <td><?= h($w3user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3user->id)]) ?>
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
