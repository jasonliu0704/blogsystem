<?php
include_once "models/Register_Table.class.php";
//check whether user went logging in
if(isset($_POST['login'])){
  //check credential
  $email = $_POST['username'];
  $password = $_POST['password'];
  $registerTable = new Register_Table($db);
  if($registerTable->logAuth($email, $password)){
    $admin->login();
  }else{
    //log in fail
    $message = "Log in failed";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
}

//log user out
if(isset($_POST['logout'])){
  $admin->logout();
}

//choose which form to display depending on the logging statement
if($admin->checkLogin()){
  //dislay log out
  $logForm = include_once "views/admin/logout-form-html.php";
}else{
  //display log in
  $logForm = include_once "views/admin/login-form-html.php";
}
return $logForm;
