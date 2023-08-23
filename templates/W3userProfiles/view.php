<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3userProfile $w3userProfile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3user Profile'), ['action' => 'edit', $w3userProfile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3user Profile'), ['action' => 'delete', $w3userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userProfile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3user Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3user Profile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3userProfiles view content">
            <h3><?= h($w3userProfile->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3user') ?></th>
                    <td><?= $w3userProfile->has('w3user') ? $this->Html->link($w3userProfile->w3user->name, ['controller' => 'W3users', 'action' => 'view', $w3userProfile->w3user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3userProfile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateStart') ?></th>
                    <td><?= h($w3userProfile->dateStart) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateEnd') ?></th>
                    <td><?= h($w3userProfile->dateEnd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3userProfile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3userProfile->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3userProfile->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
