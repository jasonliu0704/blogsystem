<?php
//inclde class and create an object
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table($db);

//check editor form submitted
$editorSubmitted = isset($_POST['action']);
if($editorSubmitted){
  $buttonClicked = $_POST['action'];

  //check save button
  $save = ($buttonClicked === 'save');
  //get the entry id from the hidden input in editor form
  $id = $_POST['id'];
  //check whether insert a new entry
  $insertNewEntry = ($save and $id === '0');
  //was "delete" button clicked
  $deleteEntry = ($buttonClicked === 'delete');
  //check whether user update entry
  $updateEntry = ($save and $insertNewEntry === false);
  //get title and entry data from editor form
  $title = $_POST['title'];
  $entry = $_POST['entry'];

  //save,delete,update entry
  if($insertNewEntry){
    //save the new entry
    $savedEntryId = $entryTable->saveEntry($title, $entry);
  }else if($deleteEntry){
    $entryTable->deleteEntry($id);
  }else if($updateEntry){
    $entryTable->updateEntry($id, $title, $entry);
    $savedEntryId = $id;
  }
}

//get entry id from url
$entryRequested = isset($_GET['id']);
if($entryRequested){
  $id = $_GET['id'];
  //load model of existing entry
  $entryData = $entryTable->getEntry($id);
  $entryData->entry_id = $id;
  //show no message when entry is loaded initially
  $entryData->message = "";
  $entryData->legend = "Edit Your Post";
}

//an entry was saved or updated
$entrySaved = isset($savedEntryId);
if($entrySaved){
  $entryData = $entryTable->getEntry($savedEntryId);
  // display a confirmation message
  $entryData->message = "Entry was saved";
}

//load views
$editorOutput = include_once "views/admin/editor-html.php";
return $editorOutput;
