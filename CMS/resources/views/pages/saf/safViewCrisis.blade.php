
@extends('layouts.safSidebar')
@section('content')
	<p><b><center>Privilege level : SAF Commander</center></b></p>
		
	
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
	 
    </tr>
  </thead>

  <tbody>
     <tr>
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
	 </tr>
	   @endforeach
  
	
  </tbody>
  </table>

@stop