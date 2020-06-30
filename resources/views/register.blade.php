<!DOCTYPE html>
<html>
<head>
	<title> Kontak Sekolah Koding </title>
	<meta charset="UTF-8">
</head>
<body>

	<form action="/welcome" method="POST">
	@csrf
	<!-- bagian awal, isinya tag heading -->
	<div>
		<h1> Buat Account Baru! </h1>
		<h3> Sign Up Form </h3>
	</div>

	<!-- membuat form nama-->
	<div>
		<label for="nama_user">First Name:</label>
		<br><br>
		<input type="text" name="first_name" value="" id="nama_user">
		<br><br>
		<label for="nama_user">Last Name:</label>
		<br><br>
		<input type="text" name="last_name" value="" id="nama_user">
		<br><br>
	</div>

	

	<!-- membuat form gender -->
	<div>
		<label>Gender</label>
		<br>
		<input type="radio" name="gender"> Male
		<br>
		<input type="radio" name="gender"> Female
		<br>
		<input type="radio" name="gender"> Other
		<br><br>
	</div>

	<!-- membuat form nasionality -->
	<div>
		<label>Nasionality:</label>
		<br><br>
		<select>
			<option>Indonesian</option>
			<option>Singapuran</option>
			<option>Malaysian</option>
			<option>Australian</option>
		</select>
		<br><br>
	</div>

	<!-- membuat form bahasa -->
	<div>
		<label>Language Spoken:</label>
		<br><br>
		<input type="checkbox" name=""> Bahasa Indonesia
		<br>
		<input type="checkbox" name=""> English
		<br>
		<input type="checkbox" name=""> Other
		<br>
	</div>

	<!-- membuat form bio -->
	<div>
		<br>
		<label for="pesan_user">Bio:</label>
		<br><br>
		<textarea cols="40" rows="10" id="pesan_user"></textarea>
		<br>
	</div>

	<!-- form submit -->
	<input type="submit" value="SignUp">
	</form>
	
</body>
</html>