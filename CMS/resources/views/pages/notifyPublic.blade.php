
@extends('layouts.publicSidebar')
@section('content')
	<p><b><center>Privilege level : Email Liaison</center></b></p>
	
	
	
	
	<body>
	

<div style="margin-left:100px">
<label for="id">

            <strong>
			Enter facebook post : </strong>
          </label>
		  
		  
 {!! Form::open(array('url'=>'facebookPost','method'=>'post')) !!}
   {!! Form::text('facebookPost',null,array('class'=>'input' , 'id'=>'facebookPost','style'=>'width:800px')) !!}
	 		 {!! Form::submit('Publish')!!}
	 {!! Form::close()!!}
	 
	 
	 <p>
	 </p>
	 
	    <strong>
			Enter Twitter post : </strong>
          </label>
	  {!! Form::open(array('url'=>'twitterPost','method'=>'post','onsubmit'=>'return confirm("Sent!");')) !!}
      {!! Form::text('tweet',null,array('class'=>'input' , 'id'=>'twitterPost','style'=>'width:800px')) !!}
	 		 {!! Form::submit('Publish')!!}
	 {!! Form::close()!!}
	 
	 	 
	 <p>
	 </p>
	 
	    <strong>
			Enter SMS notification : </strong>
          </label>
	  {!! Form::open(array('url'=>'sendSMS','method'=>'post','onsubmit'=>'return confirm("Sent!");')) !!}
      {!! Form::text('id',null,array('class'=>'input' , 'id'=>'sms','style'=>'width:800px')) !!}
	 		 {!! Form::submit('Send')!!}
	 {!! Form::close()!!}
	 </div>
	 
	 
	 
	 
	 
</body>

@stop