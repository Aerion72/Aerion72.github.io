<?php


class manufactures extends wheel{
	public function index(){
		$data['judul'] = 'Manufactures';
		$this->screen('temp/upper', $data); 
		$this->screen('manufactures/index'); 
		$this->screen('temp/bottom');
	}
}

?>