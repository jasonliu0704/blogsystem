
<?php
if(isset($uploadMessage) === false){
  $uploadMessage = "Upload a new image";
}

//declare a variable to hold HTML for all images
$imageHTML = "<h1>Images</h1>";
$imageHTML .= "<dl id='images'>";
$folder = "img";
$filesInFolder = new DirectoryIterator($folder);
//loop through all file in img folder
while($filesInFolder->valid()){
  $file = $filesInFolder->current();
  $filename = $file->getFilename();
  $src = "$folder/$filename";
  $fileInfo = new Finfo(FILEINFO_MIME_TYPE);
  $mimeType = $fileInfo->file($src);
  //if the file is jpeg
  if($mimeType === 'image/jpeg'){
    //display image and its src
    $href = "admin.php?page=images&amp;image-delete=$src";
    $imageHTML .= "<dt><img src='$src' class='dt-images'/></dt>
                   <dd>Source: $src <a href='$href'>delete</a></dd>";
  }
  $filesInFolder->next();
}
//end the output imagesHtml
$imageHTML .= "</dl>";

return "
    <form method='post' action='admin.php?page=images'
      enctype='multipart/form-data'>
    <p>$uploadMessage</p>
    <input type='file' name='image-data' accept='image/jpeg' />
    <input type='submit' name='new-image' value='upload' />
    </form>
    <div>
      $imageHTML;
    </div>
    ";
