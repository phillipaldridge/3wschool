<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterContent $w3chapterContent
 * @var \Cake\Collection\CollectionInterface|string[] $w3chapters
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List W3chapter Contents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterContents form content">
            <?= $this->Form->create($w3chapterContent) ?>
            <fieldset>
                <legend><?= __('Add W3chapter Content') ?></legend>
                <?php
                    echo $this->Form->control('w3chapter_id', ['options' => $w3chapters]);
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
