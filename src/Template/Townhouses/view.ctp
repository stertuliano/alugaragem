<div class="townhouses view col-lg-10 col-md-9">
    <h3><?= h($townhouse->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Address</th>
            <td><?= $townhouse->has('address') ? $this->Html->link($townhouse->address->id, ['controller' => 'Addresses', 'action' => 'view', $townhouse->address->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= h($townhouse->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($townhouse->id) ?></td>
        </tr>
    </table>
</div>
