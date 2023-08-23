<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3country $w3country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List W3countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3countries form content">
            <?= $this->Form->create($w3country) ?>
            <fieldset>
                <legend><?= __('Add W3country') ?></legend>
                <?php
                    echo $this->Form->control('name_en');
                    echo $this->Form->control('name');
                    echo $this->Form->control('code');
                    echo $this->Form->control('is_active');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
