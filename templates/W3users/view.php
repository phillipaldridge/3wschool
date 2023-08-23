<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3user $w3user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3user'), ['action' => 'edit', $w3user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3user'), ['action' => 'delete', $w3user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3user'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3users view content">
            <h3><?= h($w3user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($w3user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('W3user Profile') ?></th>
                    <td><?= $w3user->has('w3user_profile') ? $this->Html->link($w3user->w3user_profile->id, ['controller' => 'W3userProfiles', 'action' => 'view', $w3user->w3user_profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level') ?></th>
                    <td><?= $this->Number->format($w3user->level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Revisioncount') ?></th>
                    <td><?= $this->Number->format($w3user->revisioncount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Changescount') ?></th>
                    <td><?= $this->Number->format($w3user->changescount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Signuptime') ?></th>
                    <td><?= h($w3user->signuptime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastpassword') ?></th>
                    <td><?= h($w3user->lastpassword) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastlogin') ?></th>
                    <td><?= h($w3user->lastlogin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3user->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related W3programruns') ?></h4>
                <?php if (!empty($w3user->w3programruns)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('W3program Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('DateStart') ?></th>
                            <th><?= __('DateEnd') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3user->w3programruns as $w3programruns) : ?>
                        <tr>
                            <td><?= h($w3programruns->id) ?></td>
                            <td><?= h($w3programruns->active) ?></td>
                            <td><?= h($w3programruns->w3program_id) ?></td>
                            <td><?= h($w3programruns->name) ?></td>
                            <td><?= h($w3programruns->reference) ?></td>
                            <td><?= h($w3programruns->dateStart) ?></td>
                            <td><?= h($w3programruns->dateEnd) ?></td>
                            <td><?= h($w3programruns->created) ?></td>
                            <td><?= h($w3programruns->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3programruns', 'action' => 'view', $w3programruns->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3programruns', 'action' => 'edit', $w3programruns->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3programruns', 'action' => 'delete', $w3programruns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programruns->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related W3user Addresses') ?></h4>
                <?php if (!empty($w3user->w3user_addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('W3user Id') ?></th>
                            <th><?= __('Prefered') ?></th>
                            <th><?= __('Num') ?></th>
                            <th><?= __('Street1') ?></th>
                            <th><?= __('Stree2') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('W3country Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3user->w3user_addresses as $w3userAddresses) : ?>
                        <tr>
                            <td><?= h($w3userAddresses->id) ?></td>
                            <td><?= h($w3userAddresses->w3user_id) ?></td>
                            <td><?= h($w3userAddresses->prefered) ?></td>
                            <td><?= h($w3userAddresses->num) ?></td>
                            <td><?= h($w3userAddresses->street1) ?></td>
                            <td><?= h($w3userAddresses->stree2) ?></td>
                            <td><?= h($w3userAddresses->city) ?></td>
                            <td><?= h($w3userAddresses->w3country_id) ?></td>
                            <td><?= h($w3userAddresses->created) ?></td>
                            <td><?= h($w3userAddresses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3userAddresses', 'action' => 'view', $w3userAddresses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3userAddresses', 'action' => 'edit', $w3userAddresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3userAddresses', 'action' => 'delete', $w3userAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userAddresses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related W3user Trackings') ?></h4>
                <?php if (!empty($w3user->w3user_trackings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('W3programrun Id') ?></th>
                            <th><?= __('W3program Id') ?></th>
                            <th><?= __('W3course Id') ?></th>
                            <th><?= __('W3class Id') ?></th>
                            <th><?= __('W3lesson Id') ?></th>
                            <th><?= __('W3chapter Id') ?></th>
                            <th><?= __('W3user Id') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3user->w3user_trackings as $w3userTrackings) : ?>
                        <tr>
                            <td><?= h($w3userTrackings->id) ?></td>
                            <td><?= h($w3userTrackings->w3programrun_id) ?></td>
                            <td><?= h($w3userTrackings->w3program_id) ?></td>
                            <td><?= h($w3userTrackings->w3course_id) ?></td>
                            <td><?= h($w3userTrackings->w3class_id) ?></td>
                            <td><?= h($w3userTrackings->w3lesson_id) ?></td>
                            <td><?= h($w3userTrackings->w3chapter_id) ?></td>
                            <td><?= h($w3userTrackings->w3user_id) ?></td>
                            <td><?= h($w3userTrackings->score) ?></td>
                            <td><?= h($w3userTrackings->created) ?></td>
                            <td><?= h($w3userTrackings->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3userTrackings', 'action' => 'view', $w3userTrackings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3userTrackings', 'action' => 'edit', $w3userTrackings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3userTrackings', 'action' => 'delete', $w3userTrackings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3userTrackings->id)]) ?>
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
