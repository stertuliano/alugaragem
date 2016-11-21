<div class="row">
<div class="periods index col-md-10 columns content">
    <h3>Periods</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('garage_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('start_time') ?></th>
                <th><?= $this->Paginator->sort('end_time') ?></th>
                <th><?= $this->Paginator->sort('available') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($periods as $period): ?>
            <tr>
                <td><?= $this->Number->format($period->id) ?></td>
                <td><?= $period->has('garage') ? $this->Html->link($period->garage->id, ['controller' => 'Garages', 'action' => 'view', $period->garage->id]) : '' ?></td>
                <td><?= h($period->name) ?></td>
                <td><?= h($period->start_time) ?></td>
                <td><?= h($period->end_time) ?></td>
                <td><?= h($period->available) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $period->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $period->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $period->id], ['confirm' => __('Are you sure you want to delete # {0}?', $period->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
