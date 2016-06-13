<div id="header"><span class="first">Welcome to</span><span class="second"> Sales Manager</span></div>
<div id="content" ng-controller="loginController">
    <div class="login-title">Please sign in</div>
    <div class="login-body">
        <form name="login">
            <div class="login-input">
                <input type="text" name="username" value="" placeholder="username" ng-model="username"/>
                <span class="login-error" ng-show="!validateUsername() && login.username.$touched">{{ error_username}}</span>
            </div>
            <div class="login-input">
                <input type="password" name="password"  placeholder="password" ng-model="password"/>
                <span class="login-error" ng-show="!validatePassword() && login.password.$touched" >{{ error_password}}</span>
            </div>
            <div class="login-button">
                <input type="button" value="Login" ng-click="click()" style="{{ button_disabled_class}}"
                       ng-disabled="validate()"/>
            </div>
            <div class="feedback"><img src="img/default.svg" alt="loading" ng-show="showLoading"/><span ng-show="showFeedback()"> {{ feedback }}</span></div>
        </form>
    </div>
</div>
