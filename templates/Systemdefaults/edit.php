<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Systemdefault $systemdefault
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $systemdefault->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $systemdefault->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Systemdefaults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="systemdefaults form content">
            <?= $this->Form->create($systemdefault) ?>
            <fieldset>
                <legend><?= __('Edit Systemdefault') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('value');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
