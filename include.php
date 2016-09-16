<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$page=$_GET['page'];
switch($page){
	case 'home':
		include ("./home.php");
		break;

	case 'about':
		include ("./about.php");
		break;

	case 'rules':
		include("./rulesbuy.php");
		break;

	case 'gallery':
		include ("./gallery.php");
		break;

	case 'contact':
		include ("./contact.php");
		break;

	default:
		include ("./home.php");
}
?>