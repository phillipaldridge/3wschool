<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClassroomType $classroomType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Classroom Type'), ['action' => 'edit', $classroomType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Classroom Type'), ['action' => 'delete', $classroomType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classroomType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Classroom Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Classroom Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classroomTypes view content">
            <h3><?= h($classroomType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($classroomType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($classroomType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($classroomType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($classroomType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($classroomType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Classrooms') ?></h4>
                <?php if (!empty($classroomType->classrooms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Classroom Type Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($classroomType->classrooms as $classrooms) : ?>
                        <tr>
                            <td><?= h($classrooms->id) ?></td>
                            <td><?= h($classrooms->reference) ?></td>
                            <td><?= h($classrooms->name) ?></td>
                            <td><?= h($classrooms->classroom_type_id) ?></td>
                            <td><?= h($classrooms->active) ?></td>
                            <td><?= h($classrooms->position) ?></td>
                            <td><?= h($classrooms->created) ?></td>
                            <td><?= h($classrooms->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Classrooms', 'action' => 'view', $classrooms->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Classrooms', 'action' => 'edit', $classrooms->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classrooms', 'action' => 'delete', $classrooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classrooms->id)]) ?>
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
