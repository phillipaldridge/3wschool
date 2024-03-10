<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programrun $programrun
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Programrun'), ['action' => 'edit', $programrun->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Programrun'), ['action' => 'delete', $programrun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programrun->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Programruns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Programrun'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programruns view content">
            <h3><?= h($programrun->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Program') ?></th>
                    <td><?= $programrun->has('program') ? $this->Html->link($programrun->program->name, ['controller' => 'Programs', 'action' => 'view', $programrun->program->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Programrun Type') ?></th>
                    <td><?= $programrun->has('programrun_type') ? $this->Html->link($programrun->programrun_type->name, ['controller' => 'ProgramrunTypes', 'action' => 'view', $programrun->programrun_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($programrun->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($programrun->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($programrun->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateStart') ?></th>
                    <td><?= h($programrun->dateStart) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateEnd') ?></th>
                    <td><?= h($programrun->dateEnd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($programrun->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($programrun->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $programrun->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($programrun->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Level') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Revisioncount') ?></th>
                            <th><?= __('Changescount') ?></th>
                            <th><?= __('Signuptime') ?></th>
                            <th><?= __('Lastpassword') ?></th>
                            <th><?= __('Lastlogin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($programrun->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->level) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->revisioncount) ?></td>
                            <td><?= h($users->changescount) ?></td>
                            <td><?= h($users->signuptime) ?></td>
                            <td><?= h($users->lastpassword) ?></td>
                            <td><?= h($users->lastlogin) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Trackings') ?></h4>
                <?php if (!empty($programrun->user_trackings)) : ?>
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
                        <?php foreach ($programrun->user_trackings as $userTrackings) : ?>
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
