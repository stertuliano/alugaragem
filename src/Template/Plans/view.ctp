<div class="plans view col-lg-10 col-md-9">
    <h3><?= h($plan->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($plan->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($plan->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Garages']) ?></h4>
        <?php if (!empty($plan->garages)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>User Id</th>
                <th>Address Id</th>
                <th>Vehicle Type Id</th>
                <th>Plan Id</th>
                <th>Payment Type Id</th>
                <th>Tittle</th>
                <th>Description</th>
                <th>Add Date</th>
                <th>Status</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plan->garages as $garages): ?>
            <tr>
                <td><?= h($garages->id) ?></td>
                <td><?= h($garages->user_id) ?></td>
                <td><?= h($garages->address_id) ?></td>
                <td><?= h($garages->vehicle_type_id) ?></td>
                <td><?= h($garages->plan_id) ?></td>
                <td><?= h($garages->payment_type_id) ?></td>
                <td><?= h($garages->tittle) ?></td>
                <td><?= h($garages->description) ?></td>
                <td><?= h($garages->add_date) ?></td>
                <td><?= h($garages->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Garages', 'action' => 'view', $garages->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Garages', 'action' => 'edit', $garages->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Garages', 'action' => 'delete', $garages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $garages->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
