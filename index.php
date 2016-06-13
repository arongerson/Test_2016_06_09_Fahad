<?php
// unset all sessions if any
session_start();
session_destroy();
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
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body ng-init="dynamic = 'partials/login.php'" ng-controller="mainController">
        <div>
            <div ng-include="dynamic"></div>
            <?php require './partials/footer.php'; ?>
        </div>
    </body>
</html>