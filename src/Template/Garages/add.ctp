<div class="garages form col-md-10 columns content">
    <?= $this->Form->create($garage) ?>
    <fieldset>
        <legend><?= 'Add Garage' ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'required' => true]);
            echo $this->Form->input('address_id', ['options' => $addresses]);
            echo $this->Form->input('vehicle_type_id', ['options' => $vehiclesTypes]);
            echo $this->Form->input('plan_id', ['options' => $plans]);
            echo $this->Form->input('payment_type_id', ['options' => $paymentsTypes]);
            echo $this->Form->input('tittle');
            echo $this->Form->input('description');
            echo $this->Form->input('add_date');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>