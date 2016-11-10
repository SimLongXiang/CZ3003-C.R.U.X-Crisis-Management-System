@extends('layouts.operatorSidebar')
@section('content')
<script>

  function ConfirmUpdate()
  {
  var x = confirm("Confirm update details?");
  if (x)
    return true;
  else
    return false;
  }
  
</script>
	<p><b><center>Privilege level : Operator</center></b></p>
  <body>
    <h1>Edit Incident</h1>

	{!! Form::open(array('url'=>'operatorUpdatesIncident','method'=>'post','onsubmit' => 'return ConfirmUpdate()'))!!}
      <fieldset>
        <legend>Edit Incident</legend>
		  <div>
          <label for="caseID">
            <strong>Case ID : </strong>
          </label>
		   {!! Form::text('caseID',$incidents->caseID,array('class'=>'input' ,'id'=>'caseID')) !!}
        </div>
        <div>
          <label for="incidentName">
            <strong>Incident Name : </strong>
          </label>
  
		   {!! Form::text('incidentName',$incidents->incidentName,array('class'=>'input' ,'id'=>'incidentName')) !!}
        </div>
		
		   <div>
          <label for="operatorName">
            <strong>Operator Name :</strong>
          </label>  
		   {!! Form::text('loggedBy',$incidents->loggedBy,array('class'=>'input' ,'id'=>'loggedBy')) !!}
        </div>
		  <div>
          <label for="incidentLocation">
            <strong>Incident Location:</strong>
          </label>
		   {!! Form::text('incidentLocation',$incidents->incidentLocation,array('class'=>'input' ,'id'=>'incidentLocation')) !!}
        </div>
			   <div>
          <label for="incidentTiming">
            <strong>Incident Timing :</strong>
          </label>
		    <input id="datetimeOfIncident" name="datetimeOfIncident" type="datetime-local">
        </div>
		
        <div>
          <label for="incidentDescription">
            <strong>Incident Description :</strong>
          </label>
		  <p>
		  </p>
		    {!! Form::textarea('description',$incidents->description,array('class'=>'input' ,'id'=>'description')) !!}
        </div>
		
		   <div>
          <label for="alertLevel">
            <strong>Alert Level :</strong>
          </label>
          <select name="alertLevel" id="alertLevel">
		 <option value="AlERT 1">Alert 1</option>
		 <option value="ALERT 2">Alert 2</option>
		 <option value="AlERT 3">Alert 3</option>
		 <option value="AlERT 4">Alert 4</option>
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
        
		    {!! Form::datetime('remarks',$incidents->remarks,array('class'=>'input' ,'id'=>'remarks')) !!}
        </div>
      </fieldset
	 
      <p>
         {!! Form::submit('Update')!!}
      </p>
   	 {!! Form::close()!!}

  </body>

@stop
