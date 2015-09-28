<!DOCTYPE html>
<html>
<head>
	<title>Client Page</title>
</head>
<body>
	<div align="center"></div>
	<h1> this is Client page</h1>
	<form id="form_user"  method="post" action="entryuser.php">
		<div class="form_description">
			<h2>Form User</h2>
		</div>						
		<ul >		
			<li id="li_2" >
				<label>Judul </label>
				<div>	
					<input id="judul" name="judul" type="text" maxlength="255" value=""/> 
				</div> 
			</li>		<li>
			<label>Karangan : </label>
			<div>
				<textarea id="karangan" name="karangan"></textarea> 
			</div> 
		</li>		<li>
		<label>Kategori </label>
		<div>
			<select  id="pilih_kategori" name="pilih_kategori"> 
				<option value="" selected="selected"></option>
				<option value="1" >Fiktif</option>
				<option value="2" >NonFiktif</option>
				<option value="3" >Cerpen</option>

			</select>
		</div> 
	</li>

	<li class="buttons">
		<input type="hidden" name="form_id" value="1056599" />
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
	</li>
</ul>
</form>	
</body>
</html>
