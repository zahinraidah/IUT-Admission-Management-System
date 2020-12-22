@extends ('homepagelayout')


<!DOCTYPE html>
<html>
<head>
	<title>Preview</title>
</head>
<body>
	@section ('content')
	<style>
		.button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: #4CAF50;
                padding: 15px 35px;
                margin-top: 20px;
                margin-left: 38px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
	</style>
		<br>
        



        <br>
        <h3 align="center"> Applicant's Info</h3>
      <table class="table table-bordered">
    <tr>
        <th> contact_no </th>
        <th> email</th>
        <th> SSC Roll </th>
        <th> Year</th>
        <th> SSC Board</th>
        <th> HSC Roll</th>
        <th> Year</th>
        <th> HSC Board</th>
        <th> Reg no</th>
        
        
       
    </tr>
@if(isset($sdata))
@foreach($sdata as $row)
    <tr>
        <td>{{ $row['contact_no'] }}</td>
        <td>{{ $row['email']}}</td>
        <td>{{ $row['SSCroll'] }}</td>
        <td>{{ $row['SSCPassingYear']}}</td>
        <td>{{ $row['SSCBoard']}}</td>
        <td>{{ $row['HSCroll']}}</td>
        <td>{{ $row['HSCPassingYear']}}</td>
        <td>{{ $row['HSCBoard']}}</td>
        <td>{{ $row['Reg_no']}}</td>
        
        
        
    </tr>

@endforeach
@endif
</table>

	<center>
        <button class="button"><a href="/confirmation">CONFIRM</a></button>
    </center>
@endsection
</body>
</html>