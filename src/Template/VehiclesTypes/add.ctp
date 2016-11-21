<div class="vehiclesTypes form col-md-10 columns content">
    <?= $this->Form->create($vehiclesType) ?>
    <fieldset>
        <legend><?= 'Add Vehicles Type' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
