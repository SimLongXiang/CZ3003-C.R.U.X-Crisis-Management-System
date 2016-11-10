@extends('layouts.spfSidebar')
@section('content')

<script>

  function ConfirmCreate()
  {
  var x = confirm("Confirm create asset?");
  if (x)
    return true;
  else
    return false;
  }
  
</script>

	<p><b><center>Privilege level : SPF Commander</center></b></p>
	  <body>
    <h1>Add Asset</h1>

	{!! Form::open(array('url'=>'addAssets','method'=>'post','onsubmit' => 'return ConfirmCreate()'))!!}
      <fieldset>
        <legend>New Asset</legend>
		  <div>
          <label for="assetID">
            <strong>Asset ID : </strong>
          </label>
		   {!! Form::text('assetID',null,array('class'=>'input' , 'id'=>'name' )) !!}
        </div>
        <div>
          <label for="assetName">
            <strong>Asset Name : </strong>
          </label>
          <input id="assetName" name="assetName" type="text">
        </div>
		
		   <div>
          <label for="assetType">
            <strong>Asset Type :</strong>
          </label>
          <input id="assetType" name="assetType" type="text">
        </div>
		
			   <div>
          <label for="assetLocation">
            <strong>Asset Location :</strong>
          </label>
          <input id="assetLocation" name="assetLocation" type="text">
        </div>
		
        <div>
          <label for="assetDescription">
            <strong>Asset Description :</strong>
          </label>
          <textarea id="assetDescription" name="assetDescription"></textarea>
        </div>
		   <div>
          <label for="assetStatus">
            <strong>Asset Status :</strong>
          </label>
               <input id="assetStatus" name="assetStatus" type="text">
        </div>
		
		   <div>
          <label for="assetDepartment">
            <strong>Asset Department :</strong>
          </label>
          <select name="assetDepartment" id="assetDepartment">
		 <option value="SCDF">SCDF</option>
		 <option value="NEA">NEA</option>
		 <option value="SAF">SAF</option>
		 <option value="SPF">SPF</option>
		  </select>
		  
        </div>
		
      </fieldset>
      <fieldset>  
        <legend>Asset metadata</legend>
        <div class="inline">
          <label for="assetRemarks">
            <strong>Asset Remarks :</strong>
          </label>
          <input id="assetRemarks" name="assetRemarks" type="text">
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