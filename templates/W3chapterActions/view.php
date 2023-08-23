<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterAction $w3chapterAction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3chapter Action'), ['action' => 'edit', $w3chapterAction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3chapter Action'), ['action' => 'delete', $w3chapterAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterAction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3chapter Actions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3chapter Action'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterActions view content">
            <h3><?= h($w3chapterAction->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3chapterAction->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3chapterAction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3chapterAction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3chapterAction->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3chapterAction->content)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related W3chapter Paths') ?></h4>
                <?php if (!empty($w3chapterAction->w3chapter_paths)) : ?>
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
                        <?php foreach ($w3chapterAction->w3chapter_paths as $w3chapterPaths) : ?>
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
        </div>
    </div>
</div>
