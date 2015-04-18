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
				console.log(sub_menu) ;



				 angular.element(sub_menu).removeClass('collapse');


				// quitar marco
				/*var padre = element.parent();
				var hermanos = padre.children();

				for (var i = 0; i < hermanos.length; i++) {
					var cssOld = hermanos[i].className;
					var cssNew = '';

					if (cssOld.search(css) > -1) {
						cssNew = cssOld.replace(css, '');
						hermanos[i].className = cssNew;
					}
				};*/

			});
		}
	};
});