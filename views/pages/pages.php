<?php
if (isset($_GET['module'])) {
	switch ($_GET['module']) {
		case "ctrl_home";
			include("module/home/ctrl/" . $_GET['module'] . ".php");
			break;
		case "ctrl_car";
			include("module/car/ctrl/" . $_GET['module'] . ".php");
			break;
		case "ctrl_exceptions";
			include("module/exceptions/ctrl/" . $_GET['module'] . ".php");
			break;
		case "ctrl_shop";
			include("module/shop/ctrl/" . $_GET['module'] . ".php");
			break;
		case "ctrl_login";
			include("module/login/ctrl/" . $_GET['module'] . ".php");
			exit;
		
			break;
		default;
			include("module/home/view/home.html");
			break;
	}
} else {
	include("module/home/view/home.html");
}
