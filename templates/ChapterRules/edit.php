<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterRule $chapterRule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chapterRule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chapterRule->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chapter Rules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterRules form content">
            <?= $this->Form->create($chapterRule) ?>
            <fieldset>
                <legend><?= __('Edit Chapter Rule') ?></legend>
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
