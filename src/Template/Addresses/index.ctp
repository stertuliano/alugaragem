<div class="row">
<div class="addresses index col-md-10 columns content">
    <h3>Addresses</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('city_id') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('number') ?></th>
                <th><?= $this->Paginator->sort('complement') ?></th>
                <th><?= $this->Paginator->sort('neighborhood') ?></th>
                <th><?= $this->Paginator->sort('zipcode') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($addresses as $address): ?>
            <tr>
                <td><?= $this->Number->format($address->id) ?></td>
                <td><?= $address->has('city') ? $this->Html->link($address->city->name, ['controller' => 'Cities', 'action' => 'view', $address->city->id]) : '' ?></td>
                <td><?= h($address->address) ?></td>
                <td><?= $this->Number->format($address->number) ?></td>
                <td><?= h($address->complement) ?></td>
                <td><?= h($address->neighborhood) ?></td>
                <td><?= h($address->zipcode) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $address->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>
