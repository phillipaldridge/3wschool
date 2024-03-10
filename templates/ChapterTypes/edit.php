<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterType $chapterType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chapterType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chapterType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chapter Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterTypes form content">
            <?= $this->Form->create($chapterType) ?>
            <fieldset>
                <legend><?= __('Edit Chapter Type') ?></legend>
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
