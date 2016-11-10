
@extends('layouts.scdfSidebar')
@section('content')
	<p><b><center>Privilege level : SCDF Commander</center></b></p>
	
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>C.R.U.X CMS </title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3O2hxSSW3mBVl1hR-relUMeiijJ3-caM"
            type="text/javascript"></script>
			
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="websocket/fancywebsocket.js"></script>
	<script>
		var Server;
		var userid = "SCDFCommander";
			function log4( text ) {
			$log4 = $('#log4');
			//Add text to log
			$log4.append(($log4.val()?"\n":'')+text);
			//Autoscroll
			$log4[0].scrollTop = $log4[0].scrollHeight - $log4[0].clientHeight;
		}
		function send( text ) {
			Server.send( 'message', text );
		}
		$(document).ready(function() {
			log4('Connecting...');
			Server = new FancyWebSocket('ws://127.0.0.1:9300');
			$('#message4').keypress(function(e) {
				if ( e.keyCode == 13 && this.value ) {
					log4( 'You: ' + this.value );
					var msg = userid + ": "+this.value;
					send( msg );
					$(this).val('');
				}
			});
			//Let the user know we're connected
			Server.bind('open', function() {
				log4( "Connected to C.R.U.X CMS HQ." );
			});
			//OH NOES! Disconnection occurred.
			Server.bind('close', function( data ) {
				log4( "Disconnected." );
			});
			//Log any messages sent from server
			Server.bind('message', function( payload ) {
				log4( payload );

			});
			Server.connect();
		});
	</script>
	
    <script type="text/javascript">
	
	
	
    //<![CDATA[

  
	
    var customIcons = {
      Flood: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      Fire: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_orange.png'
      },
	   Asset: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_green.png'
      },
	  Crisis: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
	  
    };

  function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.352083 , 103.8198),
        zoom: 11,
        mapTypeId: 'roadmap'
      });
	  
	  	
	var  westCoords = [
		new google.maps.LatLng(1.437354449981665, 103.76178501639515),
		new google.maps.LatLng(1.4331286252242943, 103.75361823476851),
		new google.maps.LatLng(1.3486017350755313, 103.7729530222714),
		new google.maps.LatLng(1.3424236085037917, 103.75922011211514),
		new google.maps.LatLng(1.3077572838913425, 103.80179213359952),
		new google.maps.LatLng(1.2631365591070547, 103.83749770000577),
		new google.maps.LatLng(1.2229772509082246, 103.86565016582608),
		new google.maps.LatLng(1.209590680329891, 103.8498573191464),
		new google.maps.LatLng(1.2409803499369096, 103.60082242637873),
		new google.maps.LatLng(1.3489449417575492, 103.63459395244718),
		new google.maps.LatLng(1.4242650357940845, 103.67223355919123),
		new google.maps.LatLng(1.453970284829966, 103.7238578684628),	
	]; 

			
	var northWestCoords = [
		new google.maps.LatLng(1.437354449981665, 103.76178501639515),
		new google.maps.LatLng(1.4508813518348382, 103.77020644024014),
		new google.maps.LatLng(1.470538780905014, 103.80374335683882),
		new google.maps.LatLng(1.4728468773880603, 103.8223914988339),
		new google.maps.LatLng(1.456467150217748, 103.85146521963179),
		new google.maps.LatLng(1.4333774584424237, 103.86530684307218),
		new google.maps.LatLng(1.415873389346385, 103.85157393291593),
		new google.maps.LatLng(1.4227377377968915, 103.83269118145108),
		new google.maps.LatLng(1.4011149714742117, 103.8168983347714),
		new google.maps.LatLng(1.3760597705971975, 103.81861494854093),
		new google.maps.LatLng(1.3626740071638865, 103.81655501201749),
		new google.maps.LatLng(1.3434532938602968, 103.80179213359952),
		new google.maps.LatLng(1.3269782763049665, 103.81277846172452),
		new google.maps.LatLng(1.3015790763929973, 103.8004188425839),
		new google.maps.LatLng(1.3077572838913425, 103.80179213359952),
		new google.maps.LatLng(1.3424236085037917, 103.75922011211514),
		new google.maps.LatLng(1.3486017350755313, 103.7729530222714),
		new google.maps.LatLng(1.4331286252242943, 103.75361823476851),
	];
					
	var centralCoords =[
		new google.maps.LatLng(1.415873389346385, 103.85157393291593),
		new google.maps.LatLng(1.4333774584424237, 103.86530684307218),
		new google.maps.LatLng(1.4331286147501934 , 103.88062477111816),
		new google.maps.LatLng(1.4181986980448218 , 103.90036582946777),
		new google.maps.LatLng(1.387308910569238 , 103.88079643249512),
		new google.maps.LatLng(1.368431619103132 , 103.87633323669434),
		new google.maps.LatLng(1.3698045180624023 , 103.8636302947998),
		new google.maps.LatLng(1.3432044616518282 , 103.85848045349121),
		new google.maps.LatLng(1.3179770437546212 , 103.87187004089355),
		new google.maps.LatLng(1.2874292165174004 , 103.8662052154541),
		new google.maps.LatLng(1.2754159252740134 ,103.87358665466309 ),
		new google.maps.LatLng(1.257910743498132 ,103.85024070739746 ),
		new google.maps.LatLng(1.2674924937855583, 103.83377999067307),
		new google.maps.LatLng(1.3077572838913425, 103.80179213359952),
		new google.maps.LatLng(1.3269782763049665, 103.81277846172452),
		new google.maps.LatLng(1.3434532938602968, 103.80179213359952),
		new google.maps.LatLng(1.3626740071638865, 103.81655501201749),
		new google.maps.LatLng(1.3760597705971975, 103.81861494854093),
		new google.maps.LatLng(1.4011149714742117, 103.8168983347714),
		new google.maps.LatLng(1.4227377377968915, 103.83269118145108),
	];
					
	var northEastCoords =[
		new google.maps.LatLng(1.4181986980448218 , 103.90036582946777),
		new google.maps.LatLng(1.4220255793517425, 103.91150236129761 ),
		new google.maps.LatLng(1.3825981906930274, 103.96727085113525 ),
		new google.maps.LatLng(1.3721298722592206, 103.97478103637695),//
		new google.maps.LatLng(1.3590873131050822, 103.95898818969727),
		new google.maps.LatLng(1.3570279552033715, 103.96139144897461),
		new google.maps.LatLng(1.3458730694984498, 103.94688606262207),
		new google.maps.LatLng(1.345701455472609, 103.91924858093262),//
		new google.maps.LatLng(1.3383220409588643, 103.92165184020996),
		new google.maps.LatLng(1.3388368845538672, 103.9346981048584),
		new google.maps.LatLng(1.3288832226055889, 103.92096519470215),
		new google.maps.LatLng(1.3216753733779616, 103.92096519470215),
		new google.maps.LatLng(1.3211605262026844, 103.90328407287598),
		new google.maps.LatLng(1.3307709891700983, 103.90379905700684),
		new google.maps.LatLng(1.3436420862211271, 103.88998031616211),
		new google.maps.LatLng(1.368431619103132 , 103.87633323669434),
		new google.maps.LatLng(1.387308910569238 , 103.88079643249512),
	];

	var southEastCoords =[
		new google.maps.LatLng(1.3825981906930274, 103.96727085113525 ),
		new google.maps.LatLng(1.3952974002350278, 103.9789867401123),
		new google.maps.LatLng(1.3887761930484837, 104.00113105773926),
		new google.maps.LatLng(1.371100199113221, 104.00971412658691),
		new google.maps.LatLng(1.3535956881386368, 104.04421806335449),
		new google.maps.LatLng(1.303484042081823, 104.02825355529785),
		new google.maps.LatLng(1.3142958870200538, 103.97778511047363),
		new google.maps.LatLng(1.2754159252740134 ,103.87358665466309 ),
		new google.maps.LatLng(1.2754159252740134 ,103.87358665466309 ),
		new google.maps.LatLng(1.2874292165174004 , 103.8662052154541),
		new google.maps.LatLng(1.3179770437546212 , 103.87187004089355),
		new google.maps.LatLng(1.3432044616518282 , 103.85848045349121),
		new google.maps.LatLng(1.3698045180624023 , 103.8636302947998),
		new google.maps.LatLng(1.368431619103132 , 103.87633323669434),
		new google.maps.LatLng(1.368431619103132 , 103.87633323669434),
		new google.maps.LatLng(1.3436420862211271, 103.88998031616211),
		new google.maps.LatLng(1.3307709891700983, 103.90379905700684),
		new google.maps.LatLng(1.3211605262026844, 103.90328407287598),
		new google.maps.LatLng(1.3216753733779616, 103.92096519470215),	
		new google.maps.LatLng(1.3288832226055889, 103.92096519470215),	
		new google.maps.LatLng(1.3388368845538672, 103.9346981048584),		
		new google.maps.LatLng(1.3383220409588643, 103.92165184020996),	
		new google.maps.LatLng(1.345701455472609, 103.91924858093262),	
		new google.maps.LatLng(1.3458730694984498, 103.94688606262207),
		new google.maps.LatLng(1.3570279552033715, 103.96139144897461),
		new google.maps.LatLng(1.3590873131050822, 103.95898818969727),
		new google.maps.LatLng(1.3721298722592206, 103.97478103637695),
	];
			
	// Construct the polygon.  
	 <!-- creating polygon for west side -->
	 westSide = new google.maps.Polygon({
		paths: westCoords,
		strokeColor: '#FFFFFF',
		strokeOpacity: 0.6,
		strokeWeight: 4,
		fillColor: '#FF0000',
		fillOpacity: 0.2
	 });
	 
	southEastSide = new google.maps.Polygon({
		paths: southEastCoords,
		strokeColor: '#FFFFFF',
		strokeOpacity: 0.6,
		strokeWeight: 4,
		fillColor: '#FF9900',
		fillOpacity: 0.2
	 });

	 northEastSide = new google.maps.Polygon({
		paths: northEastCoords,
		strokeColor: '#FFFFFF',
		strokeOpacity: 0.6,
		strokeWeight: 4,
		fillColor: '#0066FF',
		fillOpacity: 0.2
	 });

	 centralSide = new google.maps.Polygon({
		paths: centralCoords,
		strokeColor: '#FFFFFF',
		strokeOpacity: 0.6,
		strokeWeight: 4,
		fillColor: '#16F725',
		fillOpacity: 0.2
	 });
	 
	 northWestSide = new google.maps.Polygon({
		paths: northWestCoords,
		strokeColor: '#FFFFFF',
		strokeOpacity: 0.6,
		strokeWeight: 4,
		fillColor: '#FFF000',
		fillOpacity: 0.2
	 });

	  
	  westSide.setMap(map);
	  northWestSide.setMap(map);
	  centralSide.setMap(map);
	  northEastSide.setMap(map);
	  southEastSide.setMap(map);
					 
					 
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }
	
	function initNorth() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.436 , 103.7861),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
	  
	
	  
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }
	
	function initWest(){
		//load();
		
      map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.332857 , 103.743552),
        zoom: 12,
        mapTypeId: 'roadmap'
      });
	  
	  
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });		
		
	
		westSide.setMap(map);
		northWestSide.setMap(null);
		centralSide.setMap(null);
		northEastSide.setMap(null);
		southEastSide.setMap(null);
	}
	
	function initCentral(){
		
		
		map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.3506 , 103.8488),
        zoom: 12,
        mapTypeId: 'roadmap'
      });
	  
	  
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });		
		

		
		westSide.setMap(null);
		northWestSide.setMap(null);
		centralSide.setMap(map);
		northEastSide.setMap(null);
		southEastSide.setMap(null);
	}
	
	function initNorthEast(){

		map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.3582 , 103.9113),
        zoom: 12,
        mapTypeId: 'roadmap'
      });
	  
	  
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
		westSide.setMap(null);
		northWestSide.setMap(null);
		centralSide.setMap(null);
		northEastSide.setMap(map);
		southEastSide.setMap(null);
	}
	
	function initNorthWest(){
		
		map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.4043 , 103.7930),
        zoom: 12,
        mapTypeId: 'roadmap'
      });
	  
	  
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
		westSide.setMap(null);
		northWestSide.setMap(map);
		centralSide.setMap(null);
		northEastSide.setMap(null);
		southEastSide.setMap(null);
	}

	function initSouthEast(){

		map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.3335 , 103.9595),
        zoom: 12,
        mapTypeId: 'roadmap'
      });
	  
	  
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("data.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
	  
		westSide.setMap(null);
		northWestSide.setMap(null);
		centralSide.setMap(null);
		northEastSide.setMap(null);
		southEastSide.setMap(map);
	}
	
	function initNoOverlay(){
		load();
		westSide.setMap(null);
		northWestSide.setMap(null);
		centralSide.setMap(null);
		northEastSide.setMap(null);
		southEastSide.setMap(null);		
	}
    function doNothing() {}

    //]]>

  </script>

  </head>

  <center>
  <body onload="load()">
  	

	
  </tr>

  	<table>
	<tr>
	<td>
	 <h3><a id='west' href="#" onclick="initWest();return false;">West</a></h3>
	 </td>
	 
	<td>
	  <h3><a id='northwest' href="#" onclick="initNorthWest();return false;">North-West</a></h3>
	  </td>

	<td>
	  <h3><a id='west' href="#" onclick="initCentral();return false;">Central</a></h3>
	  </td>

	<td>
	  <h3><a id='northeast' href="#" onclick="initNorthEast();return false;">North-East</a></h3>
	  </td>


	<td>
	  <h3><a id='southeast' href="#" onclick="initSouthEast();return false;">South-East</a></h3>
	  </td>
	  
	 <td>
	  <h3><a id='main' href="#" onclick="load();return false;">Main</a></h3>
	 </td>
	 
	 <td>
	  <h3><a id='main2' href="#" onclick="initNoOverlay();return false;">No Overlay</a></h3>
	 </td>
	
  </tr>
	</table>
  <tr><td>
  <div id="side-bar" style="width: 20%;
	height: 100%;
	float: left;">
	<div id='msgBody' style="width:90%;
	padding: 20px 0 0 0;
	margin-left:10px">
		<textarea id='log4' name='log4' readonly='readonly' style="resize:none;" rows="20">Entered Cmd Ctr channel:
		</textarea><br/>
		<input type='text' id='message4' name='message4' placeholder="Enter message" />
	</div>
	</div></td>
  
  <td>
   <div id="map" style="width: 800px; height: 500px"></div>
 </td>
 <td>
  <img src="legends.png" alt="Mountain View">
  </td>
	</tr>
	</table>

  </body>
</center>
</html>

@stop