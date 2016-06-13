<?php
session_start();
$username = filter_input(INPUT_GET, 'user');
$session_id = filter_input(INPUT_GET, 'session_id');
if ($username) {
    $_SESSION['user'] = $username;
    $_SESSION['session_id'] = $session_id;
} else if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} else {
    header("Location: login.php");
    exit(0);
}
?>
<!DOCTYPE html>
<html ng-app="account">
    <head>
        <title>account</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/angular.min.js" type="text/javascript"></script>
        <script src="js/angular-resource.js" type="text/javascript"></script>
        <script src="js/angularjs_route.js" type="text/javascript"></script>
        <script src="js/ui-router.js" type="text/javascript"></script>
        <script src="js/fusioncharts.js" type="text/javascript"></script>
        <script src="js/fusioncharts.charts.js" type="text/javascript"></script>
        <script src="js/account.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body ng-controller="mainController">
        <div id="account">
            <div class="top">
                <img src="img/logo.png"/>
                <div class="position">
                    <ul  class="account_menu">
                        <li><a href="#"><span>Sales Manager</span></a></li>
                        <li><a href="#"><span>Board</span></a></li>
                        <li>
                            <a href="#" ><span id="account-dropdown"><?php echo $username; ?></span></a>
                            <ul id="dropdown-menu">
                                <li><a href="#">Change Username</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#" ng-click="logout()">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="middle">
                <img src="img/pic.jpg" />
                <span>Welcome <?php echo $username; ?></span>
            </div>
            <div class="bottom">
                <div class="menu">
                    <ul>
                        <li>
                            <img src="img/charts.png"/><span>Charts</span>
                            <ul>
                                <li><a class="link" style="color: #FF9900;" ui-sref="total-sales-per-salesman"><img src="img/graph.jpg"/><span>Total Sales(@salesman)</span></a></li>
                                <li><a class="link" ui-sref="total-sales-per-month"><img src="img/graph.jpg"/><span>Total Sales(per month)</span></a></li>
                                <li><a class="link" ui-sref="top-5-sales-order"><img src="img/graph.jpg"/><span>Top 5 Sales Order</span></a></li>
                                <li><a class="link" ui-sref="top-5-salesmen"><img src="img/graph.jpg"/><span>Top 5 Salesmen</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="data" ui-view></div>
            </div>
            <?php require './partials/footer.php'; ?>
        </div>
    </body>
</html>