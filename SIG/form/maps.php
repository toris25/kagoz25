<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Geographic Information System</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <style type="text/css">
  

 </style>
</head>

<header>
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="home.html"><span><strong>Geographics Information System</strong></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="daftar.html">Makassar Mall</a>
        <a class="nav-link" href="about.html">About</a>

        <li class="nav-item">
    </div>
  </div>
  </div>
  </div>
</nav>
</header>
    
<style type='text/css'>
    #peta {
    width: 1750px;
    height: 1000px;
  
  } </style>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
       
       (function() {
     window.onload = function() {
   var map;
       //Parameter Google maps
       var options = {
         zoom: 10, //level zoom
         //posisi tengah peta
         center: new google.maps.LatLng(-5.1517981,119.4167816,12),
         mapTypeId: google.maps.MapTypeId.ROADMAP
       };
       
        // Buat peta di 
       var map = new google.maps.Map(document.getElementById('peta'), options);
        // Tambahkan Marker 
       
       var bounds = new google.maps.LatLngBounds();
     


       function addMarker(lat, lng, info) {
       var lokasi = new google.maps.LatLng(lat, lng);
       bounds.extend(lokasi);
        var marker = new google.maps.Marker({
        map: map,
        position: lokasi
       });       
        map.fitBounds(bounds);
       bindInfoWindow(marker, map, infoWindow, info);
 }

         var infowindow = new google.maps.InfoWindow();
   
       var marker, i;
        /* kode untuk menampilkan banyak marker */
       for (i = 0; i < locations.length; i++) {  
         marker = new google.maps.Marker({
           position: new google.maps.LatLng(locations[i][1], locations[i][2]),
           map: map,
           animation: google.maps.Animation.BOUNCE
         });
        /* menambahkan event clik untuk menampikan
             infowindows dengan isi sesuai dengan
           marker yang di klik */
           
         google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
             infowindow.setContent(locations[i][0]);
             infowindow.open(map, marker);
          
           }
         })(marker, i));
       }
     };
   })();
        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<div id="peta">
  
</div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
