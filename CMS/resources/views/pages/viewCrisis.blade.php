@extends('layouts.sidebar')
@section('content')

<script>

  function ConfirmUpdate()
  {
  var x = confirm("Confirm update Crisis Alert Level?");
  if (x)
    return true;
  else
    return false;
  }
  
  function ConfirmDelete()
  {
  var x = confirm("Confirm delete crisis?");
  if (x)
    return true;
  else
    return false;
  }
  function ConfirmDeescalate()
  {
  var x = confirm("Confirm de-escalate to Incident?");
  if (x)
    return true;
  else
    return false;
  }
</script>

	<p><b><center>Privilege level : System Admin</center></b></p>
	<table>
  <thead>
     <tr>
      <th>Crisis ID</th>
      <th>Crisis Name</th>
	  <th>Crisis Location</th>
	  <th>Crisis Category</th>
	  <th>Description</th>
	  <th>Remarks</th>
	  <th>Crisis Level</th>
	  <th>Crisis Logged By</th>
	  <th>Crisis Datetime</th>
	  <th>Delete</th>
	  <th>Escalate</th>
	  <th>De-escalate to Incident</th>
    </tr>
  </thead>

  <tbody>
     
	  @foreach ($allCrisis as $crisis)
	  <tr>
	 <td>{{ $crisis->caseID }}</td>
	 <td>{{ $crisis->crisisName }}</td>
	 <td>{{ $crisis->crisisLocation }}</td>
	 <td>{{ $crisis->crisisCategory }}</td>
	 <td>{{ $crisis->crisisDescription }}</td>
	 <td>{{ $crisis->crisisRemarks }}</td>
	 <td>{{ $crisis->crisisLevel }}</td>
	 <td>{{ $crisis->crisisLoggedBy }}</td>
	 <td>{{ $crisis->crisisDateTime }}</td>
	 <td> 
	 {!!Form::open(array('url'=>'deleteCrisis','method'=>'post','onsubmit' => 'return ConfirmDelete()')) !!}
	 		 {!! Form::submit('Delete')!!}
			 {!!  Form::hidden('caseID', $crisis->caseID ) !!}
	 {!! Form::close()!!}
	 </td>
	 <td>
	 {!! Form::open(array('url'=>'updateCrisisAlert','method'=>'post','onsubmit' => 'return ConfirmUpdate()'))!!}
	 {!! Form::select('threat', array('ALERT 1' => 'ALERT 1', 'ALERT 2' => 'ALERT 2','ALERT 3' => 'ALERT 3','ALERT 4' => 'ALERT 4')); !!}
	 {!! Form::hidden('caseID', $crisis->caseID ) !!}
	 {!! Form::submit('Update')!!}
	 {!! Form::close()!!}
	 </td>
	 <td> 
	 {!!Form::open(array('url'=>'deescalateCrisis','method'=>'post','onsubmit' => 'return ConfirmDeescalate()')) !!}
	 		 {!! Form::submit('De-escalate')!!}
			 {!!  Form::hidden('caseID', $crisis->caseID ) !!}
	 {!! Form::close()!!}
	 </td>
	 </tr>
	   @endforeach
  
	
  </tbody>
  </table>
@stop