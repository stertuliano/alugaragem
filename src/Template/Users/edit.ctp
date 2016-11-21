<div class="users form col-md-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= 'Edit User' ?></legend>
        <?php
            echo $this->Form->input('address_id', ['options' => $addresses, 'empty' => true]);
            echo $this->Form->input('role');
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('add_date');
            echo $this->Form->input('last_login_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
