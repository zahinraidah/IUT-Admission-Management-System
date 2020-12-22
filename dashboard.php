<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

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
            <div class="navbar2">
            <ul>
            	<?php  if (isset($_SESSION['username'])) : ?>
						<li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="login.php?logout='1'">Logout</a></li>
				<?php endif ?>
            </ul>
            </div>
            <?php require_once 'process.php'; ?>
            <div class="main">
            	<form action="dashboard.php" method="post">
            	<div class="input-group">
            		<label>Number of Eligible Candidates</label>
                <input type="Number" name="noc">
  				</div>
            	<button type="submit" class="btn" name="save"><b>Generate</b></button>
            </form>
        </div>
        <?php 

          $sql = "SELECT * FROM shortlist"; 
          $result = $conn->query($sql);
          ?>
          <div class="resulttable">
          <table class="w3-table">
            <tr>
              <th>PIN</th>
              <th>Name</th>
            </tr>
          <?php
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {             
          ?>
                <td><?php echo $row["pin"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
              </tr>
          <?php
          }
        }
     $conn->close();
    ?>
    </table>
  </div>
  <button type="submit" class="btn" name="cancel"><a href="dashboard.php">Back</a></button>
</body>
</html>