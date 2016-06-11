/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var app = angular.module('account', ['ui.router']).controller('loginController', function ($scope, $http) {
    alert('hiiii');
    var init = function () {
        $scope.error_username = '';
        $scope.username = '';
        $scope.error_password = '';
        $scope.password = '';
        $scope.button_disabled_class = 'background: #ccc;';
        $scope.feedback = '';
    };
    init();
    $scope.showFeedback = function (feedback) {
        if (feedback === '') {
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
        alert('hello');
//        $http({
//            url: 'school/new_school',
//            method: "POST",
//            data: $.param({'username': $scope.validUsername, 'password': $scope.validPassword,
//                'address': $scope.validAddress, 'category': $scope.validCategory}),
//            headers: {'Content-type': 'application/x-www-form-urlencoded'}
//        }).then(function (response) {
//            if (response.data.success == '1') {
//                $scope.remote_feedback = 'the school has been added.';
//                // clear the fields
//                init();
//            } else {
//                $scope.remote_feedback = response.data.message;
//            }
//        }, function (response) {
//            $scope.remote_feedback = 'oooops, the server can not be reached, check your internet connection';
//        });
    };
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


