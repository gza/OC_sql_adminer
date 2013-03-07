<form id="adminer" action="#" method="post">
<fieldset class="personalblock">
<legend>
<strong>SqlAdminder</strong>
</legend>
User Visibility, don't select All user until you know what you do (Major Security RISK): (Param doesn't work for now)
	<select id="user" name="user">
		<option value="0">Admin Only</option>
		<option value="1">All users</option>
	</select>
	</fieldset>
<input type="hidden" name="requesttoken" value="<?php echo $_['requesttoken'] ?>" id="requesttoken">
</form>
