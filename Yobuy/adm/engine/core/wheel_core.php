<?php


class wheel{
	public function screen($screen, $data = []){
		require_once '../engine/screen/' . $screen . '.php';
	}

	public function model($model){
		require_once '../engine/model/' . $model .'.php' ;
		return new $model;
	}

}