<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3userProfile $w3userProfile
 * @var \Cake\Collection\CollectionInterface|string[] $w3users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List W3user Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3userProfiles form content">
            <?= $this->Form->create($w3userProfile) ?>
            <fieldset>
                <legend><?= __('Add W3user Profile') ?></legend>
                <?php
                    echo $this->Form->control('w3user_id', ['options' => $w3users]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('dateStart', ['empty' => true]);
                    echo $this->Form->control('dateEnd', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
