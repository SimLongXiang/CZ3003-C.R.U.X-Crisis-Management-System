@extends('layouts.sidebar')
@section('content')
	<p><b><center>Privilege level : System Admin</center></b></p>
	
		<table>
  <thead>
     <tr>
	  <th>Assets ID</th>
      <th>Assets Name</th>
      <th>Assets Description</th>
	  <th>Assets Type</th>
	  <th>Assets Deployment Location</th>
	  <th>Assets Status</th>
	  <th>Assets Department</th>
	  <th>Remarks</th>
    </tr>
  </thead>

  <tbody>
     <tr>
	  @foreach ($assets as $asset)
	 <tr>
	 <td>{!! $asset->assetID !!}</td>
	 <td>{!! $asset->assetName !!}</td>
	 <td>{!! $asset->assetDescription !!}</td>
	 <td>{!! $asset->assetType !!}</td>
	 <td>{!! $asset->assetLocation !!}</td> 
	 <td>{!! $asset->assetStatus !!}</td>
	 <td>{!! $asset->assetDepartment !!}</td>
	 <td>{!! $asset->assetRemarks !!}</td>
	 </tr>
	   @endforeach
  </tbody>
@stop