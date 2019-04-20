
var gcdBooking = angular.module('gcdBooking', ['ui.router']);

gcdBooking.config(function($stateProvider, $urlRouterProvider){
	 $urlRouterProvider.otherwise('/home');

	//when user logs in, the first state they will see
		$stateProvider
		.state('home', {
				url: '/home',
				templateUrl: 'views/home.html',
				
			})

		 // nested states 
        // each of these sections will have their own view
        // url will be nested (/form/profile)
        .state('home.login', {
            url: '/login',
            templateUrl: 'views/login.html'
        })

        .state('home.signup', {
            url: '/signup',
            templateUrl: 'views/signup.html'
        })

		.state('about', {
				url: '/about',
				templateUrl: 'views/about.html'		
				
			})

		.state('contact', {
				url: '/contact',
				templateUrl: 'views/contact.html'		
				
			})

		.state('login', {
				url: '/login',
				templateUrl: 'views/login.html',
				controller: 'loginController'
				
			})

		.state('signup', {
				url: '/signup',
				templateUrl: 'views/signup.html',
				controller: 'signupController'
				
			})

		.state('profile', {
				url: '/profile',
				templateUrl: 'views/profile.html',
				controller: 'profile'
				
			})

		.state('bookRoom', {
				url: '/bookRoom',
				templateUrl: 'views/bookRoom.html',
				controller: 'bookRoom'
				
			})


		.state('viewBookings', {
				url: '/viewBookings',
				templateUrl: 'views/viewBookings.html',
				controller: 'viewBookings'
				
			})

		.state('editBookings', {
				url: '/editBookings',
				templateUrl: 'views/editBookings.html',
				controller: 'editBookings'
				
			})

		.state('settings', {
				url: '/settings',
				templateUrl: 'views/settings.html',
				controller: 'settings'
				
			})



		
	})



