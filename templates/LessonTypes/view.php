<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LessonType $lessonType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lesson Type'), ['action' => 'edit', $lessonType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lesson Type'), ['action' => 'delete', $lessonType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lessonType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lesson Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lesson Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lessonTypes view content">
            <h3><?= h($lessonType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($lessonType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lessonType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lessonType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lessonType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lessonType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Lessons') ?></h4>
                <?php if (!empty($lessonType->lessons)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Lesson Type Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Access') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lessonType->lessons as $lessons) : ?>
                        <tr>
                            <td><?= h($lessons->id) ?></td>
                            <td><?= h($lessons->lesson_type_id) ?></td>
                            <td><?= h($lessons->active) ?></td>
                            <td><?= h($lessons->position) ?></td>
                            <td><?= h($lessons->access) ?></td>
                            <td><?= h($lessons->reference) ?></td>
                            <td><?= h($lessons->name) ?></td>
                            <td><?= h($lessons->created) ?></td>
                            <td><?= h($lessons->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Lessons', 'action' => 'view', $lessons->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Lessons', 'action' => 'edit', $lessons->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lessons', 'action' => 'delete', $lessons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lessons->id)]) ?>
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
