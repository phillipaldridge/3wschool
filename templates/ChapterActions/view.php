<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterAction $chapterAction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chapter Action'), ['action' => 'edit', $chapterAction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chapter Action'), ['action' => 'delete', $chapterAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterAction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chapter Actions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chapter Action'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterActions view content">
            <h3><?= h($chapterAction->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($chapterAction->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chapterAction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chapterAction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chapterAction->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chapterAction->content)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Chapter Paths') ?></h4>
                <?php if (!empty($chapterAction->chapter_paths)) : ?>
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
                        <?php foreach ($chapterAction->chapter_paths as $chapterPaths) : ?>
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
        </div>
    </div>
</div>
