/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var app = angular.module('account', ['ui.router']).controller('loginController', function ($scope, $http, $rootScope) {
    //alert('hiiii');
    var init = function () {
        $scope.error_username = '';
        $scope.username = '';
        $scope.error_password = '';
        $scope.password = '';
        $scope.button_disabled_class = 'background: #ccc;';
        $scope.feedback = '';
        $scope.showLoading = false;
    };
    init();
    $scope.showFeedback = function () {
        if ($scope.feedback === '') {
            return false;
        }
        return true;
    };
    $scope.validateUsername = function () {
        if ($scope.username.trim() === '') {
            $scope.error_username = "username is required";
            return false;
        }
        return true;
    };
    $scope.validatePassword = function () {
        if ($scope.password.trim() === '') {
            $scope.error_password = "password is required";
            return false;
        }
        return true;
    };
    $scope.validate = function () {
        var valid = $scope.validateUsername() && $scope.validatePassword();
        if (valid) {
            $scope.button_disabled_class = '';
        } else {
            $scope.button_disabled_class = 'background: #ccc;';
        }
        return !valid;
    };
    $scope.click = function () {
        $scope.showLoading = true;
        $http({
            url: 'http://localhost:8080/login?username=Gerardo&password=Gerardo',
            method: "GET",
            data: $.param({'username': $scope.username, 'password': $scope.password}),
            headers: {'Content-type': 'application/x-www-form-urlencoded'}
        }).then(function (response) {
            var res = response.data;
            if (res.loginSucceeded) {
                // $rootScope.dynamic = 'partials/account.php';
                window.location = "account.php";
            } else {
                $scope.feedback = "Incorrect username and/or password";
                $scope.showLoading = false;
            }
        }, function (response) {
            $scope.remote_feedback = 'oooops, the server can not be reached, check your internet connection';
        });
    };
}).controller('accountController', function($scope, $rootScope, $http) {
    dropdown();
    $scope.user = 'Username';
});

app.config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/login');
    $stateProvider.state('login', {
        url: '/login',
        templateUrl: 'partials/login.php',
        controller: 'loginController'
    }).state("otherwise", {
        url: '/login',
        templateUrl: 'partials/login.php',
        controller: 'loginController'
    });
});

$(document).ready(function () {
    
});

function dropdown() {
    var dropHoverBgColor;
    var dropBgColor = $('#account-dropdown').css('background-color');
    //alert(dropBgColor);
    $('#account-dropdown').hover(function () {
        $('#dropdown-menu').show();
        dropHoverBgColor = $('#dropdown-menu').css('background-color');
        $('#account-dropdown').css('background-color', dropHoverBgColor);
    }, function () {
        hide_dropdown = setTimeout(function () {
            $('#dropdown-menu').hide();
            $('#account-dropdown').css('background-color', dropBgColor);
        }, 10);
    });
    $('#dropdown-menu').hover(function () {
        clearTimeout(hide_dropdown);
        $('#account-dropdown').css('background-color', dropHoverBgColor);
    }, function () {
        $('#account-dropdown').css('background-color', dropBgColor);
        $('#dropdown-menu').hide();
    });
}


