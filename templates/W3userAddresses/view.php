<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3userAddress $w3userAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3user Address'), ['action' => 'edit', $w3userAddress->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3user Address'), ['action' => 'delete', $w3userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userAddress->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3user Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3user Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3userAddresses view content">
            <h3><?= h($w3userAddress->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3user') ?></th>
                    <td><?= $w3userAddress->has('w3user') ? $this->Html->link($w3userAddress->w3user->name, ['controller' => 'W3users', 'action' => 'view', $w3userAddress->w3user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Num') ?></th>
                    <td><?= h($w3userAddress->num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street1') ?></th>
                    <td><?= h($w3userAddress->street1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street2') ?></th>
                    <td><?= h($w3userAddress->street2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($w3userAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('W3country') ?></th>
                    <td><?= $w3userAddress->has('w3country') ? $this->Html->link($w3userAddress->w3country->name, ['controller' => 'W3countries', 'action' => 'view', $w3userAddress->w3country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3userAddress->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3userAddress->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3userAddress->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prefered') ?></th>
                    <td><?= $w3userAddress->prefered ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
