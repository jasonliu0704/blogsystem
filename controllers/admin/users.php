<?php
include_once "models/Register_Table.class.php";

//when form submit, create new user
if(isset($_POST['new-admin'])){
  //create table
  $userTable = new Register_Table($db);
  //get user info from form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  try{
    $userTable->createUser($username, $email, $password);
    $adminFormMessage = "You have successfully registered!";
  }catch(Exception $e){
    $adminFormMessage = $e->getMessage();
  }
}

//display the registration form
$registerForm = include_once "views/admin/new-admin-form-html.php";
return $registerForm;
