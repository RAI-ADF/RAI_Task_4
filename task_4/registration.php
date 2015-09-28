<html>
<head>
<title>Registrasi User</title>


<style>
body {
    background-color: #d0e4fe;
}

h1 {
    color: orange;
    text-align: left;
}

p {
    font-family: "Times New Roman";
    font-size: 20px;
}
</style>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

a:link, a:visited {
    display: block;
    width: 125px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #98bf21;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #7A991A;
}
</style>


  
</head> 

<body>
<ul>
  <li><a href="index.php">Sign In</a></li>
  <li><a href="registration.php">Sign Up</a></li>  
</ul>

<h1>Daftar Pengguna Baru</h1>

 
<form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" maxlength="15" required="required" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" maxlength="30" required="required" /></td>
        </tr>
        <tr>
            <td>Nik</td>
            <td>:</td>
            <td><input type="text" name="nik" maxlength="12" required="required" /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="30" required="required" /></td>
        </tr>        
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                  <input type="date" name="bday">                              
                </select>
            </td>            
  
    
        </tr>        

        <tr>
            <td>Nomor HP</td>
            <td>:</td>
            <td><input type="text" name="nohp" maxlength="15" required="required" /></td>
        </tr>
		<tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" maxlength="30" required="required" /></td>
        </tr>
		
        <tr>
            <td align="right" colspan="3">				
				<input type="submit" name="input_data" value="Simpan"  />                
        

			</td>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>