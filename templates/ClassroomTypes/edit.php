<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClassroomType $classroomType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classroomType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classroomType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Classroom Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classroomTypes form content">
            <?= $this->Form->create($classroomType) ?>
            <fieldset>
                <legend><?= __('Edit Classroom Type') ?></legend>
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
