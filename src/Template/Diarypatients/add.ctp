<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Diarypatients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Budgets'), ['controller' => 'Budgets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Budget'), ['controller' => 'Budgets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diarypatients form large-9 medium-8 columns content">
    <?= $this->Form->create($diarypatient) ?>
    <fieldset>
        <legend><?= __('Add Diarypatient') ?></legend>
        <?php
            echo $this->Form->input('budget_id', ['options' => $budgets]);
            echo $this->Form->input('activity_date', ['empty' => true]);
            echo $this->Form->input('short_description_activity');
            echo $this->Form->input('detailed_activity_description');
            echo $this->Form->input('activity_date_finish', ['empty' => true]);
            echo $this->Form->input('activity_result');
            echo $this->Form->input('detailed_result_activity');
            echo $this->Form->input('responsible_user');
            echo $this->Form->input('deleted_record');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
