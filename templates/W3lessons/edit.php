<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3lesson $w3lesson
 * @var string[]|\Cake\Collection\CollectionInterface $w3lessonTypes
 * @var string[]|\Cake\Collection\CollectionInterface $w3classes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3lesson->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3lesson->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3lessons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3lessons form content">
            <?= $this->Form->create($w3lesson) ?>
            <fieldset>
                <legend><?= __('Edit W3lesson') ?></legend>
                <?php
                    echo $this->Form->control('w3lesson_type_id', ['options' => $w3lessonTypes]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('position');
                    echo $this->Form->control('access');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('w3classes._ids', ['options' => $w3classes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
