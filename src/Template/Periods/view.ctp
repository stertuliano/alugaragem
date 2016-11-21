<div class="periods view col-lg-10 col-md-9">
    <h3><?= h($period->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Garage</th>
            <td><?= $period->has('garage') ? $this->Html->link($period->garage->id, ['controller' => 'Garages', 'action' => 'view', $period->garage->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= h($period->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($period->id) ?></td>
        </tr>
        <tr>
            <th>Start Time</th>
            <td><?= h($period->start_time) ?></tr>
        </tr>
        <tr>
            <th>End Time</th>
            <td><?= h($period->end_time) ?></tr>
        </tr>
        <tr>
            <th>Available</th>
            <td><?= $period->available ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
