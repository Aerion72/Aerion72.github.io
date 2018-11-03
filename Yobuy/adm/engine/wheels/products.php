<?php
class products extends wheel{
	public function index(){
		$data['judul'] = 'Products';
		$this->screen('temp/upper', $data); 
		$this->screen('products/index'); 
		$this->screen('temp/bottom'); 
	}
} 

?>