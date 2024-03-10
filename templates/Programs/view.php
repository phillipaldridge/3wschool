<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Program'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programs view content">
            <h3><?= h($program->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Program Type') ?></th>
                    <td><?= $program->has('program_type') ? $this->Html->link($program->program_type->name, ['controller' => 'ProgramTypes', 'action' => 'view', $program->program_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($program->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($program->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($program->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Units Needed') ?></th>
                    <td><?= $program->total_units_needed === null ? '' : $this->Number->format($program->total_units_needed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($program->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($program->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $program->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Courses') ?></h4>
                <?php if (!empty($program->courses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Course Type Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('UnitValue') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($program->courses as $courses) : ?>
                        <tr>
                            <td><?= h($courses->id) ?></td>
                            <td><?= h($courses->course_type_id) ?></td>
                            <td><?= h($courses->active) ?></td>
                            <td><?= h($courses->reference) ?></td>
                            <td><?= h($courses->name) ?></td>
                            <td><?= h($courses->unitValue) ?></td>
                            <td><?= h($courses->created) ?></td>
                            <td><?= h($courses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Programruns') ?></h4>
                <?php if (!empty($program->programruns)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Program Id') ?></th>
                            <th><?= __('Programrun Type Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('DateStart') ?></th>
                            <th><?= __('DateEnd') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($program->programruns as $programruns) : ?>
                        <tr>
                            <td><?= h($programruns->id) ?></td>
                            <td><?= h($programruns->active) ?></td>
                            <td><?= h($programruns->program_id) ?></td>
                            <td><?= h($programruns->programrun_type_id) ?></td>
                            <td><?= h($programruns->name) ?></td>
                            <td><?= h($programruns->reference) ?></td>
                            <td><?= h($programruns->dateStart) ?></td>
                            <td><?= h($programruns->dateEnd) ?></td>
                            <td><?= h($programruns->created) ?></td>
                            <td><?= h($programruns->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Programruns', 'action' => 'view', $programruns->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Programruns', 'action' => 'edit', $programruns->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programruns', 'action' => 'delete', $programruns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programruns->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Trackings') ?></h4>
                <?php if (!empty($program->user_trackings)) : ?>
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
                        <?php foreach ($program->user_trackings as $userTrackings) : ?>
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
