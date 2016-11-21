<div class="garages index col-md-10 columns content">
    <h3>Garages</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('address_id') ?></th>
                <th><?= $this->Paginator->sort('tittle') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('add_date') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($garages as $garage): ?>
            <tr>
                <td><?= $this->Number->format($garage->id) ?></td>
                <td><?= $garage->has('user') ? $this->Html->link($garage->user->name, ['controller' => 'Users', 'action' => 'view', $garage->user->id]) : '' ?></td>
                <td><?= $garage->has('address') ? $this->Html->link($garage->address->id, ['controller' => 'Addresses', 'action' => 'view', $garage->address->id]) : '' ?></td>
                <td><?= h($garage->tittle) ?></td>
                <td><?= h($garage->description) ?></td>
                <td><?= h($garage->add_date) ?></td>
                <td><?= h($garage->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $garage->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $garage->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $garage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $garage->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
