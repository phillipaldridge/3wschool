<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3program $w3program
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3program'), ['action' => 'edit', $w3program->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3program'), ['action' => 'delete', $w3program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3program->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3programs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3program'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3programs view content">
            <h3><?= h($w3program->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3program Type') ?></th>
                    <td><?= $w3program->has('w3program_type') ? $this->Html->link($w3program->w3program_type->name, ['controller' => 'W3programTypes', 'action' => 'view', $w3program->w3program_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($w3program->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3program->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3program->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Units Needed') ?></th>
                    <td><?= $w3program->total_units_needed === null ? '' : $this->Number->format($w3program->total_units_needed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3program->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3program->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3program->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related W3courses') ?></h4>
                <?php if (!empty($w3program->w3courses)) : ?>
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
                        <?php foreach ($w3program->w3courses as $w3courses) : ?>
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
                <h4><?= __('Related W3programruns') ?></h4>
                <?php if (!empty($w3program->w3programruns)) : ?>
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
                        <?php foreach ($w3program->w3programruns as $w3programruns) : ?>
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
                <h4><?= __('Related W3user Trackings') ?></h4>
                <?php if (!empty($w3program->w3user_trackings)) : ?>
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
                        <?php foreach ($w3program->w3user_trackings as $w3userTrackings) : ?>
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
