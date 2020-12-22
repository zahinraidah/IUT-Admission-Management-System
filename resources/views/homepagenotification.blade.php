@extends ('homepagelayout')
<!DOCTYPE html>
<html>
<head>
    <title>IUT Admission System</title>
</head>
<body>
    @section('content')
    <style>

  .mydiv {
  width:100%;
  height:50%;
  color:black;
  font-weight:bold;
  animation: myanimation 10s infinite;
}

@keyframes myanimation {
  0% {background-color: red;}
  25%{background-color:yellow;}
  50%{background-color:green;}
  75%{background-color:brown;}
  100% {background-color: red;}
}      

.container {
  position: relative;
  width: 100%;
  max-width: 700px;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #d3d3d3;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
            
            .sidebar {
                margin-left: 75px;
                padding: 0;
                width: 75%;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
            }
            .sidebar ul {
                list-style-type: none;
                margin-top: 20px;
            }

            
  
    </style>

    <div class="admission">
        <center><h1><u><b>ADMISSION 2019-20</b></u></h1></center>
    </div>
    
        <div class="container">
            
        <ul type="none">
           <li><a href="#"><h4>How to apply (Bangladesh Students)</a></li>
            <li><a href="#"><h4>How to apply (International Students)</a></li>
        </ul>
         <div class="mydiv">MERIT LIST PUBLISHED: CHECK NOTICES</div>
         <img src="IMAGE.jpg" alt="Snow" style="width:100%">

         
        </div>
        
    </div>
@endsection
</body>
</html>