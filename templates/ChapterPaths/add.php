<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterPath $chapterPath
 * @var \Cake\Collection\CollectionInterface|string[] $chapters
 * @var \Cake\Collection\CollectionInterface|string[] $chapterRules
 * @var \Cake\Collection\CollectionInterface|string[] $chapterActions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chapter Paths'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterPaths form content">
            <?= $this->Form->create($chapterPath) ?>
            <fieldset>
                <legend><?= __('Add Chapter Path') ?></legend>
                <?php
                    echo $this->Form->control('chapter_id', ['options' => $chapters]);
                    echo $this->Form->control('chapter_target_id');
                    echo $this->Form->control('chapter_rule_id', ['options' => $chapterRules, 'empty' => true]);
                    echo $this->Form->control('chapter_action_id', ['options' => $chapterActions, 'empty' => true]);
                    echo $this->Form->control('score');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
