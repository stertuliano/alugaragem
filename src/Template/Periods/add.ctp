<div class="periods form col-md-10 columns content">
    <?= $this->Form->create($period) ?>
    <fieldset>
        <legend><?= 'Add Period' ?></legend>
        <?php
            echo $this->Form->input('garage_id', ['options' => $garages, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('start_time');
            echo $this->Form->input('end_time');
            echo $this->Form->input('available');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
