<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3classType $w3classType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3class Type'), ['action' => 'edit', $w3classType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3class Type'), ['action' => 'delete', $w3classType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3classType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3class Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3class Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3classTypes view content">
            <h3><?= h($w3classType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3classType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3classType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3classType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3classType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3classType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related W3classes') ?></h4>
                <?php if (!empty($w3classType->w3classes)) : ?>
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
                        <?php foreach ($w3classType->w3classes as $w3classes) : ?>
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
        </div>
    </div>
</div>
