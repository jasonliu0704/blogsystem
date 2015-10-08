<?php
$entriesFound = isset($entries);
if($entriesFound === false){
  trigger_error('views/list-entries-html.php need $entries');
}

//entry page header
$entriesHTML = "
<header class='intro-header' style='background-image:url(img/Geisel_Library.jpg)'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1'>
                    <div class='site-heading'>
                        <h1>Triton Blog</h1>
                        <hr class='small'>
                        <span class='subheading'>Your Ultimate Personal Blog</span>
                    </div>
                </div>
            </div>
        </div>
 </header>";

//create a ul
$entriesHTML .= "<ul id='blog-entries'>";

//loop through all entries from database
while ($entry = $entries->fetchObject()) {
  $href = "index.php?page=blog&amp;id=$entry->entry_id";
  //create li for each entry
  $entriesHTML .= "
<li class='container'>
  	<div class='row'>
            <div class='col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1'>
                <div class='post-preview'>
                    <h2 class='post-title'>$entry->title</h2>
                    <h3 class='post-subtitle'>$entry->intro</h3>
                    <a href='$href'>Read More</a></p>
                </div>
            </div>
    </div>
 </li>
 <hr>
";
}
//end ul
$entriesHTML .= "</ul>";
return $entriesHTML;
