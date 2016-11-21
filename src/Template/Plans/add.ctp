<div class="plans form col-md-10 columns content">
    <?= $this->Form->create($plan) ?>
    <fieldset>
        <legend><?= 'Add Plan' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
