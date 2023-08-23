<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3userTracking $w3userTracking
 * @var string[]|\Cake\Collection\CollectionInterface $w3programruns
 * @var string[]|\Cake\Collection\CollectionInterface $w3programs
 * @var string[]|\Cake\Collection\CollectionInterface $w3courses
 * @var string[]|\Cake\Collection\CollectionInterface $w3classes
 * @var string[]|\Cake\Collection\CollectionInterface $w3lessons
 * @var string[]|\Cake\Collection\CollectionInterface $w3chapters
 * @var string[]|\Cake\Collection\CollectionInterface $w3users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3userTracking->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3userTracking->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3user Trackings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3userTrackings form content">
            <?= $this->Form->create($w3userTracking) ?>
            <fieldset>
                <legend><?= __('Edit W3user Tracking') ?></legend>
                <?php
                    echo $this->Form->control('w3programrun_id', ['options' => $w3programruns]);
                    echo $this->Form->control('w3program_id', ['options' => $w3programs]);
                    echo $this->Form->control('w3course_id', ['options' => $w3courses]);
                    echo $this->Form->control('w3class_id', ['options' => $w3classes]);
                    echo $this->Form->control('w3lesson_id', ['options' => $w3lessons]);
                    echo $this->Form->control('w3chapter_id', ['options' => $w3chapters]);
                    echo $this->Form->control('w3user_id', ['options' => $w3users]);
                    echo $this->Form->control('score');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
