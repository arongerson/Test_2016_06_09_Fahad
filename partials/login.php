<div id="header"><span class="first">Welcome to</span><span class="second"> Sales Manager</span></div>
<div id="content">
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
            <div class="separator"></div>
        </form>
    </div>
</div>
<div class="feedback"><img src="" alt="loading" ng-show="showLoading()"/><span> {{ feedback}}</span></div>