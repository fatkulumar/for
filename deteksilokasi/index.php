<!DOCTYPE html>
<html>
<head>
	<title>Lokasi</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<p><span id="lokasi"></span></p>

<script type="text/javascript">
	$(document).ready(function() {
		navigator.geolocation.getCurrentPosition(function (position) {
   			 tampilLokasi(position);
		}, function (e) {
		    alert('Geolocation Tidak Mendukung Pada Browser Anda');
		}, {
		    enableHighAccuracy: true
		});
	});
	function tampilLokasi(posisi) {
        //console.log(posisi);
        var foto = 'foto';
		var latitude 	= posisi.coords.latitude;
		var longitude 	= posisi.coords.longitude;
		$.ajax({
			type 	: 'POST',
			url		: 'lokasi.php',
			data 	: 'latitude='+latitude+'&longitude='+longitude+'&foto='+foto,
			success	: function (e) {
				if (e) {
					$('#lokasi').html(e);
				}else{
					$('#lokasi').html('Tidak Tersedia');
				}
			}
		})
	}
</script>
</body>
</html>