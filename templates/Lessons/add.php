<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lesson $lesson
 * @var \Cake\Collection\CollectionInterface|string[] $lessonTypes
 * @var \Cake\Collection\CollectionInterface|string[] $classrooms
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lessons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lessons form content">
            <?= $this->Form->create($lesson) ?>
            <fieldset>
                <legend><?= __('Add Lesson') ?></legend>
                <?php
                    echo $this->Form->control('lesson_type_id', ['options' => $lessonTypes]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('position');
                    echo $this->Form->control('access');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('classrooms._ids', ['options' => $classrooms]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
