<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3programrun $w3programrun
 * @var string[]|\Cake\Collection\CollectionInterface $w3programs
 * @var string[]|\Cake\Collection\CollectionInterface $w3programrunTypes
 * @var string[]|\Cake\Collection\CollectionInterface $w3users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3programrun->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3programrun->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3programruns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3programruns form content">
            <?= $this->Form->create($w3programrun) ?>
            <fieldset>
                <legend><?= __('Edit W3programrun') ?></legend>
                <?php
                    echo $this->Form->control('active');
                    echo $this->Form->control('w3program_id', ['options' => $w3programs]);
                    echo $this->Form->control('w3programrun_type_id', ['options' => $w3programrunTypes]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('dateStart', ['empty' => true]);
                    echo $this->Form->control('dateEnd', ['empty' => true]);
                    echo $this->Form->control('w3users._ids', ['options' => $w3users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
