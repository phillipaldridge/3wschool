<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3course $w3course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3course'), ['action' => 'edit', $w3course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3course'), ['action' => 'delete', $w3course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3course->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3courses view content">
            <h3><?= h($w3course->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3course Type') ?></th>
                    <td><?= $w3course->has('w3course_type') ? $this->Html->link($w3course->w3course_type->name, ['controller' => 'W3courseTypes', 'action' => 'view', $w3course->w3course_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($w3course->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3course->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitValue') ?></th>
                    <td><?= $this->Number->format($w3course->unitValue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3course->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3course->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3course->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related W3classes') ?></h4>
                <?php if (!empty($w3course->w3classes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('W3class Type Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3course->w3classes as $w3classes) : ?>
                        <tr>
                            <td><?= h($w3classes->id) ?></td>
                            <td><?= h($w3classes->reference) ?></td>
                            <td><?= h($w3classes->name) ?></td>
                            <td><?= h($w3classes->w3class_type_id) ?></td>
                            <td><?= h($w3classes->active) ?></td>
                            <td><?= h($w3classes->position) ?></td>
                            <td><?= h($w3classes->created) ?></td>
                            <td><?= h($w3classes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3classes', 'action' => 'view', $w3classes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3classes', 'action' => 'edit', $w3classes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3classes', 'action' => 'delete', $w3classes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3classes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related W3programs') ?></h4>
                <?php if (!empty($w3course->w3programs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('W3program Type Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Total Units Needed') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3course->w3programs as $w3programs) : ?>
                        <tr>
                            <td><?= h($w3programs->id) ?></td>
                            <td><?= h($w3programs->active) ?></td>
                            <td><?= h($w3programs->w3program_type_id) ?></td>
                            <td><?= h($w3programs->reference) ?></td>
                            <td><?= h($w3programs->name) ?></td>
                            <td><?= h($w3programs->total_units_needed) ?></td>
                            <td><?= h($w3programs->created) ?></td>
                            <td><?= h($w3programs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3programs', 'action' => 'view', $w3programs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3programs', 'action' => 'edit', $w3programs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3programs', 'action' => 'delete', $w3programs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related W3user Trackings') ?></h4>
                <?php if (!empty($w3course->w3user_trackings)) : ?>
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
                        <?php foreach ($w3course->w3user_trackings as $w3userTrackings) : ?>
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
