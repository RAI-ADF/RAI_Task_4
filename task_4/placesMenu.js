var provinceArray = new Array("Aceh", "Bali", "Bangka Belitung", "Banten", "Bengkulu", "Gorontalo", "DKI Jakarta", "Jambi", "Jawa Barat", "Jawa Tengah", "Jawa Timur", "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", "Kalimantan Timur", "Kalimantan Utara", "Kepulauan Riau", "Lampung", "Maluku Utara", "Maluku", "Papua", "Papua Barat", "Sumatera Barat", "Sumatera Selatan", "Yogyakarta");

var cityArray = new Array();
cityArray[0]="";
cityArray[1]="Banda Aceh|Langsa|Lhokseumawe|Meulaboh|Sabang|Subulussalam";
cityArray[2]="Badung|Bangli|Buleleng|Denpasar|Gianyar|Jembrana|Karangasem|Kllungkung|Tabanan";
cityArray[3]="Bangka|Bangka Barat|Bangka Selatan|Bangka Tengah|Belitung|Belitung Timur|Pangkalpinang";
cityArray[4]="Cilegon|Serang|Tangerang Selatan|Tangerang";
cityArray[5]="Bengkulu|Kaur|Kepahiang|Lebong|Mukomuko|Rejang Lebong|Seluma";
cityArray[6]="Boalemo|Bone Bolango|Gorontalo|Gorontalo Timur|Pohuwato";
cityArray[7]="Jakarta Barat|Jakarta Pusat|Jakarta Selatan|Jakarta Timur|Jakarta Utara";
cityArray[8]="Batanghari|Bungo|Jambi|Kerinci|Merangin|Sungai Penuh|Tebo";
cityArray[9]="Bandung|Bekasi|Bogor|Cimahi|Cirebon|Depok|Sukabumi|Tasikmalaya|Banjar";
cityArray[10]="Magelang|Pekalongan|Purwokerto|Salatiga|Semarang|Tegal";
cityArray[11]="Batu|Blitar|Kediri|Madiun|Malang|Mojokerto|Pasuruan|Probolinggo|Surabaya";
cityArray[12]="Ketapang|Mempawah|Pontianak|Sambas|Singkawang|Sintang";
cityArray[13]="Banjarbaru|Banjarmasin|Barito Kuala|Kotabaru|Tabalong|Tanah Bumbu|Tanah Laut|Tapin";
cityArray[14]="Muara Teweh|Palangka Raya|Sampit|Tarakan";
cityArray[15]="Berau|Balikpapan|Bontang|Kutai Barat|Kutai Kartanegara|Kutai Timur|Mahakam Ulu|Paser|Samarinda";
cityArray[16]="Bulungan|Malinau|Nunukan|Tana Tidung|Tarakan";
cityArray[17]="Batam|Bintan|Karimun|Lingga|Natuna|Tanjung Pinang";
cityArray[18]="Bandar Lampung|Kotabumi|Liwa|Metro";
cityArray[19]="Sofifi|Ternate|Tidore Kepulauan";
cityArray[20]="Ambon|Buru|Buru Selatan|Kepulauan Aru|Tual";
cityArray[21]="Jayapura";
cityArray[22]="Fakfak|Manokwari|Sorong"
cityArray[23]="Bukittinggi|Padang|Padangpanjang|Pariaman|Sawahlunto|Solok";
cityArray[24]="Lubuklinggau|Pagaralam|Palembang|Prabumulih";
cityArray[25]="Yogyakarta";

function populatecities( provinceElementId, cityElementId ){

	var selectedProvinceIndex = document.getElementById( provinceElementId ).selectedIndex;

	var cityElement = document.getElementById( cityElementId );

	cityElement.length=0;
	cityElement.options[0] = new Option('Pilih kota','');
	cityElement.selectedIndex = 0;

	var cities = cityArray[selectedProvinceIndex].split("|");

	for (var i=0; i<cities.length; i++) {
		cityElement.options[cityElement.length] = new Option(cities[i],cities[i]);
	}
}

function populateProvince(provinceElementId, cityElementId){

	var provinceElement = document.getElementById(provinceElementId);
	provinceElement.length=0;
	provinceElement.options[0] = new Option('Pilih Provinsi','-1');
	provinceElement.selectedIndex = 0;
	for (var i=0; i<provinceArray.length; i++) {
		provinceElement.options[provinceElement.length] = new Option(provinceArray[i],provinceArray[i]);
	}

	if( cityElementId ){
		provinceElement.onchange = function(){
			populatecities( provinceElementId, cityElementId );
		};
	}
}
