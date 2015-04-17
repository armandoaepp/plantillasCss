<?php
	function loadModelFiles($file_name){
		$fullpath = './m_cuenta/htpp/model/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
		// echo $fullpath ;
	}

	function loadBeanFiles($file_name){
		$fullpath = './m_cuenta/htpp/bean/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	function loadControllerFiles($file_name){
		$fullpath = './m_cuenta/htpp/controller/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			require $fullpath;
		}
	}

	spl_autoload_register("loadModelFiles");
	spl_autoload_register("loadBeanFiles");
	spl_autoload_register("loadControllerFiles");

