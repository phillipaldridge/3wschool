<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3class $w3class
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3class'), ['action' => 'edit', $w3class->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3class'), ['action' => 'delete', $w3class->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3class->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3class'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3classes view content">
            <h3><?= h($w3class->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($w3class->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3class->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('W3class Type') ?></th>
                    <td><?= $w3class->has('w3class_type') ? $this->Html->link($w3class->w3class_type->name, ['controller' => 'W3classTypes', 'action' => 'view', $w3class->w3class_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3class->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($w3class->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3class->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3class->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3class->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related W3lessons') ?></h4>
                <?php if (!empty($w3class->w3lessons)) : ?>
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
                        <?php foreach ($w3class->w3lessons as $w3lessons) : ?>
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
            <div class="related">
                <h4><?= __('Related W3courses') ?></h4>
                <?php if (!empty($w3class->w3courses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('W3course Type Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('UnitValue') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3class->w3courses as $w3courses) : ?>
                        <tr>
                            <td><?= h($w3courses->id) ?></td>
                            <td><?= h($w3courses->w3course_type_id) ?></td>
                            <td><?= h($w3courses->active) ?></td>
                            <td><?= h($w3courses->reference) ?></td>
                            <td><?= h($w3courses->name) ?></td>
                            <td><?= h($w3courses->unitValue) ?></td>
                            <td><?= h($w3courses->created) ?></td>
                            <td><?= h($w3courses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3courses', 'action' => 'view', $w3courses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3courses', 'action' => 'edit', $w3courses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3courses', 'action' => 'delete', $w3courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3courses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related W3user Trackings') ?></h4>
                <?php if (!empty($w3class->w3user_trackings)) : ?>
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
                        <?php foreach ($w3class->w3user_trackings as $w3userTrackings) : ?>
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
