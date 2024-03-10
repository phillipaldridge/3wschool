<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classroom $classroom
 * @var \Cake\Collection\CollectionInterface|string[] $classroomTypes
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 * @var \Cake\Collection\CollectionInterface|string[] $lessons
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Classrooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classrooms form content">
            <?= $this->Form->create($classroom) ?>
            <fieldset>
                <legend><?= __('Add Classroom') ?></legend>
                <?php
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('classroom_type_id', ['options' => $classroomTypes]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('position');
                    echo $this->Form->control('courses._ids', ['options' => $courses]);
                    echo $this->Form->control('lessons._ids', ['options' => $lessons]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
