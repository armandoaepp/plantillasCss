angular.module('appAdmin', [
	'ui.router',
    'ui.bootstrap',
    'subMenu.directive',
])
.run(
  [          '$rootScope', '$state', '$stateParams',
    function ($rootScope,   $state,   $stateParams) {

    // It's very handy to add references to $state and $stateParams to the $rootScope
    // so that you can access them from any scope within your applications.For example,
    // <li ng-class="{ active: $state.includes('contacts.list') }"> will set the <li>
    // to active whenever 'contacts.list' or one of its decendents is active.
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
    }
  ]
)
.config(['$stateProvider', '$urlRouterProvider',
    function ($stateProvider,   $urlRouterProvider) {
            // Use $urlRouterProvider to configure any redirects (when) and invalid urls (otherwise).
            $urlRouterProvider.
                otherwise('/');

            $stateProvider
                .state('home',{
                    url: '/',
                    template: '<p class="lead">Welcome to the UI-Router Demo</p>' +
                    '<p>Use the menu above to navigate. ' +
                    'Pay attention to the <code>$state</code> and <code>$stateParams</code> values below.</p>' +
                    '<p>Click these links—<a href="#/c?id=1">Alice</a> or ' +
                    '<a href="#/user/42">Bob</a>—to see a url redirect in action.</p>'
                    // templateUrl: 'partials/home/home.html',
                    // controller: 'LoginCtrl'
                })

        }
    ]) ;
