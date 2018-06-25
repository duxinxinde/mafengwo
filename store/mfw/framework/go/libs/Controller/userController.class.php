<?php 
Class UserController{
	function  getsession(){
		$model = initModel("LoginStatus");
		echo $model->sessionStatus();
	}
}
?>