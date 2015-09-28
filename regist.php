<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="styles.css">
<script language="javascript">
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
  function validateEmail(email) {
    var email = document.getElementById('email');
    var message = document.getElementById('validateMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(!re.test(email.value)) {
      email.style.backgroundColor = badColor;
      message.style.color = badColor;
      message.innerHTML = "Email tidak valid";
    } else {
      email.style.backgroundColor = goodColor;
      message.style.color = goodColor;
      message.innerHTML = "Email Valid";
    }
  }

  function checkPass() {
      //Store the password field objects into variables ...
      var pass1 = document.getElementById('pass1');
      var pass2 = document.getElementById('pass2');
      //Store the Confimation Message Object ...
      var message = document.getElementById('confirmMessage');
      //Set the colors we will be using ...
      var goodColor = "#66cc66";
      var badColor = "#ff6666";
      //Compare the values in the password field 
      //and the confirmation field
      if(pass1.value == pass2.value){
          //The passwords match. 
          //Set the color to the good color and inform
          //the user that they have entered the correct password 
          pass2.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = "Passwords Match!"
      }else{
          //The passwords do not match.
          //Set the color to the bad color and
          //notify the user.
          pass2.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = "Passwords Do Not Match!"
      }
  }
</script>

</head>
<style type="text/css">
#cv {
	background : gray;
	height : auto;
	width : 500px;
	margin : 0px auto;
	border : 2px solid black;
	border-collapse: collapse;
	text-align : center;
}
#cv > #judul {
	height : auto;
	margin : 0px auto;
	text-align : center;
}

</style>
<body onLoad="selectProvinsi();">

<div id="cv">
<?php include_once("menu.php"); ?>

  <div id="judul"><h2> Register</h2> </div>
  <form name="regis" action="reg.php" method="post" enctype="multipart/form-data">
  	Username : <br><input type="text" name="username"></br>
  	Password : <br><input id="pass1" type="password" name="password"></br>
  	Re-Password : <br><input id="pass2" type="password" name="repassword" onkeyup="checkPass(); return false;"><br/>
    <span id="confirmMessage" class="confirmMessage"></span><br/>
  	Name : <br><input type="text" name="name"></br>
  	Email : <br/><input type="text" id="email" name="email" onkeyup="validateEmail(); return false;"></br>
    <span id="validateMessage" class="validateMessage"></span><br/>
    Tanggal Lahir: <br/><input type="text" id="datepicker" name="tanggal" size="20"></br>
    Tempat Lahir: <br/>Provinsi <select id="provinsi" name="provinsi" onChange="selectKota();"> <option value="">pilih</option></select>
    Kota <select id="Kota" name="kota"><option value="">pilih</option></SELECT><br/>
    Gender:<br/>
    <input type="radio" name="gender" value="L" checked>Pria
    <input type="radio" name="gender" value="P">Wanita<br/>
  	<br/><input type="submit" value="submit" style="margin-bottom:5px;">
  	<button type="reset" value="reset">Reset</button>
  </form>
</div>
</body>
</html>
