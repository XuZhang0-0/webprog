/**
* @author Moshe
*/
var homepageApp = angular.module('homepageApp', ['ngRoute'])
	.config(function($routeProvider) {
	$routeProvider.
	when('/items', {
	templateUrl: 'list',
	controller: 'ItemListCtrl'
	}).
	when('/item/:id', {
	templateUrl: 'details',
	controller: 'ItemDetailCtrl'
	}).
	otherwise({
	redirectTo: '/items'
	});
});

homepageApp.controller('ItemListCtrl', function($scope, $http){
$http.get("?action=index&format=json")
.success(function (results) {
$scope.items = results.data;
});	

});

homepageApp.controller('ItemDetailCtrl', function($scope, $http, $routeParams){
$http.get("?action=index&format=json", {params: {id: $routeParams.id} })
.success(function (results) {
$scope.item = results.data;
});	

});