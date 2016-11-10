@extends('layouts.emailSidebar')
@section('content')
<b><center>Privilege level : Email Manager</center></b>
<body>
    <h1>Create Email</h1>
	
	
	  
	  
	  
{!! Form::open(array('url'=>'sendEmail','method'=>'post','onsubmit'=>'return confirm("Sent!");'))!!}
      <fieldset>
        <legend>New Email </legend>

        <div>
          <label for="">
            <strong>Subject : </strong>
          </label>
          <input id="subject" name="subject" type="text">
        </div>
		
		   <div>
          <label for="senderName">
            <strong>Operator Name :</strong>
          </label>
          <input id="senderName" name="senderName" type="text">
        </div>
		
        <div>
          <label for="message">
            <strong>Message :</strong>
          </label>
          <textarea id="message" name="message"></textarea>
        </div>
      </fieldset>
	<p>
	<center>
	 </p>
	      {!! Form::submit('Create')!!}
     </p>
   	 {!! Form::close()!!}
</center>
</body>
@stop