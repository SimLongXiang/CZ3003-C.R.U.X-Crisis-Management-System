@extends('layouts.operatorSidebar')
@section('content')

<script>

  function ConfirmCreate()
  {
  var x = confirm("Confirm create incident?");
  if (x)
    return true;
  else
    return false;
  }
  
</script>
	<p><b><center>Privilege level : Operator</center></b></p>
  <body>
    <h1>Create new incident</h1>

	{!! Form::open(array('url'=>'createIncident','method'=>'post','onsubmit' => 'return ConfirmCreate()'))!!}
      <fieldset>
        <legend>New Incident</legend>
		  <div>
          <label for="caseID">
            <strong>Case ID : </strong>
          </label>
		   {!! Form::text('caseID',null,array('class'=>'input' , 'id'=>'name' )) !!}
        </div>
        <div>
          <label for="incidentName">
            <strong>Incident Name : </strong>
          </label>
          <input id="incidentName" name="incidentName" type="text">
        </div>
		
		   <div>
          <label for="operatorName">
            <strong>Operator Name :</strong>
          </label>
          <input id="loggedBy" name="loggedBy" type="text">
        </div>
		  <div>
          <label for="incidentLocation">
            <strong>Incident Location:</strong>
          </label>
          <input id="incidentLocation" name="incidentLocation" type="text">
        </div>
			   <div>
          <label for="incidentTiming">
            <strong>Incident Timing :</strong>
          </label>
          <input id="incidentTiming" name="incidentTiming" type="datetime-local">
        </div>
		
        <div>
          <label for="incidentDescription">
            <strong>Incident Description :</strong>
          </label>
          <textarea id="incidentDescription" name="incidentDescription"></textarea>
        </div>
		
		   <div>
          <label for="alertLevel">
            <strong>Alert Level :</strong>
          </label>
          <select name="alertLevel" id="alertLevel">
		 <option value="ALERT 1">Alert 1</option>
		 <option value="ALERT 2">Alert 2</option>
		 <option value="ALERT 3">Alert 3</option>
		 <option value="ALERT 4">Alert 4</option>
		  </select>
		  
        </div
		
      </fieldset>
      <fieldset>  
        <legend>Incident metadata</legend>
        <div class="inline">
          <label for="post_category">
            <strong>Choose category for the Incident: </strong>
          </label>
          <select id="incidentCategory" name="incidentCategory">
            <option value="Fire">Fire</option>
			<option value="Flood">Flood</option>
          </select>
        </div>
        <div class="inline">
          <label for="incidentRemarks">
            <strong>Remarks :</strong>
          </label>
          <input id="incidentRemarks" name="incidentRemarks" type="text">
        </div>
		
		<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>PHP/MySQL & Google Maps Example</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3O2hxSSW3mBVl1hR-relUMeiijJ3-caM"
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[
	var map;
	var marker;
    function load() {
     map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(1.352083 , 103.8198),
        zoom: 11,
        mapTypeId: 'roadmap'
     });
	google.maps.event.addListener(map, 'click', function(event) {
		placeMarker(event.latLng);
	});
    }


 function placeMarker(location) {



            if (marker == undefined){
                marker = new google.maps.Marker({
                    position: location,
                    map: map, 
                    animation: google.maps.Animation.DROP,
                });
            }
            else{
                marker.setPosition(location);
            }
            map.setCenter(location);

document.getElementById('lat').value=marker.getPosition().lat();
document.getElementById('lng').value=marker.getPosition().lng();
        }

  </script>

  </head>

  <body onload="load()">
    <div id="map" style="width: 500px; height: 300px" onclick="placeMarker(this)"></div>
  </body>

</html>
		
		
		
		 <div class="inline">
          <label for="lng">
            <strong>Longitude :</strong>
          </label>
          <input id="lng" name="lng" type="float" >
        </div>
		
		 <div class="inline">
          <label for="lat">
            <strong>Latitude  :</strong>
          </label>
          <input id="lat" name="lat" type="float" >
        </div>
      </fieldset
	 
      <p>
         {!! Form::submit('Create')!!}
      </p>
   	 {!! Form::close()!!}

  </body>

@stop
