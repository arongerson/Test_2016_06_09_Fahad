/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var app = angular.module('account', ['ui.router']);

app.controller('mainController', function ($scope, $rootScope, $http, $location) {
    $http({
        url: 'get_id.php',
        method: "GET"
    }).then(function (response) {
        var res = response.data;
        $rootScope.sessionId = res.session;
    }, function (response) {
        //
    });
    $scope.logout = function () {
        $http({
            url: 'http://localhost:8080/logout?sessionid=' + $rootScope.sessionId,
            method: "GET",
            headers: {'Content-type': 'application/x-www-form-urlencoded'}
        }).then(function (response) {
        }, function (response) {
            // the feedback returned is not in json format so an exception is thrown thats why it is caught here
            window.location = "index.php";
        });
    };
    $scope.getClass = function (path) {
        return ($location.path().substr(0, path.length) === path) ? 'active' : '';
    };

    $scope.subject = '';
    $scope.details = '';
    $scope.showError = false;

    $scope.validateSubject = function () {
        if ($scope.subject.trim() === '') {
            return false;
        }
        return true;
    };

    $scope.validateDetails = function () {
        if ($scope.details.trim() === '') {
            return false;
        }
        return true;
    };

    $scope.sendSupport = function () {
        if ($scope.validateSupport()) {
            $scope.subject = '';
            $scope.details = '';
            $scope.error = 'request is sent successfully.';
            $scope.showError = true;
            $scope.feedback_color = '#00CC66';
            setTimeout(function() {
                $scope.close();
            }, 3000);
        } else {
            $scope.error = 'fill in all inputs';
            $scope.feedback_color = '#f00';
            $scope.showError = true;
        }
    };

    $scope.validateSupport = function () {
        var valid = $scope.validateSubject() && $scope.validateDetails();
        return valid;
    };
    
    $scope.close = function () {
        $('#support').css('opacity', 0);
    };
});

app.controller('totalSalesPerSalesman', function ($scope, $rootScope, $http) {
    $http({
        url: 'http://localhost:8080/salesmandata?sessionid=' + $rootScope.sessionId,
        method: "GET",
        headers: {'Content-type': 'application/x-www-form-urlencoded'}
    }).then(function (response) {
        //alert(response.data.data);
        var data = response.data.data;
        var graphData = [];
        for (var i = 0; i < data.length; i++) {
            graphData[i] = {"label": data[i][0], "value": data[i][1]};
        }
        FusionCharts.ready(function () {
            var revenueChart = new FusionCharts({
                type: 'pie2d',
                renderAt: 'chart-container',
                width: '100%',
                dataFormat: 'json',
                dataSource: {
                    "chart": {
                        "caption": "Sales Total per Sales Man",
                        "showPercentInTooltip": "0",
                        "decimals": "1",
                        "useDataPlotColorForLabels": "1",
                        "theme": "fint"
                    },
                    "data": graphData
                }
            }).render();
        });
    }, function (response) {
        // error message
    });
});

app.controller('totalSalesPerMonth', function ($scope, $rootScope, $http) {
    $(document).ready(function () {

        $http({
            url: 'http://localhost:8080/lastyeardata?sessionid=' + $rootScope.sessionId,
            method: "GET",
            headers: {'Content-type': 'application/x-www-form-urlencoded'}
        }).then(function (response) {
            var data = response.data.data;
            var graphData = [];
            for (var i = 0; i < data.length; i++) {
                graphData[i] = {"label": data[i][0], "value": data[i][1]};
            }
            FusionCharts.ready(function () {
                var revenueChart = new FusionCharts({
                    type: 'column2d',
                    renderAt: 'chart-container',
                    width: '100%',
                    dataFormat: 'json',
                    dataSource: {
                        "chart": {
                            "caption": "Total Sales per Month",
                            "xAxisName": "Month",
                            "paletteColors": "#0075c2",
                            "bgColor": "#ffffff",
                            "borderAlpha": "20",
                            "canvasBorderAlpha": "0",
                            "usePlotGradientColor": "0",
                            "plotBorderAlpha": "10",
                            "placevaluesInside": "1",
                            "rotatevalues": "1",
                            "valueFontColor": "#ffffff",
                            "showXAxisLine": "1",
                            "xAxisLineColor": "#999999",
                            "divlineColor": "#999999",
                            "divLineIsDashed": "1",
                            "showAlternateHGridColor": "0",
                            "subcaptionFontBold": "0",
                            "subcaptionFontSize": "14"
                        },
                        "data": graphData
                    }
                }).render();
            });
        });
    }, function (response) {
        // error message
    });
});

app.controller('topFiveSalesOrder', function ($scope, $rootScope, $http) {
    $http({
        url: 'http://localhost:8080/topsalesorders?sessionid=' + $rootScope.sessionId,
        method: "GET",
        headers: {'Content-type': 'application/x-www-form-urlencoded'}
    }).then(function (response) {
        $scope.data = response.data.data;
    }, function (response) {
        // error message
    });
});

app.controller('topFiveSalesmen', function ($scope, $rootScope, $http) {
    $http({
        url: 'http://localhost:8080/topsalesmen?sessionid=' + $rootScope.sessionId,
        method: "GET",
        headers: {'Content-type': 'application/x-www-form-urlencoded'}
    }).then(function (response) {
        $scope.data = response.data.data;
    }, function (response) {
        // error message
    });
});

app.config(function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/total-sales-per-salesman');
    $stateProvider.state('total-sales-per-salesman', {
        url: '/total-sales-per-salesman',
        templateUrl: 'partials/total_sales_per_salesman.php',
        controller: 'totalSalesPerSalesman'
    }).state('total-sales-per-month', {
        url: '/total-sales-per-month',
        templateUrl: 'partials/total_sales_per_month.php',
        controller: 'totalSalesPerMonth'
    }).state('top-5-sales-order', {
        url: '/top-5-sales-order',
        templateUrl: 'partials/top_5_sales_order.php',
        controller: 'topFiveSalesOrder'
    }).state('top-5-salesmen', {
        url: '/top-5-salesmen',
        templateUrl: 'partials/top_5_salesmen.php',
        controller: 'topFiveSalesmen'
    });
});

$(document).ready(function () {
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

    $('.link').click(function () {
        $('.link').css('color', '#fff');
        $(this).css('color', '#FF9900');
        
        $(this).css('z-index', 100);
    });

    $('.page').click(function () {
        var id = $(this).attr('data-bind');
        $('#' + id).css('opacity', '1');
        $('.modalDialog').css('z-index', -100);
        $('#' + id).css('z-index', 100);
    });

    $('.close').click(function () {
        var id = $(this).attr('data-bind');
        $('#' + id).css('opacity', '0');
        $('.modalDialog').css('z-index', -100);
    });
    
    $('.modalDialog').click(function() {
       // alert('');
    });

});





