$(function(){

	$(window).load(function(){

		$("#logo-slide").fadeIn(1500);
		$('#portfolio-1').fadeIn(1000);
		$('#portfolio-2').fadeIn(1400);

		// hideLoader();

	});

	var timeout;

	var hideLoader = function(){

		setTimeout(newLoader,3000);

	}


	var newLoader = function(){

		document.getElementById("loader-onload").style.display = "none";
		document.getElementById("loaderText").style.display = "block";		

	}

	$(".hamburger-link").click(function(){

		$(".menu").toggle("slow");		

	});


});

var openNav = function(){

	document.getElementById("mySideNav").style.width = "250px";

}

var closeNav = function(){

	document.getElementById("mySideNav").style.width = "0";
}

// script.js

    // create the module and name it scotchApp
    // var myApp = angular.module('myApp', []);
    // var myApp = angular.module('myApp', ['ngRoute']);

    // create the controller and inject Angular's $scope
    // myApp.controller('mainController', function($scope) {

        // create a message to display in our view
    //     $scope.webtitle = 'SR | Frontend developer';
    // });

    //  myApp.controller('portfolioController', function($scope) {
    //     $scope.webtitle = 'SR | portfolio';
    // });

   

    // configure our routes
    // myApp.config(function($routeProvider,$locationProvider) {
    //     $routeProvider

            // route for the home page
            // .when('/', {
            //     templateUrl : 'home/home.php',
            //     controller  : 'mainController'
            // })

            // route for the about page
            // .when('/portfolio', {
            //     templateUrl : 'portfolio/portfolio.php',
            //     controller  : 'portfolioController'
            // });

            // use the HTML5 History API
    //     $locationProvider.html5Mode(true);
    // });
    

