<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3courseType $w3courseType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3course Type'), ['action' => 'edit', $w3courseType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3course Type'), ['action' => 'delete', $w3courseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3courseType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3course Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3course Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3courseTypes view content">
            <h3><?= h($w3courseType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3courseType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3courseType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3courseType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3courseType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3courseType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related W3courses') ?></h4>
                <?php if (!empty($w3courseType->w3courses)) : ?>
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
                        <?php foreach ($w3courseType->w3courses as $w3courses) : ?>
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
        </div>
    </div>
</div>
