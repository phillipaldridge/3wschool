<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChapterAccess $chapterAccess
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chapter Access'), ['action' => 'edit', $chapterAccess->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chapter Access'), ['action' => 'delete', $chapterAccess->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapterAccess->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chapter Accesses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chapter Access'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapterAccesses view content">
            <h3><?= h($chapterAccess->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($chapterAccess->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chapterAccess->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chapterAccess->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chapterAccess->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chapterAccess->content)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Chapters') ?></h4>
                <?php if (!empty($chapterAccess->chapters)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Lesson Id') ?></th>
                            <th><?= __('Chapter Type Id') ?></th>
                            <th><?= __('Chapter Access Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('UnitValue') ?></th>
                            <th><?= __('PassValue') ?></th>
                            <th><?= __('FailValue') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($chapterAccess->chapters as $chapters) : ?>
                        <tr>
                            <td><?= h($chapters->id) ?></td>
                            <td><?= h($chapters->lesson_id) ?></td>
                            <td><?= h($chapters->chapter_type_id) ?></td>
                            <td><?= h($chapters->chapter_access_id) ?></td>
                            <td><?= h($chapters->reference) ?></td>
                            <td><?= h($chapters->name) ?></td>
                            <td><?= h($chapters->active) ?></td>
                            <td><?= h($chapters->position) ?></td>
                            <td><?= h($chapters->unitValue) ?></td>
                            <td><?= h($chapters->passValue) ?></td>
                            <td><?= h($chapters->failValue) ?></td>
                            <td><?= h($chapters->created) ?></td>
                            <td><?= h($chapters->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Chapters', 'action' => 'view', $chapters->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Chapters', 'action' => 'edit', $chapters->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chapters', 'action' => 'delete', $chapters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapters->id)]) ?>
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
