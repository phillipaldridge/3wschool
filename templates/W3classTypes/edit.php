<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3classType $w3classType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3classType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3classType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3class Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3classTypes form content">
            <?= $this->Form->create($w3classType) ?>
            <fieldset>
                <legend><?= __('Edit W3class Type') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('slug');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
