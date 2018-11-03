<?php


class categories extends wheel{
	//default
	// public function page(){}

	public function index(){
		$data['active'] = 'active';
		$data['judul'] = 'Categories List';
		$data['cat'] = $this->model('category_model')->getCategory();
		$this->screen('temp/upper', $data); 
		$this->screen('categories/index', $data); 
		$this->screen('temp/bottom', $data);


	}
	public function create(){
		
		$data['active'] = 'active';
		$data['judul'] = 'Create New categories';
		$this->screen('temp/upper', $data); 
		$this->screen('categories/addcat'); 
		$this->screen('temp/bottom'); 
	}

	// public function page(){
	// 	echo "hai anjing";
	// }

}

?>
