<?php

$idIsFound = isset($entryid);

if($idIsFound){
  trigger_error('views/comments-html.php needs a $entryId');
}


return "
<form action='index.php?page=blog&amp;id=$entryId' method='post' id='comment-form'>
  <input  type='hidden' name='entry-id' value='$entryId' />
  <label>Your name</label>
  <input type='text' name='user-name' />
  <label>Your comment</label>
  <textarea name='new-comment'></textarea>
  <input type='submit' name='submit-form' value='post!' />
</form>";
