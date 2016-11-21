<div class="garages view col-lg-10 col-md-9">
    <h3><?= h($garage->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>User</th>
            <td><?= $garage->has('user') ? $this->Html->link($garage->user->name, ['controller' => 'Users', 'action' => 'view', $garage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?= $garage->has('address') ? $this->Html->link($garage->address->id, ['controller' => 'Addresses', 'action' => 'view', $garage->address->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Tittle</th>
            <td><?= h($garage->tittle) ?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?= h($garage->description) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($garage->id) ?></td>
        </tr>
        <tr>
            <th>Add Date</th>
            <td><?= h($garage->add_date) ?></tr>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= $garage->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Garages Towhouses']) ?></h4>
        <?php if (!empty($garage->garages_towhouses)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Garage Id</th>
                <th>Towhouse Id</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($garage->garages_towhouses as $garagesTowhouses): ?>
            <tr>
                <td><?= h($garagesTowhouses->garage_id) ?></td>
                <td><?= h($garagesTowhouses->towhouse_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GaragesTowhouses', 'action' => 'view', $garagesTowhouses->]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'GaragesTowhouses', 'action' => 'edit', $garagesTowhouses->]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GaragesTowhouses', 'action' => 'delete', $garagesTowhouses->], ['confirm' => __('Are you sure you want to delete # {0}?', $garagesTowhouses->)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Periods']) ?></h4>
        <?php if (!empty($garage->periods)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Garage Id</th>
                <th>Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Available</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($garage->periods as $periods): ?>
            <tr>
                <td><?= h($periods->id) ?></td>
                <td><?= h($periods->garage_id) ?></td>
                <td><?= h($periods->name) ?></td>
                <td><?= h($periods->start_time) ?></td>
                <td><?= h($periods->end_time) ?></td>
                <td><?= h($periods->available) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Periods', 'action' => 'view', $periods->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Periods', 'action' => 'edit', $periods->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Periods', 'action' => 'delete', $periods->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periods->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
