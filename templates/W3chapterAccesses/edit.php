<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterAccess $w3chapterAccess
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3chapterAccess->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterAccess->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3chapter Accesses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterAccesses form content">
            <?= $this->Form->create($w3chapterAccess) ?>
            <fieldset>
                <legend><?= __('Edit W3chapter Access') ?></legend>
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
