<div class="paymentsTypes form col-md-10 columns content">
    <?= $this->Form->create($paymentsType) ?>
    <fieldset>
        <legend><?= 'Edit Payments Type' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
