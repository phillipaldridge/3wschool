<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3chapterType $w3chapterType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3chapter Type'), ['action' => 'edit', $w3chapterType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3chapter Type'), ['action' => 'delete', $w3chapterType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapterType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3chapter Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3chapter Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3chapterTypes view content">
            <h3><?= h($w3chapterType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3chapterType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3chapterType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3chapterType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3chapterType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3chapterType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related W3chapters') ?></h4>
                <?php if (!empty($w3chapterType->w3chapters)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('W3lesson Id') ?></th>
                            <th><?= __('W3chapter Type Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Access') ?></th>
                            <th><?= __('UnitValue') ?></th>
                            <th><?= __('PassValue') ?></th>
                            <th><?= __('FailValue') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3chapterType->w3chapters as $w3chapters) : ?>
                        <tr>
                            <td><?= h($w3chapters->id) ?></td>
                            <td><?= h($w3chapters->w3lesson_id) ?></td>
                            <td><?= h($w3chapters->w3chapter_type_id) ?></td>
                            <td><?= h($w3chapters->reference) ?></td>
                            <td><?= h($w3chapters->name) ?></td>
                            <td><?= h($w3chapters->active) ?></td>
                            <td><?= h($w3chapters->position) ?></td>
                            <td><?= h($w3chapters->access) ?></td>
                            <td><?= h($w3chapters->unitValue) ?></td>
                            <td><?= h($w3chapters->passValue) ?></td>
                            <td><?= h($w3chapters->failValue) ?></td>
                            <td><?= h($w3chapters->created) ?></td>
                            <td><?= h($w3chapters->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3chapters', 'action' => 'view', $w3chapters->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3chapters', 'action' => 'edit', $w3chapters->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3chapters', 'action' => 'delete', $w3chapters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3chapters->id)]) ?>
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
