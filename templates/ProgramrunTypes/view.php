<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProgramrunType $programrunType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Programrun Type'), ['action' => 'edit', $programrunType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Programrun Type'), ['action' => 'delete', $programrunType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programrunType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Programrun Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Programrun Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="programrunTypes view content">
            <h3><?= h($programrunType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($programrunType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($programrunType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($programrunType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($programrunType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Slug') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($programrunType->slug)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Programruns') ?></h4>
                <?php if (!empty($programrunType->programruns)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Program Id') ?></th>
                            <th><?= __('Programrun Type Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('DateStart') ?></th>
                            <th><?= __('DateEnd') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($programrunType->programruns as $programruns) : ?>
                        <tr>
                            <td><?= h($programruns->id) ?></td>
                            <td><?= h($programruns->active) ?></td>
                            <td><?= h($programruns->program_id) ?></td>
                            <td><?= h($programruns->programrun_type_id) ?></td>
                            <td><?= h($programruns->name) ?></td>
                            <td><?= h($programruns->reference) ?></td>
                            <td><?= h($programruns->dateStart) ?></td>
                            <td><?= h($programruns->dateEnd) ?></td>
                            <td><?= h($programruns->created) ?></td>
                            <td><?= h($programruns->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Programruns', 'action' => 'view', $programruns->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Programruns', 'action' => 'edit', $programruns->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programruns', 'action' => 'delete', $programruns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programruns->id)]) ?>
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
