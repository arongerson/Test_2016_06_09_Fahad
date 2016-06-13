<!DOCTYPE html>
<html ng-app="account">
    <head>
        <title>account</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/angular.min.js" type="text/javascript"></script>
        <script src="js/angular-resource.js" type="text/javascript"></script>
        <script src="js/angularjs_route.js" type="text/javascript"></script>
        <script src="js/ui-router.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body ng-init="dynamic = 'partials/login.php'">
        <div id="account" ng-controller="accountController">
            <div class="top">
                <div class="position">
                    <ul  class="account_menu">
                        <li><a href="#"><span>Sales Manager</span></a></li>
                        <li><a href="#"><span>Board</span></a></li>
                        <li>
                            <a href="#" ><span id="account-dropdown">{{ user}}</span></a>
                            <ul id="dropdown-menu">
                                <li><a href="#">Change Username</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="middle">
                <img src="img/pic.jpg" />
                <span>Welcome {{ user }}</span>
            </div>
            <div class="bottom">
                <div class="menu">
                    <ul>
                        <li>
                            <img src="img/charts.png"/><span>Charts</span>
                            <ul>
                                <li><a href="#"><img src="img/graph.jpg"/><span>Total Sales(@salesman)</span></a></li>
                                <li><a href="#"><img src="img/graph.jpg"/><span>Total Sales(per month)</span></a></li>
                                <li><a href="#"><img src="img/graph.jpg"/><span>Top 5 Sales Order</span></a></li>
                                <li><a href="#"><img src="img/graph.jpg"/><span>Top 5 Salesmen</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="data">
                    
                </div>
            </div>
            <div class="nav-link">
                <ul>
                    <li><a ng-href="#">Privacy Policy</a></li>
                    <li><a ng-href="#">Terms of Use</a></li>
                    <li><a ng-href="#">Support</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>