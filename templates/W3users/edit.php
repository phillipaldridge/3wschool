<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3user $w3user
 * @var string[]|\Cake\Collection\CollectionInterface $w3programruns
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3users form content">
            <?= $this->Form->create($w3user) ?>
            <fieldset>
                <legend><?= __('Edit W3user') ?></legend>
                <?php
                    echo $this->Form->control('active');
                    echo $this->Form->control('level');
                    echo $this->Form->control('name');
                    echo $this->Form->control('password');
                    echo $this->Form->control('email');
                    echo $this->Form->control('revisioncount');
                    echo $this->Form->control('changescount');
                    echo $this->Form->control('signuptime');
                    echo $this->Form->control('lastpassword');
                    echo $this->Form->control('lastlogin');
                    echo $this->Form->control('w3programruns._ids', ['options' => $w3programruns]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
