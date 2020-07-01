<!DOCTYPE html>
<html>
<head>
	<title>Halaman Form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>

	<h3>Sign Up Form</h3>
	<form action="/welcome" method="post" id="userform">
		@csrf
		<label for="fname">First name:</label><br><br>
		<input type="text" id="fname" name="fname" required><br><br>
		<label for="lname">Last name:</label><br><br>
		<input type="text" id="lname" name="lname" required><br>

		<p>Gender:</p>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label><br>

		<p>Nationality:</p>
		<select id="nationality" name="nationality" form="userform">
			<option value="Indonesian">Indonesian</option>
			<option value="Singaporean">Singaporean</option>
			<option value="Malaysian">Malaysian</option>
			<option value="Australian">Australian</option>
		</select>

		<p>Language Spoken:</p>
		<input type="checkbox" name="language1" value="Indonesian">
		<label for="language2">Bahasa Indonesia</label><br>
		<input type="checkbox" name="language2" value="English">
		<label for="language2">English</label><br>
		<input type="checkbox" name="language3" value="Other">
		<label for="language3">Other</label><br>

		<p>Bio:</p>
		<textarea id="bio" name="bio" rows="10" cols="30" form="userform"></textarea><br>

		<input type="submit" name="submit" value="Sign Up">
	</form>

</body>
</html>