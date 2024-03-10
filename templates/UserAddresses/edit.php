<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $countries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userAddress->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userAddresses form content">
            <?= $this->Form->create($userAddress) ?>
            <fieldset>
                <legend><?= __('Edit User Address') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('prefered');
                    echo $this->Form->control('num');
                    echo $this->Form->control('street1');
                    echo $this->Form->control('street2');
                    echo $this->Form->control('city');
                    echo $this->Form->control('postcode');
                    echo $this->Form->control('country_id', ['options' => $countries]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
