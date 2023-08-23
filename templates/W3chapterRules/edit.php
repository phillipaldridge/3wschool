<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterRule $w3chapterRule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3chapterRule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterRule->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3chapter Rules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterRules form content">
            <?= $this->Form->create($w3chapterRule) ?>
            <fieldset>
                <legend><?= __('Edit W3chapter Rule') ?></legend>
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
