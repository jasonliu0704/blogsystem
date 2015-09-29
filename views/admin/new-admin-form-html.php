<?php
if(isset($adminFormMessage) === false){
  $adminFormMessage = "";
}

return"
<form method='post' action'admin.php?page=users'>
  <fieldset>
    <legend>Create new admin user</legend>
    <label for='email'>e-mail</label>
    <input type='text' name='email' id='email' required/>
    <label for='username'>Username</label>
    <input type='text' name='username' id='username'required/>
    <label for='password'>password</label>
    <input type='password' name='password' id='password'required/>
    <input type='submit' value='create user' name='new-admin'/>
  </fieldset>
  <p id='admin-form-message'>$adminFormMessage</p>
</form>
";
