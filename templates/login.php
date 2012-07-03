<br><br>
<form name="login" method="POST"><fieldset>
	<input type="hidden" name="action" value="login">
	<div class="title">Exsiting Users Login</div>
	<input type="hidden" name="referrer" value="<?=$_GET['referrer']?>">
	<div class="input_container"> 
    	<div class="input_title">Username:</div>
        <div class="field_container"><input type="text" name="username"  class="medium" value="<?=$email?>" style="margin: 0;"></div>
    </div>
    <div class="input_container"> 
    	<div class="input_title">Password:</div>
    	<div class="field_container"><input type="password" name="password" class="medium"  value="<?=$password?>" style="margin: 0;"></div>
    </div>
    <div class="buttons">
    	<div class="button_container"><input class="button green" name="submit" type="submit" value="Login" style="text-align:center !important;"></div>
    </div>
	<div class="forgot"><a href="<?=href('/reset-password')?>"><?=$strings['forgot_password']?></a></div>
	<div class="image_container" align="center">
		<img src="<?=href('images/global/secure_login.jpg')?>">
	</div>
</fieldset></form>
   