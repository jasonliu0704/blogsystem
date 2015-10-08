<?php

$searchDataFound = isset($searchData);
if($searchDataFound === false){
  trigger_error('views/search-results-html.php needs $searchData');
}
$searchHTML = "<section id='search'><p>
              You searched for <em>$searchTerm</em></p><ul>";

//iterator over the search result object to display result entry
while($searchResult = $searchData->fetchObject()){
  $href = "index.php?page=blog&amp;id=$searchResult->entry_id";
  $searchHTML .= "<li><a href='$href'>$searchResult->title</li>";
}

$searchHTML .= "</ul></section>";
return $searchHTML;
