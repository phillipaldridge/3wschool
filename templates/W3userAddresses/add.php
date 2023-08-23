<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3userAddress $w3userAddress
 * @var \Cake\Collection\CollectionInterface|string[] $w3users
 * @var \Cake\Collection\CollectionInterface|string[] $w3countries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List W3user Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3userAddresses form content">
            <?= $this->Form->create($w3userAddress) ?>
            <fieldset>
                <legend><?= __('Add W3user Address') ?></legend>
                <?php
                    echo $this->Form->control('w3user_id', ['options' => $w3users]);
                    echo $this->Form->control('prefered');
                    echo $this->Form->control('num');
                    echo $this->Form->control('street1');
                    echo $this->Form->control('street2');
                    echo $this->Form->control('city');
                    echo $this->Form->control('w3country_id', ['options' => $w3countries]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
