<div class="row">
<div class="paymentsTypes index col-md-12 columns content">
    <h3>Formas de pagamaneto</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', 'Código') ?></th>
                <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paymentsTypes as $paymentsType): ?>
            <tr>
                <td><?= $this->Number->format($paymentsType->id) ?></td>
                <td><?= h($paymentsType->name) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $paymentsType->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $paymentsType->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $paymentsType->id], ['confirm' => __('Tem certeza uqe deseja excluir a forma de pagamaneto "' . $paymentsType->name . '"?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('Anterior'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('Próximo') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} resuldados de
         {{count}} no total')) ?></p>
        </div>
    </center>
</div>
</div>
