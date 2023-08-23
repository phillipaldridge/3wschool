<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3lessonType $w3lessonType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3lesson Type'), ['action' => 'edit', $w3lessonType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3lesson Type'), ['action' => 'delete', $w3lessonType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3lessonType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3lesson Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3lesson Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3lessonTypes view content">
            <h3><?= h($w3lessonType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3lessonType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3lessonType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3lessonType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3lessonType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3lessonType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related W3lessons') ?></h4>
                <?php if (!empty($w3lessonType->w3lessons)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('W3class Id') ?></th>
                            <th><?= __('W3lesson Type Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3lessonType->w3lessons as $w3lessons) : ?>
                        <tr>
                            <td><?= h($w3lessons->id) ?></td>
                            <td><?= h($w3lessons->w3class_id) ?></td>
                            <td><?= h($w3lessons->w3lesson_type_id) ?></td>
                            <td><?= h($w3lessons->active) ?></td>
                            <td><?= h($w3lessons->position) ?></td>
                            <td><?= h($w3lessons->reference) ?></td>
                            <td><?= h($w3lessons->name) ?></td>
                            <td><?= h($w3lessons->created) ?></td>
                            <td><?= h($w3lessons->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3lessons', 'action' => 'view', $w3lessons->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3lessons', 'action' => 'edit', $w3lessons->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3lessons', 'action' => 'delete', $w3lessons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3lessons->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
