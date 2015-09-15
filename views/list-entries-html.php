<?php
$entriesFound = isset($entries);
if($entriesFound === false){
  trigger_error('views/list-entries-html.php need $entries');
}

//create a ul
$entriesHTML = "<ul id='blog-entries'>";

//loop through all entries from database
while ($entry = $entries->fetchObject()) {
  $href = "index.php?page=blog&amp;id=$entry->entry_id";
  //create li for each entry
  $entriesHTML .= "<li>
                    <h2>$entry->title</h2>
                    <div>$entry->intro
                      <p><a href='$href'>Read More</a></p>
                    </div>
                  </li> ";
}
//end ul
$entriesHTML .= "</ul>";
return $entriesHTML;
