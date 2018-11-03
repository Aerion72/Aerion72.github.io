<?php

class users extends wheel {
		public function index(){
			$data['judul'] = 'User';
			$this->screen('temp/upper', $data); 
			$this->screen('users/index'); 
			$this->screen('temp/bottom');
		}
}


?>