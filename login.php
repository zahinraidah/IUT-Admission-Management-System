<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>IUT Admission Test Management System</title>
    <link rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div id="main">
                <nav></nav>
            </div>


            <div class="iut">
                <img src="iutpic.png">
            </div>


            <div class="oic">
                <img src="oicpic.png">
            </div>


            <div class="iuttxt">
                <h1>ISLAMIC UNIVERSITY OF TECHNOLOGY</h1>
                <h4>  A SUBSIDIARY ORGAN OF ORGANIZATION OF ISLAMIC COOPERATION (OIC)</h4>
            </div>


            <div class="navbar">
            <ul>
                <li><a href="/homepage#contact">Home</a></li>
                <li><a href="/admissionnotices">Admission Notices</a></li>
                <li><a href="/admissionprocedure">Admission Procedure</a></li>
                <li style="float:right"><a class="active" href="http://www.iutoic-dhaka.edu/">Main Site</a></li>
            </ul>
            </div>

  <div class="header">
  	<h2>Login</h2>
  </div> 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><b>Login</b></button>
  	</div>
  </form>
</body>
</html>