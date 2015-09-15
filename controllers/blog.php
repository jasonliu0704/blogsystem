<?php
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);

//read more reponse
$isEntryClicked = isset($_GET['id']);
if($isEntryClicked){
  $entryId =  $_GET['id'];
  $entryData = $entryTable->getEntry($entryId);
  $blogOutput = include_once "views/entry-html.php";

  //load the comments
  $blogOutput .= include_once "controllers/comments.php";
}else{
  //list all entries
  $entries = $entryTable->getAllEntries();
  $blogOutput = include_once "views/list-entries-html.php";
}


//commment out test
//$oneEntry = $entries->fetchObject();
//$test = print_r($oneEntry, true);

//load view
return $blogOutput;
