<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterAction $chapterAction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chapterAction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chapterAction->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chapter Actions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterActions form content">
            <?= $this->Form->create($chapterAction) ?>
            <fieldset>
                <legend><?= __('Edit Chapter Action') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('content');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
