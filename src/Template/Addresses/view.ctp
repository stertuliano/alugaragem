<div class="addresses view col-lg-10 col-md-9">
    <h3><?= h($address->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>City</th>
            <td><?= $address->has('city') ? $this->Html->link($address->city->name, ['controller' => 'Cities', 'action' => 'view', $address->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?= h($address->address) ?></td>
        </tr>
        <tr>
            <th>Complement</th>
            <td><?= h($address->complement) ?></td>
        </tr>
        <tr>
            <th>Neighborhood</th>
            <td><?= h($address->neighborhood) ?></td>
        </tr>
        <tr>
            <th>Zipcode</th>
            <td><?= h($address->zipcode) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($address->id) ?></td>
        </tr>
        <tr>
            <th>'Number</th>
            <td><?= $this->Number->format($address->number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Garages']) ?></h4>
        <?php if (!empty($address->garages)): ?>
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
            <?php foreach ($address->garages as $garages): ?>
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
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($address->users)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Address Id</th>
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Add Date</th>
                <th>Last Login Date</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($address->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->address_id) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->add_date) ?></td>
                <td><?= h($users->last_login_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
