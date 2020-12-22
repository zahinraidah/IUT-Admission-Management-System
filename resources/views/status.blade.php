<?php
//use \App\Http\Controllers\Applicantcontroller;
//$my= Applicantcontroller::dashpreview($session);
?>

@extends('applicantloginlayout')

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
     .info 
     {
            color: black;
            text-align: left;
            margin-top: 5px;
            margin-left: 10px;
            padding: 14px 16px;
            text-decoration: none;
            font-family: "Verdana", Sans-serif;
            font-size: 16px;
     }

     .sts {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 6px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        margin-left: 10px;
        cursor: pointer;
     }
        </style>
</head>
<body>
    @section ('content')

<div class="hdr">
    <b>YOUR STATUS</b>
</div>

<div class="info">
@if(isset($stat))
@foreach($stat as $row)
     
        
        
        <?php
        if($row['ApplicationComplete']!=NULL) {?>
        APPLICATION COMPLETE <div class="sts">{{ $row['ApplicationComplete']}}</div>
        <?php } ?>
        <br>
        <?php
        if($row['PaymentConfirm']!=NULL) {?>
        PAYMENT COMPLETE <div class="sts">{{ $row['PaymentConfirm']}}</div>
        <?php } ?>
        <br>
        <?php
        if($row['ShortList']!=NULL) {?>
        SHORT LISTED <div class="sts">{{ $row['ShortList']}}</div>
        <?php } ?>
        <br>
        
       
        

@endforeach
@endif
</div>

    @endsection
</body>
</html>

