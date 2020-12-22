@extends('adminpanellayout')

<!DOCTYPE html>
<html>
<head>
	<style>
                .navbar2 ul {
            width: 100%;
            list-style-type: none;
            margin: 0;
            margin-top: -20px;
            padding: 0;
            overflow: hidden;
            background-color: #EEEFEE;
        }
        .navbar2 li {
            float: left;
        }
        .navbar2 li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar2 li a:hover {
            background-color: #4CAF50;
        }
        .navbar2 li {
            border-right: 1px solid #E5E5E5;
        }
        .navbar2 li:last-child {
            border-right: none;
        }
        .active {
            background-color: #4CAF50;
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
                display: inline-block;
                font-size: 16px;
            }
        </style>
</head>
<body>
	@section ('content')

            <div class="navbar2">
            <ul>
                <li><a href="/adminlogin">Logout</a></li>
            </ul>
            </div>
	@endsection
</body>
</html>

