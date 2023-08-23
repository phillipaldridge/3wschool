<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapter $w3chapter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3chapter'), ['action' => 'edit', $w3chapter->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3chapter'), ['action' => 'delete', $w3chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapter->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3chapters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3chapter'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapters view content">
            <h3><?= h($w3chapter->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('W3lesson') ?></th>
                    <td><?= $w3chapter->has('w3lesson') ? $this->Html->link($w3chapter->w3lesson->name, ['controller' => 'W3lessons', 'action' => 'view', $w3chapter->w3lesson->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3chapter Type') ?></th>
                    <td><?= $w3chapter->has('w3chapter_type') ? $this->Html->link($w3chapter->w3chapter_type->name, ['controller' => 'W3chapterTypes', 'action' => 'view', $w3chapter->w3chapter_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('W3chapter Access') ?></th>
                    <td><?= $w3chapter->has('w3chapter_access') ? $this->Html->link($w3chapter->w3chapter_access->name, ['controller' => 'W3chapterAccesses', 'action' => 'view', $w3chapter->w3chapter_access->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($w3chapter->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3chapter->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Access') ?></th>
                    <td><?= h($w3chapter->access) ?></td>
                </tr>
                <tr>
                    <th><?= __('W3chapter Content') ?></th>
                    <td><?= $w3chapter->has('w3chapter_content') ? $this->Html->link($w3chapter->w3chapter_content->name, ['controller' => 'W3chapterContents', 'action' => 'view', $w3chapter->w3chapter_content->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3chapter->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($w3chapter->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitValue') ?></th>
                    <td><?= $this->Number->format($w3chapter->unitValue) ?></td>
                </tr>
                <tr>
                    <th><?= __('PassValue') ?></th>
                    <td><?= $w3chapter->passValue === null ? '' : $this->Number->format($w3chapter->passValue) ?></td>
                </tr>
                <tr>
                    <th><?= __('FailValue') ?></th>
                    <td><?= $w3chapter->failValue === null ? '' : $this->Number->format($w3chapter->failValue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3chapter->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3chapter->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $w3chapter->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related W3chapter Paths') ?></h4>
                <?php if (!empty($w3chapter->w3chapter_paths)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('W3chapter Id') ?></th>
                            <th><?= __('W3chapter2 Id') ?></th>
                            <th><?= __('W3chapter Rule Id') ?></th>
                            <th><?= __('W3chapter Action Id') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3chapter->w3chapter_paths as $w3chapterPaths) : ?>
                        <tr>
                            <td><?= h($w3chapterPaths->id) ?></td>
                            <td><?= h($w3chapterPaths->w3chapter_id) ?></td>
                            <td><?= h($w3chapterPaths->w3chapter2_id) ?></td>
                            <td><?= h($w3chapterPaths->w3chapter_rule_id) ?></td>
                            <td><?= h($w3chapterPaths->w3chapter_action_id) ?></td>
                            <td><?= h($w3chapterPaths->score) ?></td>
                            <td><?= h($w3chapterPaths->created) ?></td>
                            <td><?= h($w3chapterPaths->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3chapterPaths', 'action' => 'view', $w3chapterPaths->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3chapterPaths', 'action' => 'edit', $w3chapterPaths->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3chapterPaths', 'action' => 'delete', $w3chapterPaths->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterPaths->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related W3user Trackings') ?></h4>
                <?php if (!empty($w3chapter->w3user_trackings)) : ?>
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
                        <?php foreach ($w3chapter->w3user_trackings as $w3userTrackings) : ?>
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
