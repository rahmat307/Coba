<?php
		$page = (isset($_GET['page']))? $_GET['page'] : "expro";
		switch ($page) {
			case 'artikel': include "artikel.php"; break;
			case 'gallery': include "gallery.php"; break;
			case 'gbook' : include "gbook.php"; break;
			case 'about' : include "about.php"; break;
			case 'pemimpin': include "pemimpin.php";break;
			case 'kahfi': include "kahfi.php";break;
			case 'proses': include "proses.php";break;
			case 'expro' :
			default : include 'expro307.php';	
		}
?>