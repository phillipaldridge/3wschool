<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3program $w3program
 * @var string[]|\Cake\Collection\CollectionInterface $w3programTypes
 * @var string[]|\Cake\Collection\CollectionInterface $w3courses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3program->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3program->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3programs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3programs form content">
            <?= $this->Form->create($w3program) ?>
            <fieldset>
                <legend><?= __('Edit W3program') ?></legend>
                <?php
                    echo $this->Form->control('active');
                    echo $this->Form->control('w3program_type_id', ['options' => $w3programTypes]);
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('total_units_needed');
                    echo $this->Form->control('w3courses._ids', ['options' => $w3courses]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
