<?php
//wheels / controller

class dashboard extends wheel{
	//method default
	public function index(){

		$data['judul'] = 'Dashboard';
		$this->screen('temp/upper', $data); 
		$this->screen('dashboard/index'); 
		$this->screen('temp/bottom'); 
	}

	
}
?>