<!DOCTYPE html>
<html ng-app="account">
    <head>
        <title>account</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/angular.min.js" type="text/javascript"></script>
        <script src="js/angular-resource.js" type="text/javascript"></script>
        <script src="js/angularjs_route.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body ng-controller="loginController">
        <div>
            <div id="header"><span class="first">Welcome to</span><span class="second"> Sales Manager</span></div>
            <div id="content">
                <div class="login-title">Please sign in</div>
                <div class="login-body">
                    <form name="login">
                        <div class="login-input">
                            <input type="text" name="username" value="" placeholder="username" ng-model="username"/>
                            <span class="login-error" ng-show="validateUsername() && login.username.$touched">{{ error_username}}</span>
                        </div>
                        <div class="login-input">
                            <input type="password" name="password"  placeholder="password" ng-model="password"/>
                            <span class="login-error" ng-show="validatePassword(password) && login.password.$touched" >{{ error_password}}</span>
                        </div>
                        <div class="login-button">
                            <input type="button" value="Login" ng-click="click()" 
                                   ng-disabled="validate()"/>
                        </div>
                        <div class="separator"></div>
                    </form>
                </div>
            </div>
            <div class="feedback"><img src="" alt="loading" ng-show="show_feedback()"/><span> {{ feedback }}</span></div>
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