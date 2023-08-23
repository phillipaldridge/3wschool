<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3userProfile> $w3userProfiles
 */
?>
<div class="w3userProfiles index content">
    <?= $this->Html->link(__('New W3user Profile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3user Profiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3user_id') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('dateStart') ?></th>
                    <th><?= $this->Paginator->sort('dateEnd') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3userProfiles as $w3userProfile): ?>
                <tr>
                    <td><?= $this->Number->format($w3userProfile->id) ?></td>
                    <td><?= $w3userProfile->has('w3user') ? $this->Html->link($w3userProfile->w3user->name, ['controller' => 'W3users', 'action' => 'view', $w3userProfile->w3user->id]) : '' ?></td>
                    <td><?= h($w3userProfile->active) ?></td>
                    <td><?= h($w3userProfile->dateStart) ?></td>
                    <td><?= h($w3userProfile->dateEnd) ?></td>
                    <td><?= h($w3userProfile->created) ?></td>
                    <td><?= h($w3userProfile->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3userProfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3userProfile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userProfile->id)]) ?>
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
