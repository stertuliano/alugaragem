<div class="addresses form col-md-10 columns content">
    <?= $this->Form->create($address) ?>
    <fieldset>
        <legend><?= 'Edit Address' ?></legend>
        <?php
            echo $this->Form->input('city_id', ['options' => $cities]);
            echo $this->Form->input('address');
            echo $this->Form->input('number');
            echo $this->Form->input('complement');
            echo $this->Form->input('neighborhood');
            echo $this->Form->input('zipcode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
