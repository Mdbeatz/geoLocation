<!DOCTYPE html>
<html>
<head>
    <title>Weather & Geolocation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="geolocation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
        <link rel="stylesheet" href="css/jquery.mobile.icons.min.css"/>
</head>
<body>

<?php include("header.php") ?>

<div id="mapPage">
    <div id='container'>
        <div id="geoLocation"> 
        <!--<h1>Weather</h1>-->
            <p id="location"></p>
            <p id="temp"></p>
            <!--Humidity: <p id="humidity"></p>-->
         </div>
           
    </div>
   	<div id='map-canvas'>
       <div class="modal"></div>
    </div>
</div><!-- /page -->



<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script async defer type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTZea67jn4YSPIGu0dNTHRyB1jnvo1Q00"></script>
<script src="geolocation.js"></script>
</body>
</html>
