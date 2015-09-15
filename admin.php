<?php
//errro handling
ini_set("display_errors", 1);
error_reporting(E_ALL);

include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData-> title  = "PHP/MySQl blog";
$pageData->addCSS("css/blog.css");
$pageData->addScript("js/editor.js");
//load navigatio
$pageData->content = include_once "views/admin/admin-navigation.php";


//establsh databse connection
$dbInfo = "mysql:host=localhost;dbname=simple_blog";
$dbUser = "root";
$dbPassword = "52@Mit74";
$db = new PDO( $dbInfo, $dbUser, $dbPassword );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

//allocate to branch controller for user input
$navigationIsClicked = isset($_GET['page']);
if($navigationIsClicked){
	//load corresponding controller
	$contrl = $_GET['page'];
}else{
	//load default controller
	$contrl = "entries";
}
//load the controller
$pageData->content .= include_once "controllers/admin/$contrl.php";

//show the page
$page = include_once "views/page.php";
echo $page;
