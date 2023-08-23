<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3userProfile $w3userProfile
 * @var string[]|\Cake\Collection\CollectionInterface $w3users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3userProfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3userProfile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3user Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3userProfiles form content">
            <?= $this->Form->create($w3userProfile) ?>
            <fieldset>
                <legend><?= __('Edit W3user Profile') ?></legend>
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
