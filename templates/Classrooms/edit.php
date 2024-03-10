<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classroom $classroom
 * @var string[]|\Cake\Collection\CollectionInterface $classroomTypes
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 * @var string[]|\Cake\Collection\CollectionInterface $lessons
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classroom->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classroom->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Classrooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classrooms form content">
            <?= $this->Form->create($classroom) ?>
            <fieldset>
                <legend><?= __('Edit Classroom') ?></legend>
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
