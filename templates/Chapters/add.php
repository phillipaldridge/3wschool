<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter $chapter
 * @var \Cake\Collection\CollectionInterface|string[] $lessons
 * @var \Cake\Collection\CollectionInterface|string[] $chapterTypes
 * @var \Cake\Collection\CollectionInterface|string[] $chapterAccesses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chapters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapters form content">
            <?= $this->Form->create($chapter) ?>
            <fieldset>
                <legend><?= __('Add Chapter') ?></legend>
                <?php
                    echo $this->Form->control('lesson_id', ['options' => $lessons]);
                    echo $this->Form->control('chapter_type_id', ['options' => $chapterTypes]);
                    echo $this->Form->control('chapter_access_id', ['options' => $chapterAccesses, 'empty' => true]);
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('active');
                    echo $this->Form->control('position');
                    echo $this->Form->control('unitValue');
                    echo $this->Form->control('passValue');
                    echo $this->Form->control('failValue');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
