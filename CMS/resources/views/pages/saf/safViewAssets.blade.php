
@extends('layouts.safSidebar')
@section('content')


<script>

  function ConfirmDelete()
  {
  var x = confirm("Confirm delete asset?");
  if (x)
    return true;
  else
    return false;
  }
  
</script>
	<p><b><center>Privilege level : SAF Commander</center></b></p>
		
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
	  <th>Delete</th>
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
	 
	 @if($asset->assetDepartment =='SAF' || $asset->assetDepartment =='saf' )
	 <td> 
	 {!!Form::open(array('url'=>'deleteAssets','method'=>'post','onsubmit' => 'return ConfirmDelete()')) !!}
	 		 {!! Form::submit('Delete')!!}
			 {!!  Form::hidden('assetID', $asset->assetID ) !!}
	 {!! Form::close()!!}
	 
	 </td>
	 @endif
	 
	 </tr>
	   @endforeach
  
	
  </tbody>
@stop