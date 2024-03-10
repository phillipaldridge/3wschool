<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterPath $chapterPath
 * @var string[]|\Cake\Collection\CollectionInterface $chapters
 * @var string[]|\Cake\Collection\CollectionInterface $chapterRules
 * @var string[]|\Cake\Collection\CollectionInterface $chapterActions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chapterPath->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chapterPath->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chapter Paths'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterPaths form content">
            <?= $this->Form->create($chapterPath) ?>
            <fieldset>
                <legend><?= __('Edit Chapter Path') ?></legend>
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
