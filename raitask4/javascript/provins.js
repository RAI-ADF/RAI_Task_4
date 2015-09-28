
// Provinsi
var provinsi_arr = new Array("Aceh", "Bali", "Bangka Belitung", "Banten", "Bengkulu", "Gorontalo", "DKI Jakarta", "Jambi", "Jawa Barat", "Jawa Tengah", "Jawa Timur", "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", "Kalimantan Timur", "Kalimantan Utara", "Kepulauan Riau", "Lampung", "Maluku Utara", "Maluku", "Papua", "Sumatera Barat", "Sumatera Selatan", "Yogyakarta")
// Kota
var s_a = new Array();
s_a[0]="";
s_a[1]="Banda Aceh|Langsa|Lhokseumawe|Meulaboh|Sabang|Subulussalam";
s_a[2]="Denpasar";
s_a[3]="Pangkalpinang";
s_a[4]="Cilegon|Serang|Tangerang Selatan|Tangerang";
s_a[5]="Bengkulu";
s_a[6]="Gorontalo";
s_a[7]="Jakarta Barat|Jakarta Pusat|Jakarta Selatan|Jakarta Timur|Jakarta Utara";
s_a[8]="Sungai Penuh|Jambi";
s_a[9]="Bandung|Bekasi|Bogor|Cimahi|Cirebon|Depok|Sukabumi|Tasikmalaya|Banjar";
s_a[10]="Magelang|Pekalongan|Purwokerto|Salatiga|Semarang|Tegal";
s_a[11]="Batu|Blitar|Kediri|Madiun|Malang|Mojokerto|Pasuruan|Probolinggo|Surabaya";
s_a[12]="Pontianak|Singkawang";
s_a[13]="Banjarbaru|Banjarmasin";
s_a[14]="Palangkaraya";
s_a[15]="Balikpapan|Bontang|Samarinda";
s_a[16]="Tarakan";
s_a[17]="Batam|Tanjung Pinang";
s_a[18]="Bandar Lampung|Kotabumi|Liwa|Metro";
s_a[19]="Ternate|Tidore Kepulauan";
s_a[20]="Tual";
s_a[21]="Jayapura";
s_a[22]="Bukittinggi|Padang|Padangpanjang|Pariaman|Sawahlunto|Solok";
s_a[23]="Lubuklinggau|Pagaralam|Palembang|Prabumulih";
s_a[24]="Yogyakarta";

function populateStates( provinsiElementId, stateElementId ){
	
	var selectedProvinsiIndex = document.getElementById( provinsiElementId ).selectedIndex;

	var stateElement = document.getElementById( stateElementId );
	
	stateElement.length=0;
	stateElement.options[0] = new Option('Select City','');
	stateElement.selectedIndex = 0;
	
	var state_arr = s_a[selectedProvinsiIndex].split("|");
	
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function populateProvins(provinsiElementId, stateElementId){

	var provinsiElement = document.getElementById(provinsiElementId);
	provinsiElement.length=0;
	provinsiElement.options[0] = new Option('Select Province','-1');
	provinsiElement.selectedIndex = 0;
	for (var i=0; i<provinsi_arr.length; i++) {
		provinsiElement.options[provinsiElement.length] = new Option(provinsi_arr[i],provinsi_arr[i]);
	}

	if( stateElementId ){
		provinsiElement.onchange = function(){
			populateStates( provinsiElementId, stateElementId );
		};
	}
}
