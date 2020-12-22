@extends ('homepagelayout')
<!DOCTYPE html>
<html>
<head>
	 @yeild<title>IUT Admission TMS</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style >
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
	<form accept-charset="UTF-8" action="insertsschscinfo"  method="post" >
   @csrf
    <legend><u>Contact Information</u></legend>
    <label for="name">Phone No:</label><br /> 
    <input name="contact_no" type="tel" onfocus="this.value=''" value="Enter Value"> <br /> 
    <label for="name">Email: </label><br /> 
    <input name="email" type="email" onfocus="this.value=''" value="Enter Value" ><br />
<br>
<br>

<legend><u>SSC Information</u></legend>
    <label for="name">SSC Roll</label><br > 
    <input name="SSCroll" type="text" onfocus="this.value=''" value="Enter Value"> <br > 
      
      <label for="name">SSC Passing Year</label><br > 
      <select name="SSCPassingYear" onfocus="this.value=''"> 
        <option value="2014">2014</option>
        <option value="2015">2015</option>
      </select><br > 
    <label for="name">SSC Board</label><br > 
    <select name="SSCBoard" onfocus="this.value=''"> 
        <option value="Dhaka">Dhaka</option>
        <option value="Barishal">Barishal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Comilla">Comilla</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Jessore">Jessore</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Sylhet">Sylhet</option>
      </select><br >
<br>
<br>

    <legend><u>HSC Information</u></legend>
    <label for="name">HSC Roll</label><br > 
    <input name="HSCroll" type="text" onfocus="this.value=''" value="Enter Value" > <br > 
      
    <label for="name">HSC Passing Year</label><br > 
    <select name="HSCPassingYear" onfocus="this.value=''"> 
        <option value="2016">2016</option>
        <option value="2017">2017</option>
      </select><br >

    <label for="name">HSC Board</label><br > 
    <select name="HSCBoard" onfocus="this.value=''"> 
        <option value="Dhaka">Dhaka</option>
        <option value="Barishal">Barishal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Comilla">Comilla</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Jessore">Jessore</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Sylhet">Sylhet</option>
      </select><br ><br>

    <legend><u>Registration Information</u></legend>
    <label for="name">Registration No:</label><br > 
    <input name="Reg_no" type="text" onfocus="this.value=''" value="Enter Value"> <br > 
   
<br>
<p align="left"><input type="submit" name="submit" value="NEXT"></p><br>
</form>


@endsection
</body>
</html>