var state_arr = new Array("Wakiso", "Luwero","Elsewhere");

var s_a = new Array();
s_a[0]="";
s_a[1]=" Busukuma | Division A | Division B | Gombe | Kakiri | Kasanje | Katabi| Kira | Masulita  |Nabweru | Namayumba | Nangabo | Nsangi | Ssabagabo-makindye | Ssisa | Wakiso | Wakiso Tc";
s_a[2]=" Bamunanika | Bombo Tc| Butuntumula | Kalagala | Kamira | Katikamu | Kikyusa | Luwero | Luwero Tc | Makulubita | Nyimbwa | Wobulenzi Tc| Zirobwe";
s_a[3]=" Abim | Adjumani | Agago |  Alebtong | Amolatar | Amudat |  Amuria |Amuru| Apac| Arua| Budaka |Bududa | Bugiri|Buikwe|Bukedea|Bukomansimbi|Bukwo|Bulambuli|Buliisa|Bundibugyo|Bushenyi|Busia|Butaleja|Butambala|Buvuma|Buyende|Dokolo|Gomba|Gulu|Hoima|Ibanda|Iganga|Isingiro|Jinja|Kaabong|Kabale|Kabarole|Kaberamaido|Kalangala|Kaliro|Kalungu|Kampala|Kamuli|Kamwenge|Kanungu|Kapchorwa|Kasese|Katakwi|Katerere|Kayunga|Kibaale|Kibingo|Kiboga|Kibuku|Kiruhura|Kiryandongo|Kisoro|Kitgum|Koboko|Kole|Kotido|Kumi|Kween|Kyankwanzi|Kyegegwa|Kyenjojo|Lamwo|Lira|Luuka|Lwengo|Lyantonde|Manafwa|Maracha|Masaka|Masindi|Mayuge|Mbale|Mbarara|Mitooma|Mityana|Moroto|Moyo|Mpigi|Mubende|Mukono|Nakapiripirit|Nakaseke|Nakasongola|Namiyango|Namutumba|Napak|Nebbi|Ngora|Nsiika|Ntoroko|Ntungamo|Nwoya|Otuke|Oyam|Pader|Pallisa|Rakai|Rukungiri|Serere|Sironko|Soroti|Ssembabule|Tororo|Yumbe|Zombo";


function print_state(state_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(state_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select District','');
	option_str.selectedIndex = 0;
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function print_city(city_id, city_index){
	var option_str = document.getElementById(city_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select Subcounty','');
	option_str.selectedIndex = 0;
	var city_arr = s_a[city_index].split("|");
	for (var i=0; i<city_arr.length; i++) {
		option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
	}
}





