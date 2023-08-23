<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3default $w3default
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3default->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3default->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3defaults'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3defaults form content">
            <?= $this->Form->create($w3default) ?>
            <fieldset>
                <legend><?= __('Edit W3default') ?></legend>
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
