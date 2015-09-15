<?php
//include Comment_Table class
include_once "models/Comment_Table.class.php";
//set up comment table object
$commentTable = new Comment_Table($db);



//save new input comment through comment form
//check input, take care of empty entry case
if(!empty($_POST['new-comment'])){
  //save input
  $commentTable->saveComment($_POST['entry-id'], $_POST['user-name'], $_POST['new-comment']);
  unset($_POST['submit-form']);
}

//display comment form
$comment = include_once "views/comment-form-html.php";
//display input comment
$commentObject = $commentTable->getAllById($entryId);

//display cooments at the end
$comment .= include_once "views/comments-html.php";

return $comment;
