<?php
//errro handling
//ini_set("display_errors", 1);
//error_reporting(E_ALL);

include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData-> title  = "PHP/MySQl blog";
$pageData->addCSS("css/blog.css");
$pageData->addCSS("css/img.css");
$pageData->addScript("js/lightbox.js");
$pageData->addScript("js/editor.js");
//load navigatio
//$pageData->content = include_once "views/admin/admin-navigation.php";

//establsh databse connection
$dbInfo = "mysql:host=localhost;dbname=simple_blog";
$dbUser = "root";
$dbPassword = "52@Mit74";
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


include_once "models/User.class.php";
$admin = new User();
//load the login controller, which will show the login form
$pageData->content = include_once "controllers/admin/login.php";

//add a new if statement
//show admin module only if user is logged in
if($admin->checkLogin()) {
	$pageData->content .= include_once "views/admin/admin-navigation.php";
	$navigationIsClicked = isset( $_GET['page'] );
	if ($navigationIsClicked ) {
		$controller = $_GET['page'];
	} else {
		$controller = "entries";
	}
	$pathToController = "controllers/admin/$controller.php";
	$pageData->content .= include_once $pathToController;
}


//show the page
$page = include_once "views/page.php";
echo $page;
