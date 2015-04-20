<?php
	function loadModelFiles($file_name){
		$fullpath = '../../model/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			echo $fullpath."<br> " ;
			require $fullpath;
		}
	}

	function loadBeanFiles($file_name){
		$fullpath = '../../bean/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			echo $fullpath."<br> " ;
			require $fullpath;
		}
	}

	function loadControllerFiles($file_name){
		$fullpath = '../../controller/' . $file_name . '.php' ;
		if( file_exists($fullpath) ) {
			echo $fullpath."<br> " ;
			require $fullpath;
		}
	}

	spl_autoload_register("loadModelFiles");
	spl_autoload_register("loadBeanFiles");
	spl_autoload_register("loadControllerFiles");

