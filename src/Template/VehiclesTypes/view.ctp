<div class="vehiclesTypes view col-lg-10 col-md-9">
    <h3><?= h($vehiclesType->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($vehiclesType->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($vehiclesType->id) ?></td>
        </tr>
    </table>
</div>
