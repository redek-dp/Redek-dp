<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>dev-1.3</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <style>

    </style>
</head>

<body>


    <!--<div ng-app="myApp" ng-controller="myCtrl">


        <h1>{{myWelcome}}</h1>

    </div>


    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope, $http) {
            $http.get("welcome.htm").then(function(response) {
                $scope.myWelcome = response.data;
            });
        });

    </script>-->


    <!--<div ng-app="myApp" ng-controller="myCtrl">
        <h3>{{myUrl}}</h3>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope, $location) {
            $scope.myUrl = $location.absUrl();
        });

    </script>-->


    <div class="container">
        <div ng-app="myApp" ng-controller="customersCtrl">

            <ul class="list-group list-group-flush">
                <li ng-repeat="x in myData" class="list-group-item">
                    {{ x.Name + ', ' + x.Country + ', '+ x.City }}
                </li>
            </ul>

        </div>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http) {
            $http.get("customers.html").then(function(response) {
                $scope.myData = response.data.records;
            });
        });

    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
