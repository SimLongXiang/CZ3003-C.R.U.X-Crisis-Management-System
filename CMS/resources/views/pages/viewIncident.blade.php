
@extends('layouts.sidebar')
@section('content')

<script>

  function ConfirmEscalate()
  {
  var x = confirm("Confirm escalate to Crisis?");
  if (x)
    return true;
  else
    return false;
  }
  
  function ConfirmDelete()
  {
  var x = confirm("Confirm delete Incident?");
  if (x)
    return true;
  else
    return false;
  }
</script>
	<p><b><center>Privilege level : System Admin</center></b></p>

	<center>{!! $errors->first('message')!!}</center>
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
	  <th>Escalate</th>
	  <th>Delete</th>
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
	 <td>
	 	 {!!  Form::open(array('url'=>'escalateCrisis','method'=>'post','onsubmit' => 'return ConfirmEscalate()')) !!}
		 {!!  Form::hidden('caseID', $incident->caseID ) !!}
		 {!!  Form::hidden('incidentName', $incident->incidentName ) !!}
		 {!!  Form::hidden('incidentCategory', $incident->incidentCategory) !!}
	     {!!  Form::hidden('incidentDescription', $incident->description) !!}
		 {!!  Form::hidden('incidentLocation', $incident->incidentLocation ) !!}
		 {!!  Form::hidden('incidentAlertLevel', $incident->alertLevel) !!}
		 {!!  Form::hidden('incidentRemarks', $incident->remarks ) !!}
		 {!!  Form::hidden('incidentLoggedBy', $incident->loggedBy) !!}
		 {!!  Form::hidden('incidentDateTime', $incident->datetimeOfIncident ) !!}	
		 {!! Form::submit('Escalate')!!}
		 {!! Form::close()!!}
	 </td>
	  <td> 
	 {!!Form::open(array('url'=>'deleteIncident','method'=>'post','onsubmit' => 'return ConfirmDelete()')) !!}
	 		 {!! Form::submit('Delete')!!}
			 {!!  Form::hidden('caseID', $incident->caseID ) !!}
	 {!! Form::close()!!}
	 </td>
	 </tr>
	 
	   @endforeach
  
   

  </tbody>
</table>
@stop