<?php
//use \App\Http\Controllers\TransactionController;
//$flag= TransactionController::verifyTransactionID($id);
//echo $flag;
?>

@extends ('applicantloginlayout')

<!DOCTYPE html>
<html>
<head>
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
     
		<div class="tt">
		<form accept-charset="UTF-8" action="paymentVerify"  method="post" >
			@csrf
			
				<label for="name">Transaction Type:</label>
				<br>
				 <select name="TransactionType" onfocus="this.value=''"> 
					
						
						<option value="bkash">BKash</option>
						<option value="rocket">Rocket</option>
						
					</select>
				<br><br>

				<label for="name">Transaction ID:</label><br > 

				
				<input name="TransactionID"  type="text" onfocus="this.value=''" value="Enter Value"> 
				<br> 
				<br>
				<input type="submit" name="submit" value="Confirm">
			
		</form>
	</div>
		@endsection
</body>
</html>
