'use strict';
var myApp = angular.module('subMenu.directive', []);

myApp.directive('subMenu', function(){
	return{
		restrict: 'AE',
		link: function(scope, element, attrs){

			element.bind('click', function(){
				var css    = ' ' + attrs.selectedItem;

				var padre = element.parent();
				var hermanos = padre.children();

				console.log(padre) ;
				console.log(hermanos) ;

				 var sub_menu = hermanos[1] ;

				 angular.element(sub_menu).removeClass('collapse');

			});
		}
	};
});