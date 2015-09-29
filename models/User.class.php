<?php

class User {

  public function __construct(){
    session_start();
  }
  public function login(){
    $_SESSION['loggedin'] = true;
  }

  public function logout(){
    $_SESSION['loggedin'] = false;
  }

  public function checkLogin(){
    if(isset($_SESSION['loggedin'])){
      $out = $_SESSION['loggedin'];
    }else{
      $out = false;
    }
    return $out;
  }
}
