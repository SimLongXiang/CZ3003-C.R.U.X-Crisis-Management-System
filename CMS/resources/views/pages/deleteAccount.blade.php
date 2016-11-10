
@extends('layouts.sidebar')
@section('content')

<script>

  function ConfirmDelete()
  {
  var x = confirm("Confirm Delete User?");
  if (x)
    return true;
  else
    return false;
  }

</script>

	<p><b><center>Privilege level : System Admin</center></b></p>

<body>
<div style="margin-left:100px">
<label for="id">

            <strong>
			Enter user ID to be deleted : </strong>
          </label>
		  
		  
 {!! Form::open(array('url'=>'removeUser','method'=>'post','onsubmit' => 'return ConfirmDelete()')) !!}
 
 <p>
{!! $errors->first('message')!!}
</p>
   {!! Form::text('id',null,array('class'=>'input' , 'id'=>'id')) !!}
	 		 {!! Form::submit('Delete')!!}
	 {!! Form::close()!!}
	 </div>
</body>
@stop