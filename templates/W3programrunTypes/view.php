<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\W3programrunType $w3programrunType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit W3programrun Type'), ['action' => 'edit', $w3programrunType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete W3programrun Type'), ['action' => 'delete', $w3programrunType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programrunType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List W3programrun Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New W3programrun Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="w3programrunTypes view content">
            <h3><?= h($w3programrunType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($w3programrunType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($w3programrunType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($w3programrunType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($w3programrunType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($w3programrunType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related W3programruns') ?></h4>
                <?php if (!empty($w3programrunType->w3programruns)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('W3program Id') ?></th>
                            <th><?= __('W3programrun Type Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('DateStart') ?></th>
                            <th><?= __('DateEnd') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($w3programrunType->w3programruns as $w3programruns) : ?>
                        <tr>
                            <td><?= h($w3programruns->id) ?></td>
                            <td><?= h($w3programruns->active) ?></td>
                            <td><?= h($w3programruns->w3program_id) ?></td>
                            <td><?= h($w3programruns->w3programrun_type_id) ?></td>
                            <td><?= h($w3programruns->name) ?></td>
                            <td><?= h($w3programruns->reference) ?></td>
                            <td><?= h($w3programruns->dateStart) ?></td>
                            <td><?= h($w3programruns->dateEnd) ?></td>
                            <td><?= h($w3programruns->created) ?></td>
                            <td><?= h($w3programruns->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'W3programruns', 'action' => 'view', $w3programruns->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'W3programruns', 'action' => 'edit', $w3programruns->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'W3programruns', 'action' => 'delete', $w3programruns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $w3programruns->id)]) ?>
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
