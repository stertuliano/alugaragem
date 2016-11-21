<div class="paymentsTypes view col-lg-10 col-md-9">
    <h3><?= h($paymentsType->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($paymentsType->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($paymentsType->id) ?></td>
        </tr>
    </table>
</div>
