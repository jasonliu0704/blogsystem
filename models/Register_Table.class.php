<?php
//include parent class files
include_once "models/Table.class.php";
class Register_Table extends Table{

  public function createUser($username, $email, $password){
    //check email hasn;t been used
    $this->checkEmail($email);
    //insert with MD5 hash
    $sql = "INSERT INTO admin(email, password, username)
    VALUES(?, MD5(?), ?)";
    $data = array($email, $password, $username);
    $this->makeStatement($sql, $data);
  }

  private function checkEmail($email){
    //search the email in the table
    $sql = "SELECT email FROM admin WHERE email = ?";
    $data = array($email);
    $statement = $this->makeStatement($sql, $data);
    //check whether the email has been registered
    if($statement->rowCount() === 1){
      throw new Exception("Error:email:$email have already been registered.");
    }
  }

  public function logAuth($username, $password){
    $sql = "SELECT email FROM admin
            WHERE username = ? AND password = MD5(?)";
    $data = array($username, $password);
    $stateObject = $this->makeStatement($sql, $data);
    //check whether the object has exactly the same row
    if($stateObject->rowCount() === 1){
      $result = true;
    }else{
      $result = false;
    }
    return $result;
  }

}
