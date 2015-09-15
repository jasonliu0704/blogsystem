<?php

//check whether comment set
$commentsFound = isset($commentObject);
if($commentsFound === false){
  trigger_error('views/comments-html.php needs $commentObject');
}

//formate output html string
$commentsHTML = "<ul id='comments'>";
//count how many row in databse
$row_count = 0;
//iterate through all rows from database
while($eachComment = $commentObject->fetchObject()){
  //use counter to check how many row in database
  $row_count ++;
  //add comment to the list
  $commentsHTML .= "<li>$eachComment->author wrote:
                    <p>$eachComment->txt</p>
                    <br>
                    time:
                    <p>$eachComment->date</p>
                    </li>";
}

//if no comment exists, ask user to write first comment
if($row_count === 0){
  $commentsHTML .= "<li>Be the first person to write a comment for this post!</li>";
}
//close html output string
$commentsHTML .= "</ul>";
return $commentsHTML;
