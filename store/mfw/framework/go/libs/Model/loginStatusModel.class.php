<?php
Class LoginStatusModel{
	function sessionStatus(){
		return isset($_SESSION["status"])?"1":"0";
	}
}

?>