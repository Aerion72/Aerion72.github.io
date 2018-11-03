<?php

//routing file
class engine{
	//property kontroler defaault
	protected $controller = "dashboard";
	protected $method = "index";
	protected $params = [];

	public function parseURL(){
		if(isset($_GET['url'])){

			//hapus '/' di akhir url
			 $url = rtrim($_GET['url'], "/");
			 $url = filter_var($url, FILTER_SANITIZE_URL); 
			 $url = explode('/', $url);
			 return $url;
		}
	}
	public function __construct(){
		//var_dump($_GET);		 

		$url = $this->parseURL();
		// var_dump($url);

		//pengecekan ada tidak file yg kita ketik di file wheels
		//controller
		if(file_exists('../engine/wheels/' . $url[0] . '.php' )){
			$this->controller = $url[0];
			unset ($url[0]);
			
		}

		require_once '../engine/wheels/' . $this->controller  . '.php';
		$this->controller = new $this->controller;

		//method
		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]); 
			}
		}

		//params
		if(!empty($url)){
			$this->params = array_values($url);
		}


		//jalan kan kontroler dan method , serta kirim params jika ada
		//call_user_func_array(function, param_arr)	
		call_user_func_array([$this->controller, $this->method], $this->params);	

	}



}


?>