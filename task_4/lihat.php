<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link href="homecss.css" rel="stylesheet">
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #fff;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 0px;
	padding-left: 0px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#ffffff;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 1366px;
	max-width: 1366px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 20cm;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background-color: #FFF;
	margin: 0; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background-color: #000000;
	background-image: url(file:///C|/Users/Jaka%20Eka%20sembodo/Documents/Unnamed%20Site%202/Header.jpg);
	height: 3cm;
	width: 1200px;
	background-size: 100% 100%;	
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 15%;
	background-color: #ea0000;
	padding-bottom: 20px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	font-style: normal;
	font-weight: bold;
	color: #FFF;
}
.content {
	padding: 0px 0;
	width: 80%;
	float: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 1px 1px 1px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 25px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	text-decoration: none;
	background-color: #ea0000;
	color: #FFF;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #FFF;
	color: #000;
}

/* ~~ The footer ~~ */
.footer {
	background-color: #ea0000;
	position: left;/* this gives IE6 hasLayout to properly clear */
	/*clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
	width: 1366px;
	padding-top: 0px;
	padding-right: 0;
	padding-bottom: 0px;
	padding-left: 0;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
</head>

<body style="background:Lavender">

<div class="container">
  <div class="header">
  <!-- end .header --></div>
  <div class="sidebar1">
	
	
    <ul class="nav">
      <li><a href="indeks.html">Home</a></li>
	  <li><a href="lihat.php">Lihat Data User</a></li>
	  <li><a href="tambah.php">Tambah Data User</a></li>
      <li></li>
    </ul>
	
    <!-- end .sidebar1 --></div>
	</div>
  <div class="content">
     <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-blue">
                        <ul class="nav nav-tabs nav-justified ">
                            <li class="active">
                                <a data-toggle="tab" href="#overview">
                                    <h3>
									Data Pegawai
									</h3>
								</a>
                            </li>
                        </ul>
                    </header>
					<table width=100% class="display table table-bordered table-striped" id="dynamic-table">
						<tr>
							<th>No. </th>
							<th>NIP </th>
							<th>Nama Pegawai </th>
							<th>Golongan </th>
							<th>Jabatan </th>
							<th>Aksi </th>
						</tr>
						<?php
							$query = "SELECT * FROM `tbl_data_pegawai` join tbl_data_golongan using (`nip_pegawai`) join tbl_data_jabatan using (`nip_pegawai`) join tbl_pendidikan using (`nip_pegawai`)";
							$hasil = mysql_query($query);
							$counter=0;
							while($row = mysql_fetch_array($hasil)){
							$counter++;
							$nip_pegawai = $row['nip_pegawai'];
						?>
						
						<tr>
							<td><?php echo $counter; ?> </td>
							<td><?php echo $row['nip_pegawai']; ?>  </td>
							<td><?php echo $row['nama_pegawai']; ?> </td>
							<td><?php echo $row['golongan']; ?> </td>
							<td><?php echo $row['jabatan']; ?> </td>
							<td> <a href="detail.php?id=<?php echo $nip_pegawai; ?>">Detail </a> | <a href="edit.php?id=<?php echo $nip_pegawai; ?>">Edit </a> | <a href="delete.php?id=<?php echo $nip_pegawai; ?>" onClick="return confirm('Apakah Anda Yakin ?');">Delete </a> </td>
						</tr>
							
						<?php	
							}
						?>
					
					</table>
					
					
                </section>
            </div>
        </div>
    </section>
    <!-- end .content --></div>
    
  <div class="footer">

    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>