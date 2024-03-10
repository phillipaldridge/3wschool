<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Address'), ['action' => 'edit', $userAddress->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Address'), ['action' => 'delete', $userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userAddresses view content">
            <h3><?= h($userAddress->num) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userAddress->has('user') ? $this->Html->link($userAddress->user->name, ['controller' => 'Users', 'action' => 'view', $userAddress->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Num') ?></th>
                    <td><?= h($userAddress->num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street1') ?></th>
                    <td><?= h($userAddress->street1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street2') ?></th>
                    <td><?= h($userAddress->street2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($userAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($userAddress->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $userAddress->has('country') ? $this->Html->link($userAddress->country->name, ['controller' => 'Countries', 'action' => 'view', $userAddress->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userAddress->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userAddress->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userAddress->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prefered') ?></th>
                    <td><?= $userAddress->prefered ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
