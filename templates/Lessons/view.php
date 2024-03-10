<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lesson $lesson
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lesson'), ['action' => 'edit', $lesson->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lesson'), ['action' => 'delete', $lesson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lesson->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lessons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lesson'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lessons view content">
            <h3><?= h($lesson->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lesson Type') ?></th>
                    <td><?= $lesson->has('lesson_type') ? $this->Html->link($lesson->lesson_type->name, ['controller' => 'LessonTypes', 'action' => 'view', $lesson->lesson_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Access') ?></th>
                    <td><?= h($lesson->access) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($lesson->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($lesson->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lesson->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $lesson->position === null ? '' : $this->Number->format($lesson->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($lesson->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($lesson->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $lesson->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classrooms') ?></h4>
                <?php if (!empty($lesson->classrooms)) : ?>
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
                        <?php foreach ($lesson->classrooms as $classrooms) : ?>
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
            <div class="related">
                <h4><?= __('Related Chapters') ?></h4>
                <?php if (!empty($lesson->chapters)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Lesson Id') ?></th>
                            <th><?= __('Chapter Type Id') ?></th>
                            <th><?= __('Chapter Access Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('UnitValue') ?></th>
                            <th><?= __('PassValue') ?></th>
                            <th><?= __('FailValue') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lesson->chapters as $chapters) : ?>
                        <tr>
                            <td><?= h($chapters->id) ?></td>
                            <td><?= h($chapters->lesson_id) ?></td>
                            <td><?= h($chapters->chapter_type_id) ?></td>
                            <td><?= h($chapters->chapter_access_id) ?></td>
                            <td><?= h($chapters->reference) ?></td>
                            <td><?= h($chapters->name) ?></td>
                            <td><?= h($chapters->active) ?></td>
                            <td><?= h($chapters->position) ?></td>
                            <td><?= h($chapters->unitValue) ?></td>
                            <td><?= h($chapters->passValue) ?></td>
                            <td><?= h($chapters->failValue) ?></td>
                            <td><?= h($chapters->created) ?></td>
                            <td><?= h($chapters->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Chapters', 'action' => 'view', $chapters->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Chapters', 'action' => 'edit', $chapters->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chapters', 'action' => 'delete', $chapters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapters->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Trackings') ?></h4>
                <?php if (!empty($lesson->user_trackings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Programrun Id') ?></th>
                            <th><?= __('Program Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('Class Id') ?></th>
                            <th><?= __('Lesson Id') ?></th>
                            <th><?= __('Chapter Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lesson->user_trackings as $userTrackings) : ?>
                        <tr>
                            <td><?= h($userTrackings->id) ?></td>
                            <td><?= h($userTrackings->programrun_id) ?></td>
                            <td><?= h($userTrackings->program_id) ?></td>
                            <td><?= h($userTrackings->course_id) ?></td>
                            <td><?= h($userTrackings->class_id) ?></td>
                            <td><?= h($userTrackings->lesson_id) ?></td>
                            <td><?= h($userTrackings->chapter_id) ?></td>
                            <td><?= h($userTrackings->user_id) ?></td>
                            <td><?= h($userTrackings->score) ?></td>
                            <td><?= h($userTrackings->created) ?></td>
                            <td><?= h($userTrackings->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserTrackings', 'action' => 'view', $userTrackings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserTrackings', 'action' => 'edit', $userTrackings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserTrackings', 'action' => 'delete', $userTrackings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userTrackings->id)]) ?>
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
