<div class="content" ng-controller="topFiveSalesOrder">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>#</th><th>Order Number</th><th>User Name</th><th>Value</th><th>Qty</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="d in data">
                <td>{{$index + 1}}</td><td>{{d.orderNum}}</td><td>{{d.userName}}</td><td>{{d.value}}</td><td>{{d.qty}}</td>
            </tr>
        </tbody>
    </table>
</div>

