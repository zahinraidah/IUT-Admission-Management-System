<?php
use \App\Http\Controllers\Applicantcontroller;
//$my= Applicantcontroller::dashpreview($session);
?>

@extends('applicantloginlayout')

<!DOCTYPE html>
<html>
<head>
	<style>  

     .notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
     
     .info 
     {
            color: black;
            text-align: left;
            margin-top: 5px;
            margin-left: 10px;
            padding: 14px 16px;
            text-decoration: none;
            font-family: "Verdana", Sans-serif;
     }
        </style>
</head>
<body>
	@section ('content')

<div class="info">
@if(isset($alldata))
@foreach($alldata as $row)
        <b>Registration No   :</b>  {{ $row['RegistrationNo'] }}<br>
        <b>Name              :</b>  {{ $row['Name']}}<br>
        <b>Date Of Birth :</b>     {{ $row['DOB']}}<br><br>
        <h4><b><u>Academic Information of SSC Examination:</u></b><br></h4>
        <b>G.P.A of SSC :</b>      {{ $row['SSC_GPA'] }}<br><br>
        <h4><b><u>Academic Information of HSC Examination:</u></b><br></h4>
        <b>G.P.A of HSC :</b>      {{ $row['HSC_GPA']}}<br>
        <b>Mathematics :</b>       {{ $row['HSC_Math']}}<br>
        <b>Physics :</b>           {{ $row['HSC_Physics']}}<br>
        <b>Chemistry :</b>         {{ $row['HSC_Chemistry']}}<br>
        <b>English :</b>           {{ $row['HSC_English']}}<br>

        @if (session()->has ('eligible'))
                 {{session()->get('eligible')}}
                 @endif
    <br>
    <br>
    <br>
    <?php if(session()->get('eligible')!=NULL){?>
    <div class="admit">
        <h4><b><u>DOWNLOAD ADMIT CARD</u></b><br></h4>
           <div class="mydiv">
            <a href="\admitcard" class="notification">
           <span><b>ADMIT CARD</b></span>
           <span class="badge">*</span>
            </a>
           </div>
    </div>
     <?php } ?>

@endforeach
@endif
</div>

	@endsection
</body>
</html>

