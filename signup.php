<!DOCTYPE html>

<?php include("top.html"); ?>
<form action="signup-submit.php" method="post">
	<fieldset>
		Name: <input type="text" name="name" class="name" size="16"><br>
		Gender: <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female" checked> Female <br> <!-- might have issues with the name -->
		Age: <input type="text" name="age" id="age" maxlength="2" size="6"><br>
		Personality type: <input type="text" name="type" id="type" size="6" maxlength="4"><br>
		<select name="OS">
		  <option value="windows" selected>Windows</option>
		  <option value="mac">Mac OS X</option>
		  <option value="linux">Linux</option>
		</select> <br>
		Seeking age: <input type="text" name="minAge" maxlength="2" size="6"> to <input type="text" name="maxAge" maxlength="2" size="6"> <br>
		<input type="submit" id="submit" value="Sign Up">
	</fieldset>
</form>
<?php include("bottom.html"); ?>