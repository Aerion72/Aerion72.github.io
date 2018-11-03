<?php


class category_model{

	public function __construct(){
		$this->db = new database;
	}
	public function getCategory(){
		$this->db->query(" 
				SELECT 
					c1.mode AS mode,
					cp.cat_id AS cat_id,
					GROUP_CONCAT(cd1.cat_name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') AS name,
					c1.parent_id, c1.sort_order
					FROM categories_path cp
					LEFT JOIN categories c1 
									ON (cp.cat_id = c1.cat_id) 
					lEFT JOIN categories c2 
									ON (cp.path_id = c2.cat_id) 
					LEFT JOIN categories_desc cd1 
									ON (cp.path_id = cd1.cat_id) 
					LEFT JOIN categories_desc cd2 
								   ON (cp.cat_id = cd2.cat_id)  
					GROUP BY cp.cat_id ORDER BY cd1.cat_name,c1.sort_order
			");
		// $this->db->bind('cat_id', $cat_id);
		return $this->db->resultset();
	}

	// public function addCategory(){
	// 	$this->db-query("
	// 			SELECT

	// 		");
	// }



}

?>