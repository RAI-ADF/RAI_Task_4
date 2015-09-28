<!DOCTYPE HTML> 
<html>
<head>
<title>Form Registrasi</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script language="javascript">
	function cekPass(){
		var pas1 = document.getElementById("pass1");
		var pas2 = document.getElementById("pass2");
		var Err = document.getElementById("pass2Err");
		if(pas1.value != pas2.value){	
			 Err.innerHTML = "Password yang anda masukan tidak sama"; 
		}else{
			Err.innerHTML = "Password sudah sesuai"; 
		}
	}
	
	$(function(){
    $( "#datepicker" ).datepicker({
		changeMonth: true,
    	changeYear: true 
	});
  	});
	
	function selectProvinsi(){
		addOption(document.regis.provinsi, "Bali", "Bali", "");
		addOption(document.regis.provinsi, "Banten", "Banten", "");
		addOption(document.regis.provinsi, "JawaBarat", "Jawa Barat", "");
		addOption(document.regis.provinsi, "JawaTengah", "Jawa Tengah", "");
		addOption(document.regis.provinsi, "JawaTimur", "Jawa Timur", "");
	}

	function selectKota(){
		var bali = new Array("Bangli", "Denpasar", "Gianyar", "Karangasem", "Negara");
		var banten = new Array("Cilegon", "Lebak", "Pandeglang", "Serang", "Tangerang");
		var jawaBarat = new Array("Bandung", "Bekasi", "Bogor", "Cimahi", "Sukabumi");
		var jawaTengah = new Array("Magelang", "Pekalongan", "Semarang", "Surakarta", "Tegal");
		var jawaTimur = new Array("Blitar", "Kediri", "Malang", "Probolinggo", "Surabaya");
		var i;
		removeAllOption(document.regis.Kota);
		if(document.regis.provinsi.value == 'Bali'){
			for(i=0; i<bali.length; i++){
				addOption(document.regis.Kota, bali[i], bali[i]);
			}
		} if(document.regis.provinsi.value == 'Banten'){
			for(i=0; i<banten.length; i++){
				addOption(document.regis.Kota, banten[i], banten[i]);
			}
		} if(document.regis.provinsi.value == 'JawaBarat'){
			for(i=0; i<jawaBarat.length; i++){
				addOption(document.regis.Kota, jawaBarat[i], jawaBarat[i]);
			}
		} if(document.regis.provinsi.value == 'JawaTengah'){
			for(i=0; i<jawaTengah.length; i++){
				addOption(document.regis.Kota, jawaTengah[i], jawaTengah[i]);
			}
		} if(document.regis.provinsi.value == 'JawaTimur'){
			for(i=0; i<jawaTimur.length; i++){
				addOption(document.regis.Kota, jawaTimur[i], jawaTimur[i]);
			}
		}
	}
	function addOption(selectbox, value, text){
		var optn = document.createElement("OPTION");
		optn.text = text;
		optn.value = value;
		selectbox.options.add(optn);
	}
	function removeAllOption(selectbox){
		var i;
		for(i=selectbox.options.length-1;i>=0;i--)
		{
			//selectbox.options.remove(i);
			selectbox.remove(i);
		}
	}	
</script>
<style>
.error {color: #FF0000;}
</style>
</head>

<body onLoad="selectProvinsi();">
<?php
include_once "menu.php";
$usernameErr = $pass1Err = $pass2Err = $nameErr = $emailErr = "";
$username = $pass1 = $pass2 = $name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = test_input($_POST["username"]);
		if(!preg_match("/^[a-zA-z0-9_]*$/",$username)){
			$usernameErr = "Hanya huruf, angka, dan underscore yang diperbolehkan";
		}
		
		$pass1 = test_input($_POST["pass1"]);
		if(!preg_match("/^[a-zA-z0-9]*$/",$pass1)){
			$pass1Err = "Hanya huruf dan angka yang diperbolehkan";
		}
	
    	$name = test_input($_POST["name"]);
    	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       		$nameErr = "Hanya huruf dan spasi yang diperbolehkan"; 
     	}
   
    if(empty($_POST["email"])){
    	$emailErr = "";
    }else{
     	$email = test_input($_POST["email"]);
     	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       		$emailErr = "Format email salah"; 
     }
   }
    $pass2 = $_POST['pass2'];
   	$tanggal = $_POST['tanggal'];
	$provinsi = $_POST['provinsi'];
	$kota = $_POST['Kota'];
	$gender = $_POST['gender'];
	$user = "user";
	if(isset($_POST['submit'])){
		include "Konek.php";
		$cek = mysql_num_rows(mysql_query("SELECT username FROM user WHERE username = '$username'"));
		if($cek > 0){
?>
		<script language="javascript">
			alert('Username sudah dipakai!');
		</script>
<?php
		}else{
		$input = "INSERT INTO user (username, password, gender, nama, email, provinsi, kota, lahir, level) VALUES
				('$username','$pass1','$gender','$name','$email','$provinsi','$kota','$tanggal','$user')";
		$query = mysql_query($input);
		mysql_close($open);
		}
	}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<br><br>
<h2>Form Registrasi</h2>
<form name="regis" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	Username: <input type="text" name="username" required>
    <span class="error"><?php echo $usernameErr;?></span>
    <br><br>
    Password: <input type="password" id="pass1" name="pass1" required>
    <span class="error"><?php echo $pass1Err;?></span>
    <br><br>
    Retype Password: <input type="password" id="pass2" name="pass2" required onKeyUp="cekPass();return false;"><span id="pass2Err" class="pass2Err"></span>
    <br><br>
   	Nama: <input type="text" name="name">
   	<span class="error"><?php echo $nameErr;?></span>
   	<br><br>
   	Email: <input type="text" name="email">
   	<span class="error"><?php echo $emailErr;?></span>
   	<br><br>
    Tanggal Lahir: <input type="text" id="datepicker" name="tanggal" size="30">
    <br><br>
    Tempat Lahir: Provinsi <select id="provinsi" name="provinsi" onChange="selectKota();"> <option value="">pilih</option></select>
     Kota <select id="Kota" name="Kota"><option value="">pilih</option></SELECT>
    <br><br>
   	Gender:
   	<input type="radio" name="gender" value="pria" checked>Pria
   	<input type="radio" name="gender" value="wanita">Wanita
   	<br><br>
   	<input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>
