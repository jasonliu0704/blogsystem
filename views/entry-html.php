<?php
//check if the required data is available
$entryDataFound = isset($entryData);
if($entryDataFound === false){
  trigger_error('views/entry-html.php needs a $entryData object');
}
//add header
$postHTML = "<header class='intro-header' style='background-image: url(img/post-bg.jpg)'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1'>
                    <div class='post-heading'>
                        <h1>$entryData->title</h1>
                        
                        <span class='meta'>Posted by <a href='#'>User</a> on $entryData->date_created</span>
                    </div>
                </div>
            </div>
        </div>
    </header>";

//add post text
$postHTML .= "
<article>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1'>
            $entryData->entry_text
            </div>
        </div>
    </div>
</article>";

return $postHTML;