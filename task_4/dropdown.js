
var province_arr = new Array("Aceh", "Bali", "Bangka Belitung", "Banten", "Bengkulu", "Gorontalo", "DKI Jakarta", "Jambi", "Jawa Barat", "Jawa Tengah", "Jawa Timur", "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", "Kalimantan Timur", "Kalimantan Utara", "Kepulauan Riau", "Lampung", "Maluku Utara", "Maluku", "Papua", "Sumatera Barat", "Sumatera Selatan", "Yogyakarta")

var city_arr = new Array();
city_arr[0]="";
city_arr[1]="Banda Aceh|Langsa|Lhokseumawe|Meulaboh|Sabang|Subulussalam";
city_arr[2]="Denpasar";
city_arr[3]="Pangkalpinang";
city_arr[4]="Cilegon|Serang|Tangerang Selatan|Tangerang";
city_arr[5]="Bengkulu";
city_arr[6]="Gorontalo";
city_arr[7]="Jakarta Barat|Jakarta Pusat|Jakarta Selatan|Jakarta Timur|Jakarta Utara";
city_arr[8]="Sungai Penuh|Jambi";
city_arr[9]="Bandung|Bekasi|Bogor|Cimahi|Cirebon|Depok|Sukabumi|Tasikmalaya|Banjar";
city_arr[10]="Magelang|Pekalongan|Purwokerto|Salatiga|Semarang|Tegal";
city_arr[11]="Batu|Blitar|Kediri|Madiun|Malang|Mojokerto|Pasuruan|Probolinggo|Surabaya";
city_arr[12]="Pontianak|Singkawang";
city_arr[13]="Banjarbaru|Banjarmasin";
city_arr[14]="Palangkaraya";
city_arr[15]="Balikpapan|Bontang|Samarinda";
city_arr[16]="Tarakan";
city_arr[17]="Batam|Tanjung Pinang";
city_arr[18]="Bandar Lampung|Kotabumi|Liwa|Metro";
city_arr[19]="Ternate|Tidore Kepulauan";
city_arr[20]="Tual";
city_arr[21]="Jayapura";
city_arr[22]="Bukittinggi|Padang|Padangpanjang|Pariaman|Sawahlunto|Solok";
city_arr[23]="Lubuklinggau|Pagaralam|Palembang|Prabumulih";
city_arr[24]="Yogyakarta";

function populatecities( provinceElementId, cityElementId ){

	var selectedProvinceIndex = document.getElementById( provinceElementId ).selectedIndex;

	var cityElement = document.getElementById( cityElementId );

	cityElement.length=0;
	cityElement.options[0] = new Option('Select City','');
	cityElement.selectedIndex = 0;

	var cities = city_arr[selectedProvinceIndex].split("|");

	for (var i=0; i<cities.length; i++) {
		cityElement.options[cityElement.length] = new Option(cities[i],cities[i]);
	}
}

function populateProvince(provinceElementId, cityElementId){

	var provinceElement = document.getElementById(provinceElementId);
	provinceElement.length=0;
	provinceElement.options[0] = new Option('Select Province','-1');
	provinceElement.selectedIndex = 0;
	for (var i=0; i<province_arr.length; i++) {
		provinceElement.options[provinceElement.length] = new Option(province_arr[i],province_arr[i]);
	}

	if( cityElementId ){
		provinceElement.onchange = function(){
			populatecities( provinceElementId, cityElementId );
		};
	}
}
