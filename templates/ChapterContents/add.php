<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterContent $chapterContent
 * @var \Cake\Collection\CollectionInterface|string[] $chapters
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chapter Contents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterContents form content">
            <?= $this->Form->create($chapterContent) ?>
            <fieldset>
                <legend><?= __('Add Chapter Content') ?></legend>
                <?php
                    echo $this->Form->control('chapter_id', ['options' => $chapters]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('name');
                    echo $this->Form->control('content');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
