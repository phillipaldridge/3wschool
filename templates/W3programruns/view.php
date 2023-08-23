<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3programrun $w3programrun
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3programrun'), ['action' => 'edit', $w3programrun->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3programrun'), ['action' => 'delete', $w3programrun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programrun->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3programruns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3programrun'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3programruns view content">
            <h3><?= h($w3programrun->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3program') ?></th>
                    <td><?= $w3programrun->has('w3program') ? $this->Html->link($w3programrun->w3program->name, ['controller' => 'W3programs', 'action' => 'view', $w3programrun->w3program->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3programrun Type') ?></th>
                    <td><?= $w3programrun->has('w3programrun_type') ? $this->Html->link($w3programrun->w3programrun_type->name, ['controller' => 'W3programrunTypes', 'action' => 'view', $w3programrun->w3programrun_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3programrun->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($w3programrun->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3programrun->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateStart') ?></th>
                    <td><?= h($w3programrun->dateStart) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateEnd') ?></th>
                    <td><?= h($w3programrun->dateEnd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3programrun->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3programrun->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3programrun->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related W3users') ?></h4>
                <?php if (!empty($w3programrun->w3users)) : ?>
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
                        <?php foreach ($w3programrun->w3users as $w3users) : ?>
                        <tr>
                            <td><?= h($w3users->id) ?></td>
                            <td><?= h($w3users->active) ?></td>
                            <td><?= h($w3users->level) ?></td>
                            <td><?= h($w3users->name) ?></td>
                            <td><?= h($w3users->password) ?></td>
                            <td><?= h($w3users->email) ?></td>
                            <td><?= h($w3users->revisioncount) ?></td>
                            <td><?= h($w3users->changescount) ?></td>
                            <td><?= h($w3users->signuptime) ?></td>
                            <td><?= h($w3users->lastpassword) ?></td>
                            <td><?= h($w3users->lastlogin) ?></td>
                            <td><?= h($w3users->created) ?></td>
                            <td><?= h($w3users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3users', 'action' => 'view', $w3users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3users', 'action' => 'edit', $w3users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3users', 'action' => 'delete', $w3users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related W3user Trackings') ?></h4>
                <?php if (!empty($w3programrun->w3user_trackings)) : ?>
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
                        <?php foreach ($w3programrun->w3user_trackings as $w3userTrackings) : ?>
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
