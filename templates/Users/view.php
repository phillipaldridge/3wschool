<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Profile') ?></th>
                    <td><?= $user->has('user_profile') ? $this->Html->link($user->user_profile->id, ['controller' => 'UserProfiles', 'action' => 'view', $user->user_profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level') ?></th>
                    <td><?= $this->Number->format($user->level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Revisioncount') ?></th>
                    <td><?= $this->Number->format($user->revisioncount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Changescount') ?></th>
                    <td><?= $this->Number->format($user->changescount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Signuptime') ?></th>
                    <td><?= h($user->signuptime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastpassword') ?></th>
                    <td><?= h($user->lastpassword) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastlogin') ?></th>
                    <td><?= h($user->lastlogin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Programruns') ?></h4>
                <?php if (!empty($user->programruns)) : ?>
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
                        <?php foreach ($user->programruns as $programruns) : ?>
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
                <h4><?= __('Related User Addresses') ?></h4>
                <?php if (!empty($user->user_addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Prefered') ?></th>
                            <th><?= __('Num') ?></th>
                            <th><?= __('Street1') ?></th>
                            <th><?= __('Street2') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_addresses as $userAddresses) : ?>
                        <tr>
                            <td><?= h($userAddresses->id) ?></td>
                            <td><?= h($userAddresses->user_id) ?></td>
                            <td><?= h($userAddresses->prefered) ?></td>
                            <td><?= h($userAddresses->num) ?></td>
                            <td><?= h($userAddresses->street1) ?></td>
                            <td><?= h($userAddresses->street2) ?></td>
                            <td><?= h($userAddresses->city) ?></td>
                            <td><?= h($userAddresses->country_id) ?></td>
                            <td><?= h($userAddresses->created) ?></td>
                            <td><?= h($userAddresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserAddresses', 'action' => 'view', $userAddresses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserAddresses', 'action' => 'edit', $userAddresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAddresses', 'action' => 'delete', $userAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddresses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Trackings') ?></h4>
                <?php if (!empty($user->user_trackings)) : ?>
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
                        <?php foreach ($user->user_trackings as $userTrackings) : ?>
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
