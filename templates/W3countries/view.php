<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3country $w3country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3country'), ['action' => 'edit', $w3country->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3country'), ['action' => 'delete', $w3country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3country->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3countries view content">
            <h3><?= h($w3country->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name En') ?></th>
                    <td><?= h($w3country->name_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3country->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($w3country->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= $w3country->is_active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related W3user Addresses') ?></h4>
                <?php if (!empty($w3country->w3user_addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('W3user Id') ?></th>
                            <th><?= __('Prefered') ?></th>
                            <th><?= __('Num') ?></th>
                            <th><?= __('Street1') ?></th>
                            <th><?= __('Street2') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('W3country Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3country->w3user_addresses as $w3userAddresses) : ?>
                        <tr>
                            <td><?= h($w3userAddresses->id) ?></td>
                            <td><?= h($w3userAddresses->w3user_id) ?></td>
                            <td><?= h($w3userAddresses->prefered) ?></td>
                            <td><?= h($w3userAddresses->num) ?></td>
                            <td><?= h($w3userAddresses->street1) ?></td>
                            <td><?= h($w3userAddresses->street2) ?></td>
                            <td><?= h($w3userAddresses->city) ?></td>
                            <td><?= h($w3userAddresses->w3country_id) ?></td>
                            <td><?= h($w3userAddresses->created) ?></td>
                            <td><?= h($w3userAddresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3userAddresses', 'action' => 'view', $w3userAddresses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3userAddresses', 'action' => 'edit', $w3userAddresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3userAddresses', 'action' => 'delete', $w3userAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userAddresses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
