<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter $chapter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chapter'), ['action' => 'edit', $chapter->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chapter'), ['action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chapters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chapter'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapters view content">
            <h3><?= h($chapter->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lesson') ?></th>
                    <td><?= $chapter->has('lesson') ? $this->Html->link($chapter->lesson->name, ['controller' => 'Lessons', 'action' => 'view', $chapter->lesson->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Chapter Type') ?></th>
                    <td><?= $chapter->has('chapter_type') ? $this->Html->link($chapter->chapter_type->name, ['controller' => 'ChapterTypes', 'action' => 'view', $chapter->chapter_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Chapter Access') ?></th>
                    <td><?= $chapter->has('chapter_access') ? $this->Html->link($chapter->chapter_access->name, ['controller' => 'ChapterAccesses', 'action' => 'view', $chapter->chapter_access->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($chapter->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($chapter->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chapter->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= $this->Number->format($chapter->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitValue') ?></th>
                    <td><?= $this->Number->format($chapter->unitValue) ?></td>
                </tr>
                <tr>
                    <th><?= __('PassValue') ?></th>
                    <td><?= $chapter->passValue === null ? '' : $this->Number->format($chapter->passValue) ?></td>
                </tr>
                <tr>
                    <th><?= __('FailValue') ?></th>
                    <td><?= $chapter->failValue === null ? '' : $this->Number->format($chapter->failValue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chapter->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chapter->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $chapter->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Chapter Contents') ?></h4>
                <?php if (!empty($chapter->chapter_contents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Chapter Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Content') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($chapter->chapter_contents as $chapterContents) : ?>
                        <tr>
                            <td><?= h($chapterContents->id) ?></td>
                            <td><?= h($chapterContents->chapter_id) ?></td>
                            <td><?= h($chapterContents->active) ?></td>
                            <td><?= h($chapterContents->name) ?></td>
                            <td><?= h($chapterContents->content) ?></td>
                            <td><?= h($chapterContents->created) ?></td>
                            <td><?= h($chapterContents->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ChapterContents', 'action' => 'view', $chapterContents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ChapterContents', 'action' => 'edit', $chapterContents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChapterContents', 'action' => 'delete', $chapterContents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterContents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Chapter Paths') ?></h4>
                <?php if (!empty($chapter->chapter_paths)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Chapter Id') ?></th>
                            <th><?= __('Chapter Target Id') ?></th>
                            <th><?= __('Chapter Rule Id') ?></th>
                            <th><?= __('Chapter Action Id') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($chapter->chapter_paths as $chapterPaths) : ?>
                        <tr>
                            <td><?= h($chapterPaths->id) ?></td>
                            <td><?= h($chapterPaths->chapter_id) ?></td>
                            <td><?= h($chapterPaths->chapter_target_id) ?></td>
                            <td><?= h($chapterPaths->chapter_rule_id) ?></td>
                            <td><?= h($chapterPaths->chapter_action_id) ?></td>
                            <td><?= h($chapterPaths->score) ?></td>
                            <td><?= h($chapterPaths->created) ?></td>
                            <td><?= h($chapterPaths->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ChapterPaths', 'action' => 'view', $chapterPaths->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ChapterPaths', 'action' => 'edit', $chapterPaths->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChapterPaths', 'action' => 'delete', $chapterPaths->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterPaths->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Trackings') ?></h4>
                <?php if (!empty($chapter->user_trackings)) : ?>
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
                        <?php foreach ($chapter->user_trackings as $userTrackings) : ?>
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
