<?php 
	
	class controller {

		public function model($model){
			require_once "./mvc/model/".$model.".php";
		
			return $model;
		}
		public function view($view,$params = []){
			require_once "./mvc/view/".$view.".php";
			
		}
	}
 ?>