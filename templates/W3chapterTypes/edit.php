<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterType $w3chapterType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3chapterType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3chapter Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterTypes form content">
            <?= $this->Form->create($w3chapterType) ?>
            <fieldset>
                <legend><?= __('Edit W3chapter Type') ?></legend>
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
