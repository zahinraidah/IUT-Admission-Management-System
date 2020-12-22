<?php
use \App\Http\Controllers\Applicantcontroller;
$mypin= Applicantcontroller::generatePin();
$mypassword=Applicantcontroller::generatePass();
?>

@extends ('homepagelayout')

<!DOCTYPE html>
<html>
<head>
	<style>
	 .button {
                background-color: #5cb85c; /* Green */
                border: none;
                color: #5cb85c;
                padding: 15px 35px;
                margin-top: 20px;
                margin-left: 38px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }


    .container{

       margin-left: 50px;
       text-align: center;
       margin-top: 20px;
       padding: 15px ;
       display: inline-block;
       font-size: 10px;

    }
        </style>
</head>
<body>
    @section ('content')
   <div class="container2" >
      @if (session()->has ('notif'))
      <div class="row" float="middle"  >
        <div class="alert alert-success" >
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
            {{ session()->get('notif')}}
          </button>
        </div>
       </div>
         @endif
      </div>
     
	<p><font face="arial" size="6" color="red"><b>REGISTRATION CONFIRMED!</b></font></p>
	
	<p><font face="arial" size="4"><b>Your pin and password:</b>
		<form accept-charset="UTF-8" action="Genpin" method="post">

			@csrf
  			<label for="name">Pin</label>
  			<input name="pin" type="text" value="<?php echo $mypin;?>" >
  			<label for="name">Password</label>
  			<input name="password" type="text" value="<?php echo $mypassword; ?>" >
  	        <input type="submit" name="submit" value="CONFIRMED">
        </form>
		<br> 
		<br>
	You can use the credentials to log in and update your payment information</b></p>	
	
	@endsection
</body>
</html>
