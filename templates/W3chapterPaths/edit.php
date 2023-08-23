<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterPath $w3chapterPath
 * @var string[]|\Cake\Collection\CollectionInterface $w3chapters
 * @var string[]|\Cake\Collection\CollectionInterface $w3chapterRules
 * @var string[]|\Cake\Collection\CollectionInterface $w3chapterActions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3chapterPath->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterPath->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3chapter Paths'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterPaths form content">
            <?= $this->Form->create($w3chapterPath) ?>
            <fieldset>
                <legend><?= __('Edit W3chapter Path') ?></legend>
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
