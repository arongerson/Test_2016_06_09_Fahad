<div class="content" ng-controller="topFiveSalesmen">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>#</th><th>Sales Man</th><th>Total Sales</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="d in data">
                <td>{{$index + 1}}</td><td>{{d[0]}}</td><td>{{d[1]}}</td>
            </tr>
        </tbody>
    </table>
</div>

