<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3course $w3course
 * @var \Cake\Collection\CollectionInterface|string[] $w3courseTypes
 * @var \Cake\Collection\CollectionInterface|string[] $w3classes
 * @var \Cake\Collection\CollectionInterface|string[] $w3programs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List W3courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3courses form content">
            <?= $this->Form->create($w3course) ?>
            <fieldset>
                <legend><?= __('Add W3course') ?></legend>
                <?php
                    echo $this->Form->control('w3course_type_id', ['options' => $w3courseTypes]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('unitValue');
                    echo $this->Form->control('w3classes._ids', ['options' => $w3classes]);
                    echo $this->Form->control('w3programs._ids', ['options' => $w3programs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
