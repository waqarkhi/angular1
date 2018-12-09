/* angular */
var app = angular.module("wixe", []);
app.controller('packCtrl', function ($scope, $http) {
	$http.get('temp/content/pack.json')
		 .then(function (response) {
			$scope.packs = response.data;
	});
});
app.controller('portfolioCtrl', function ($scope, $http) {
	$http.get('temp/content/portfolio.json')
		 .then(function (response) {
			$scope.portfolio = response.data;
	});
});
app.controller('skillsCtrl', function($scope, $http) {
	$http.get('temp/content/skills.json')
		 .then(function (response) {
		 	$scope.skills = response.data;
	});
});
app.controller('servicesCtrl', function($scope, $http) {
	$http.get('temp/content/services.json')
		 .then(function (response) {
		 	$scope.services = response.data;
	});
});