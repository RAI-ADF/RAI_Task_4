<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>registration</h1>
	<div>
		<form action="_registration.php" method="post">
			<div>
				<label>username</label>
				<input type="text" name="username" placeholder="username" />
			</div>
			<div>
				<label>password</label>
				<input type="password" name="password" placeholder="password">
			</div>
			<div>
				<label>re-password</label>
				<input type="password" name="re-password" placeholder="retype password" >
			</div>
			<div>
				<label>name</label>
				<input type="text" name="name" placeholder="fullname">
			</div>
			<div>
				<label>email</label>
				<input type="email" name="email" placeholder="email">
			</div>
			<div>
				<label>place of birth</label>
				<select name="province">
					<option value="jawa barat">jawa barat</option>
					<option value="sulawesi selatan"s>sulawesi selatan</option>
				</select>
				<select name="city">
					<option value="bandung">bandung</option>
					<option value="garut">garut</option>
					<option value="makassar">makassar</option>
					<option value="pare pare">pare pare</option>
				</select>
			</div>
			<div>
				<label>date fo birth</label>
				<input type="date" name="date" placeholder="dd/mm/yyyy">
			</div>
			<div>
				<button type="submit">submit</button>
			</div>
		</form>
	</div>
</body>
</html>
