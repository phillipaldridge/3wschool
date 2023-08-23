<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3programType $w3programType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3program Type'), ['action' => 'edit', $w3programType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3program Type'), ['action' => 'delete', $w3programType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3program Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3program Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3programTypes view content">
            <h3><?= h($w3programType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3programType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3programType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3programType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3programType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3programType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related W3programs') ?></h4>
                <?php if (!empty($w3programType->w3programs)) : ?>
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
                        <?php foreach ($w3programType->w3programs as $w3programs) : ?>
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
        </div>
    </div>
</div>
