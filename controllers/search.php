<?php
include_once "models/Blog_Entry_Table.class.php";
$blogTable = new Blog_Entry_Table($db);

$searchView = ""; //default view
if(isset($_POST['search-term'])){
  //get search term
  $searchTerm = $_POST['search-term'];

  //check whether search term is empty
  if(empty($searchTerm)){
    return "<h1>You haven't searched for anything yet!</h1>";
  }

  //get search object from table
  $searchData = $blogTable->searchEntry($searchTerm);
  //display search entry through search-results-html
  $searchView = include_once "views/search-results-html.php";
}
return $searchView;
