<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3programType $w3programType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3programType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3programType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3program Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3programTypes form content">
            <?= $this->Form->create($w3programType) ?>
            <fieldset>
                <legend><?= __('Edit W3program Type') ?></legend>
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
