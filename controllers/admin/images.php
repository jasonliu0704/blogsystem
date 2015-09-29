<?php
//incllude uploader class
include_once "models/Uploader.class.php";

//when use choose to delete a image
$imageDelete = isset($_GET['image-delete']);
if($imageDelete){
  echo "delete";
  unlink($_GET['image-delete']);
}
//when image submitted
$imageSubmitted = isset($_FILES['image-data']);
if($imageSubmitted){
  //save and set default rename name
  $fileName = $_FILES['image-data']['name'];

  //TODO: use AJAX to check duplicate photo to avoid overwritting

  /*
  //same file name check and resolve
  if(file_exists("img/$fileName")){
    //same file name exists, ask user to rename the upload file
    $renameForm =  include "views/admin/file-rename-html.php";
    return $renameForm;
  }*/


  //create Uploader
  $uploader = new Uploader('image-data');

  //choose where to save
  $uploader->saveIn("img");
  try{
    //check file upload exception
    include_once "models/FileUploadException.class.php";
    if($_FILES['image-data']['error'] === UPLOAD_ERR_OK){
      //no file upload err
      $uploader->save($fileName);
      $uploadOutput = "file should have been uploaded";
    }else{
      throw new FileUploadException($_FILES['image-data']['error']);
    }
  }catch(Exception $e){
    $uploadOutput = $e->getMessage();
  }
  return $uploadOutput;
}

$imageManagerHTML = include_once("views/admin/images-html.php");
return $imageManagerHTML;
