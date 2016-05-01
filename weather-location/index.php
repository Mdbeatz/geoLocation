<!DOCTYPE html>
<html>
<head>
    <title>Weather & Geolocation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="css/geolocation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="css/jquery.mobile.icons.min.css"/>
</head>
<body>

<?php include("components/header.php") ?>

    <!-- Start of first page -->
	<div data-role="page" id="weatherPage">    
		<?php include("components/header.php") ?> 
        
        <div role="main" class="ui-content">
            <div id="geoLocation">
                Location: <br><span id="location"></span><br><br>
                Temperature: <br><span id="temp"></span>&#176;C<br><br>
                Description: <br><span id="description"></span><br><br>
                Humidity: <br><span id="humidity"></span>%
            </div>
            
            <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-hashtags="weather">Tweet</a>
			<script>
            !function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
            }(document, 'script', 'twitter-wjs');
            </script> 
        </div>
	</div><!-- /page -->
    
    <!-- Start of second page -->
    <div data-role="page" id="mapPage">    
   		<?php include("components/header.php") ?>
    
        <div role="main" class="ui-content">
            <div id="map-canvas"> </div>
        </div>
    </div><!-- /page -->   
    
    <!-- Start of third page -->
    <div data-role="page" id="flickrPage">    
    	<?php include("components/header.php") ?>
    
        <div role="main" class="ui-content">
            <div id="images"></div>
        </div>
    </div><!-- /page -->
        


<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script async defer type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTZea67jn4YSPIGu0dNTHRyB1jnvo1Q00"></script>
<script src="js/flickr.js"></script>
<script src="js/geolocation.js"></script>
</body>
</html>
