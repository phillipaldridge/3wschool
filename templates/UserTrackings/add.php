<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTracking $userTracking
 * @var \Cake\Collection\CollectionInterface|string[] $programruns
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 * @var \Cake\Collection\CollectionInterface|string[] $lessons
 * @var \Cake\Collection\CollectionInterface|string[] $chapters
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User Trackings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userTrackings form content">
            <?= $this->Form->create($userTracking) ?>
            <fieldset>
                <legend><?= __('Add User Tracking') ?></legend>
                <?php
                    echo $this->Form->control('programrun_id', ['options' => $programruns]);
                    echo $this->Form->control('program_id', ['options' => $programs]);
                    echo $this->Form->control('course_id', ['options' => $courses]);
                    echo $this->Form->control('class_id');
                    echo $this->Form->control('lesson_id', ['options' => $lessons]);
                    echo $this->Form->control('chapter_id', ['options' => $chapters]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('score');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
