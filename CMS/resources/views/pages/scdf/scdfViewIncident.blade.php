@extends('layouts.scdfSidebar')
@section('content')
	<p><b><center>Privilege level : SCDF Commander</center></b></p>
		
<table>
  <thead>
    <tr>
	  <th>Incident case ID</th>
      <th>Incident Name</th>
      <th>Incident Category</th>
      <th>Incident Description</th>
	  <th>Incident Location</th>
	  <th>Alert Level</th>
	  <th>Remarks</th>
	  <th>Lodge by</th>
	  <th>Time of Incident</th>
    </tr>
  </thead>
  <tbody>
    
	  @foreach ($incidents as $incident)
	 <tr>
	 <td>{!! $incident->caseID !!}</td>
	 <td>{!! $incident->incidentName !!}</td>
	 <td>{!! $incident->incidentCategory !!}</td>
	 <td>{!! $incident->description !!}</td>
	 <td>{!! $incident->incidentLocation !!}</td>
	 <td>{!! $incident->alertLevel !!}</td>
	 <td>{!! $incident->remarks !!}</td>
	 <td>{!! $incident->loggedBy !!}</td>
	 <td>{!! $incident->datetimeOfIncident !!}</td>
	 </tr>
	   @endforeach
  
   

  </tbody>
</table>
@stop