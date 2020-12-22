<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yeild<title>IUT Admission TMS</title>
    <link rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <style>
        nav{
            width: 100%;
            height: 30px;
            background-color: #228B22;
            line-height: 90px;
            position: fixed;
            top: 0;
        }
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
        .navbar ul {
            width: 100%;
            list-style-type: none;
            margin: 0;
            margin-top: 50px;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        .navbar li {
            float: left;
        }
        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar li a:hover {
            background-color: #4CAF50;
        }
        .navbar li {
            border-right: 1px solid #bbb;
        }
        .navbar li:last-child {
            border-right: none;
        }
        .active {
            background-color: #4CAF50;
        }
    </style> 
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
                <li><a href="welcome.blade.php">Home</a></li>
                <li><a href="#news">Admission Notices</a></li>
                <li><a href="/offered">Offered Programs</a></li>
                <li><a href="http://admission.iutoic-dhaka.edu/admission_information/scholarship">Scholarship Information</a></li>
                <li><a href="/admissionprocedure">Admission Procedure</a></li>
                <li><a href="/applicantlogin">Applicant's Login</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/contact">Contact</a></li>
                <li style="float:right"><a class="active" href="http://www.iutoic-dhaka.edu/">Main Site</a></li>
            </ul>
            </div>

            <div class="container">
                        @yield('content')
            </div>

    </body>
</html>
