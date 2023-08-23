<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapter $w3chapter
 * @var string[]|\Cake\Collection\CollectionInterface $w3lessons
 * @var string[]|\Cake\Collection\CollectionInterface $w3chapterTypes
 * @var string[]|\Cake\Collection\CollectionInterface $w3chapterAccesses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $w3chapter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapter->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List W3chapters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapters form content">
            <?= $this->Form->create($w3chapter) ?>
            <fieldset>
                <legend><?= __('Edit W3chapter') ?></legend>
                <?php
                    echo $this->Form->control('w3lesson_id', ['options' => $w3lessons]);
                    echo $this->Form->control('w3chapter_type_id', ['options' => $w3chapterTypes]);
                    echo $this->Form->control('w3chapter_access_id', ['options' => $w3chapterAccesses, 'empty' => true]);
                    echo $this->Form->control('reference');
                    echo $this->Form->control('name');
                    echo $this->Form->control('active');
                    echo $this->Form->control('position');
                    echo $this->Form->control('access');
                    echo $this->Form->control('unitValue');
                    echo $this->Form->control('passValue');
                    echo $this->Form->control('failValue');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
