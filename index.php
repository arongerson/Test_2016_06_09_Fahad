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
    <body ng-controller="loginController">
        <div>
            <div ui-view></div>
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