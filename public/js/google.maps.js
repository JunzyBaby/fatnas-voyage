/*function initMap() {
	// body... 
	var options = {
		zoom:16,
		center:{lat:5.290922 , lng:-3.9988}
	}
	var map =  new google.maps.Map(document.getElementById('map'), options);
}*/

function initMap() {
	var options = {lat: 5.290922, lng: -3.9988};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: options
	});
	var marker = new google.maps.Marker({
		position: options,
		map: map
	});
}