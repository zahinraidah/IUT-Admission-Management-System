<?php
//use \App\Http\Controllers\TransactionController;
//$flag= TransactionController::verifyTransactionID($id);
//echo $flag;
?>

@extends ('applicantloginlayout')

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

		 .hdr {
            color: black;
            text-align: left;
            margin-top: 5px;
            width: 100%;
            background-color: #bbb;
            font-size: 35px;
            text-align: center;

         }
         .hdr1 {
            color: red;
            text-align: middle;
            margin-top: 50px;
            width: 100%;
            
            font-size: 30px;
            text-align: center;

         }
		.tt {
			margin-left: 100px;
			margin-top: 50px;
			}
		.button {
			background-color: #5cb85c; /* Green */
			border: none;
			color: #5cb85c;
			padding: 10px 30px;
			margin-top: 20px;
			margin-left: 0px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 18px;
			/* The container must be positioned relative: */
			.custom-select {
				position: relative;
				font-family: Arial;
			}
		}
		.row{
			
		background-color: #d9edd5;
        margin-top: 50px;
             }

         .alert alert-success{
         	background-color:#d9edd5;
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

      <div class="hdr">
        <b>APPLICANT PAYMENT</b>
      </div>

      <div class="hdr1">
        <b>PAYMENT CONFIRMED</b>
      </div>
          
		 
		@endsection
</body>
</html>
