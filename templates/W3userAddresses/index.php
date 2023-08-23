<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\W3userAddress> $w3userAddresses
 */
?>
<div class="w3userAddresses index content">
    <?= $this->Html->link(__('New W3user Address'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('W3user Addresses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('w3user_id') ?></th>
                    <th><?= $this->Paginator->sort('prefered') ?></th>
                    <th><?= $this->Paginator->sort('num') ?></th>
                    <th><?= $this->Paginator->sort('street1') ?></th>
                    <th><?= $this->Paginator->sort('street2') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('w3country_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($w3userAddresses as $w3userAddress): ?>
                <tr>
                    <td><?= $this->Number->format($w3userAddress->id) ?></td>
                    <td><?= $w3userAddress->has('w3user') ? $this->Html->link($w3userAddress->w3user->name, ['controller' => 'W3users', 'action' => 'view', $w3userAddress->w3user->id]) : '' ?></td>
                    <td><?= h($w3userAddress->prefered) ?></td>
                    <td><?= h($w3userAddress->num) ?></td>
                    <td><?= h($w3userAddress->street1) ?></td>
                    <td><?= h($w3userAddress->street2) ?></td>
                    <td><?= h($w3userAddress->city) ?></td>
                    <td><?= $w3userAddress->has('w3country') ? $this->Html->link($w3userAddress->w3country->name, ['controller' => 'W3countries', 'action' => 'view', $w3userAddress->w3country->id]) : '' ?></td>
                    <td><?= h($w3userAddress->created) ?></td>
                    <td><?= h($w3userAddress->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $w3userAddress->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $w3userAddress->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $w3userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userAddress->id)]) ?>
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
