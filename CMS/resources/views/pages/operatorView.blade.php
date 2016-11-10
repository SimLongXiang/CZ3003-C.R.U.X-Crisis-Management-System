@extends('layouts.operatorSidebar')
@section('content')
<script>

  function ConfirmUpdate()
  {
  var x = confirm("Confirm update Incident Level?");
  if (x)
    return true;
  else
    return false;
  }
  
</script>

	<p><b><center>Privilege level : Operator</center></b></p>
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
	  <th>Increase Alert level</th>
    </tr>
  </thead>
  <tbody>
    <tr>
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
	 <td> 
	 {!! Form::open(array('url'=>'updateThreat','method'=>'post','onsubmit' => 'return ConfirmUpdate()'))!!}
	 {!! Form::select('threat',array('ALERT 1' => 'ALERT 1', 'ALERT 2' => 'ALERT 2','ALERT 3' => 'ALERT 3','ALERT 4' => 'ALERT 4')); !!}
	 {!! Form::hidden('caseID', $incident->caseID ) !!}
	 {!! Form::submit('Update')!!}
	 {!! Form::close()!!}
	 
	 </td>
	 
	 </tr>
	   @endforeach
  
   

  </tbody>
</table>
@stop