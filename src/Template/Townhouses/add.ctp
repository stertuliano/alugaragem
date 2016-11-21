<div class="townhouses form col-md-10 columns content">
    <?= $this->Form->create($townhouse) ?>
    <fieldset>
        <legend><?= 'Add Townhouse' ?></legend>
        <?php
            echo $this->Form->input('address_id', ['options' => $addresses]);
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
