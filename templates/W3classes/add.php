<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3class $w3class
 * @var \Cake\Collection\CollectionInterface|string[] $w3classTypes
 * @var \Cake\Collection\CollectionInterface|string[] $w3lessons
 * @var \Cake\Collection\CollectionInterface|string[] $w3courses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List W3classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3classes form content">
            <?= $this->Form->create($w3class) ?>
            <fieldset>
                <legend><?= __('Add W3class') ?></legend>
                <?php
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('w3class_type_id', ['options' => $w3classTypes]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('position');
                    echo $this->Form->control('w3lessons._ids', ['options' => $w3lessons]);
                    echo $this->Form->control('w3courses._ids', ['options' => $w3courses]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
