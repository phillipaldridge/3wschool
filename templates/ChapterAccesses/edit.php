<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterAccess $chapterAccess
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chapterAccess->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chapterAccess->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chapter Accesses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterAccesses form content">
            <?= $this->Form->create($chapterAccess) ?>
            <fieldset>
                <legend><?= __('Edit Chapter Access') ?></legend>
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
