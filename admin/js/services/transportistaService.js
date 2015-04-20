'use strinct';

app.service('transportistaService',[ '$http', '$location', function($http, $location){
	this.getUsuariosByEstado = function(data){
        var url_ = 'http/public/transportista/IndexTransportista.php',
            params_ = data;
        return $http.post(url_, params_);
	};

}]);