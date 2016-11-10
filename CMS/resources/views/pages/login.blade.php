<!DOCTYPE html>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Welcome to C.R.U.X Login</title>
	<link rel="stylesheet" type ="text/css" href="assets/css/login.css"/>
	<style>
</style>
    
 
    
  </head>

  <body>


    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	
  {!! Form::open(array('url'=>'login','method'=>'post'))!!}
  <p>
    {!! $errors->first('Error')!!}
	</p>
	<p>
	<font size="45" color="Navy"> C.R.U.X CMS</font>
	
	
	</p>
	<font size="45"> </font>
	  {!! Form::text('name',null,array('placeholder'=>'Enter Username','class'=>'input' , 'id'=>'name' )) !!}
		  {!!Form::password('password',array('placeholder'=>'Enter Password'))!!}
			  {!! Form::submit('Log In')!!}
		{!! Form::close()!!}
    

  </body>
</html>
	
    