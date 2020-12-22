@extends ('homepagelayout')
<!DOCTYPE html>
<html>
<head>
	<title>IUT Admission System</title>
</head>
<body>
	@section('content')
    <style>
            .admission {
                float: middle;
                color: #228B22;
            }
            body {
                margin: 0;
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

            .button {
                background-color: #5cb85c; /* Green */
                border: none;
                color: #5cb85c;
                padding: 15px 35px;
                margin-top: 20px;
                margin-left: 38px;
                text-align: center;
                text-decoration: none;
                font-size: 16px;
            }
  
    </style>

    <div class="admission">
        <center><h1><u><b>ADMISSION 2019-20</b></u></h1></center>
    </div>
    <div class="sidebar">
        <br>
        <p><font align="center" face="arial" size="8" color="red"><b>SHORTLIST AVAILABLE NOW!!!!!</b></font></p>
        <br>
        <p><font face="arial" size="4" color="red">The list of <b>Shortlisted Applicants</b> has been published. Login to your account and check your status.</font></p>
    </div>
@endsection
</body>
</html>