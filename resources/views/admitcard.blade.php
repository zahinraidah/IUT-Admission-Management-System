
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<style>
   .iut img{
            float: left;
            width: auto;
            height: 120px;
            margin-left: 50px;
            margin-top: -10px;
        }
        .oic img{
            float: right;
            width: auto;
            height: 120px;
            margin-right: 50px;
            margin-top: -10px;
        }
        .iuttxt{
            float: center;
            margin-left: 250px;
            margin-top: 50px;
          }
          table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
   
    <!-- Right Column -->
    <div class="w3">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16" ><center>
        ADMIT CARD</center></h2>

        <div class="w3-container">
          <div class="iut">
                <img src="iutpic.png">
            </div>
            <div class="oic">
                <img src="oicpic.png">
            </div>
          <div class="iuttxt">
                <h2><center>ISLAMIC UNIVERSITY OF TECHNOLOGY</center></h2>
                <h4> <center> A SUBSIDIARY ORGAN OF ORGANIZATION OF ISLAMIC COOPERATION (OIC)</center></h4>
            </div>
          <h5 class="w3-opacity"><b></b></h5>
          @if(isset($alldata))
         @foreach($alldata as $row)
         <table>
        <tr>
         <td><h4><b>ADMISSION ROLL : {{ $row['roll']}}  </b></h4></td>
                 
         <td> <h4><b>PIN NO : {{ $row['pin']}}</b><br></h4></td>
        </tr>
      </table>

        <h4><b>NAME </b>: {{ $row['name']}}<br></h4>
              
        <h4><b>HSC REGISTRATION NUMBER </b>: {{ $row['reg_no']}}<br></h4>
                
        
        <h4><b>SEAT PLAN</b> : {{ $row['seat']}}<br></h4>
            
        <h5><b>DATE</b> : 21-NOV-2019<br></h5>
            
        <h5><b>TIME</b> : 10:30 AM<br></h5>
            

        <h5><font color="red">INSTRUCTIONS:</font></h5>
        <p>
          1. Candidate must bring following:
           Admid card, Original Registration Card or Passport.
           <br>
           2. Programmabale calculators are not allowed.
        </p>
        
        

@endforeach
@endif
          <hr>
        </div>
        
        


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>



</body>
</html>
