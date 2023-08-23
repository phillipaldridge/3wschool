<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterPath $w3chapterPath
 * @var \Cake\Collection\CollectionInterface|string[] $w3chapters
 * @var \Cake\Collection\CollectionInterface|string[] $w3chapterRules
 * @var \Cake\Collection\CollectionInterface|string[] $w3chapterActions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List W3chapter Paths'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterPaths form content">
            <?= $this->Form->create($w3chapterPath) ?>
            <fieldset>
                <legend><?= __('Add W3chapter Path') ?></legend>
                <?php
                    echo $this->Form->control('w3chapter_id', ['options' => $w3chapters]);
                    echo $this->Form->control('w3chapter2_id');
                    echo $this->Form->control('w3chapter_rule_id', ['options' => $w3chapterRules, 'empty' => true]);
                    echo $this->Form->control('w3chapter_action_id', ['options' => $w3chapterActions, 'empty' => true]);
                    echo $this->Form->control('score');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
