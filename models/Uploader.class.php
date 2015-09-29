<?php

class Uploader {
  private $filename;
  private $fileData;
  private $destination;
  //private $fileError;

  function __construct($key){
    //var_dump($_FILES);
    //print($_FILES[$key]['name']);
    $this->filename = $_FILES[$key]['name'];
    $this->fileData = $_FILES[$key]['tmp_name'];
    $this->fileError = $_FILES[$key]['error'];
  }

  public function saveIn($folder){
    $this->destination = $folder;
  }

  public function save($fileName){

    if($this->readyToUpload()){
      $name = "$this->destination/$fileName";
      //print("fileData\n".$this->fileData);
      $succes = move_uploaded_file($this->fileData, $name);
      //var_dump($succes, $name, $this->filename, $this->fileData);
    }else{
      //display detailed error message
      //$errorMessage = $this->errorToMessage($this->fileError);
      //trigger_error("cannot write to $this->destination and the error message is: $errorMessage");
      $exc = new Exception($this->errorMessage);
      throw $exc;
    }
  }

  private function readyToUpload(){
    $folderIsWriteAble = is_writable( $this->destination );
    if( $folderIsWriteAble === false ){
      //provide a meaningful error message
      $this->errorMessage = "Error: destination folder is ";
      $this->errorMessage .= "not writable, change permissions";
      //indicate that code is NOT ready to upload file
      $canUpload = false;
    }else {
      //assume no other errors - indicate we're ready to upload
      $canUpload = true;
    }
    return $canUpload;
  }


}
