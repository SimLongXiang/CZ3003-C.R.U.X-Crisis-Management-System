@extends('layouts.operatorSidebar')
@section('content')
	<p><b><center>Privilege level : Operator</center></b></p>
	<table>
  <thead>
    <tr>
	  <th>Incident case ID</th>
      <th>Incident Name</th>
	  <th>Time of Incident</th>
	  <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  @foreach ($incidents as $incident)
	 <tr>
	 <td>{{ $incident->caseID }}</td>
	 <td>{{ $incident->incidentName }}</td>
	 <td>{!! $incident->datetimeOfIncident !!}</td>
	 <td> 
	 {!! Form::open(array('url'=>'operatorEditIncident','method'=>'post'))!!}
	 {!! Form::hidden('caseID', $incident->caseID ) !!}
	 {!! Form::submit('Update')!!}
	 {!! Form::close()!!}
	 </td>
	 
	 </tr>
	   @endforeach
   

  </tbody>
</table>
@stop