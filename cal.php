<?php
include_once "tadtools_header.php";

class My97DatePicker{

	//建構函數
	function My97DatePicker(){
	
	}

	//產生月曆
	function render(){
    global $xoTheme;

    if($xoTheme){
      $xoTheme->addScript('modules/tadtools/My97DatePicker/WdatePicker.php');
    }else{
  		$cal="<script type='text/javascript' src='".TADTOOLS_URL."/My97DatePicker/WdatePicker.php'></script>";
      return $cal;
    }
  }
}
?>
