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

				//  para generar los menus desplegables
				var sub_menu = hermanos[1] ;
				var target = angular.element(sub_menu).toggleClass('collapse');

			});
		}
	};
});