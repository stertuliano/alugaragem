<div class="paymentsTypes form col-md-8 columns content col-centered">
    <?= $this->Form->create($paymentsType) ?>
    <fieldset>
        <legend><?= 'Forma de Pagamento' ?></legend>
        <?php
            echo $this->Form->input('name', ["label" => "Nome:"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cancelar'), ["type" => "reset", "class" => "btn-danger"]) ?>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>
</div>
