<?php
//error handle
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MYSQL blog";
$pageData->addCSS("css/blog.css");

$dbInfo = "mysql:host=localhost;dbname=simple_blog";
$dbUser = "root";
$dbPassword = "52@Mit74";
$db = new PDO($dbInfo, $dbUser, $dbPassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//deal with search form
$pageRequested = isset($_GET['page']);
$controller = "blog";   //default controller
if($pageRequested){
  //check whether user submit search form
  if($_GET['page'] === "search"){
    //load search controller
    $controller = "search";
  }
}
//load search controller
$pageData->content .= include_once "views/search-form-html.php";

//choose which controller to display
$pageData->content .= include_once "controllers/$controller.php";

//include page
$page = include_once "views/page.php";
echo $page;
