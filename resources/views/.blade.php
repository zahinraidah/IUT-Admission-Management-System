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
        </style>
</head>
<body>
	@section ('content')
	<p><font face="arial" size="6" color="red"><b>REGISTRATION CONFIRMED!</b></font></p>
	
	<p><font face="arial" size="4"><b>A pin and password has been sent to your provided contact number and e-mail address.
		<br> 
	You can use the credentials to log in and update your payment information</b></p>	
	
	<center>
		<button class="button"><a href="/homepage">GO BACK TO MAIN SITE</a></button>
	</center>
	@endsection
</body>
</html>
