<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programrun $programrun
 * @var \Cake\Collection\CollectionInterface|string[] $programs
 * @var \Cake\Collection\CollectionInterface|string[] $programrunTypes
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Programruns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programruns form content">
            <?= $this->Form->create($programrun) ?>
            <fieldset>
                <legend><?= __('Add Programrun') ?></legend>
                <?php
                    echo $this->Form->control('active');
                    echo $this->Form->control('program_id', ['options' => $programs]);
                    echo $this->Form->control('programrun_type_id', ['options' => $programrunTypes]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('dateStart', ['empty' => true]);
                    echo $this->Form->control('dateEnd', ['empty' => true]);
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
