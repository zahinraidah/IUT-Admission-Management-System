<?php include 'dbconnection.php';

//$_SESSION['username'];
 // unset($_SESSION);

  if(isset($_POST['save'])){
    $noc=$_POST['noc'];
    echo $noc;

      $sql2 = "SELECT * FROM final_list LIMIT ".$_POST['noc']; 
      $result = $conn->query($sql2);
      while($row = $result->fetch_assoc()) {
        $id=$row["ID"]; 
        $pin=$row["PIN"]; 
        $reg=$row["Registration_No"];
        $name=$row["Name"];
        $gpa_score=$row["GPA_SCORE"];
        $pcme_score=$row["PCME_Score"];

        $sql="INSERT INTO `shortlist` (`roll`, `id`, `pin`, `reg_no`, `name`, `gpa_score`, `pcme_score`) VALUES (NULL, '$id', '$pin', '$reg', '$name', '$gpa_score', '$pcme_score');";

        //echo $sql;
      

    if ($conn->query($sql) === TRUE) {
      //echo "Success";
      header('location: dashboard.php');
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  }
?>