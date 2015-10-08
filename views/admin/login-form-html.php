<?php

return
"
<div class='container'>
	<form action='admin.php' method='post' class='form-signin'>
  	<h1 class='form-signin-heading'>Login to your account</h1>
  	<label for='username' class='sr-only'>username</label>
  	<input type='text' name='username' class='form-control' placeholder='username' required autofocus/>
  	<label for='password' class='sr-only'>password</label>
  	<input type='password' class='form-control' placeholder='password' name='password' required/>
  	
  	<div class='checkbox'>
          <label>
            <input type='checkbox' value='remember-me'> Remember me
          </label>
    </div>
    <button class='btn btn-lg btn-primary btn-block' type='submit' name='login' value='login'>
    Sign in</button>
	</form>
</div>
";
