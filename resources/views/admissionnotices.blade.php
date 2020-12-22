@extends ('homepagelayout')

<!--@section ('title')
	<h1>Admission Notices</h1>
	<br>
@endsection-->

<!DOCTYPE html>
<html>
<head>
	<title>Admission Notices</title>
	<style>
		table.notices {
  border: 0px solid #F2F2F2;
  background-color: #FFFFFF;
  width: 100%;
  height: 200px;
  text-align: left;
}
table.notices td, table.notices th {
  border: 2px solid #F2F2F2;
  padding: 5px 2px;
}
table.notices tbody td {
  font-size: 13px;
}
table.notices tr:nth-child(even) {
  background: #F2F2F2;
}
table.notices thead {
  background: #F2F2F2;
  background: -moz-linear-gradient(top, #F2F2F2 100%);
  background: -webkit-linear-gradient(top, #F2F2F2; 100%);
  background: linear-gradient(to bottom, #F2F2F2 100%);
  border-bottom: 2px solid #F2F2F2;
}
table.notices thead th {
  font-size: 15px;
  color: #000000;
  border-left: 4px #F2F2F2;
}
table.notices thead th:first-child {
  border-left: none;
}

table.notices tfoot {
  font-size: 14px;
  color: #FFFFFF;
  background: #F2F2F2;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 0%, ##F2F2F2 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 0%, ##F2F2F2 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 0%, ##F2F2F2 100%);
  border-top: 2px solid #444444;
}
table.notices tfoot td {
  font-size: 2px;
}
table.notices tfoot .links {
  text-align: right;
}
table.notices tfoot .links a{
  display: inline-block;
  background: #F2F2F2;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
	</style>
</head>
<body>
@section('content')
	<div class="content-container section">
                <center><h2>Admission Notice</h2></center>
<div>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>NOTICE TITLE</th>
        <th>DOWNLOAD/Link</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>
            <a href="http://localhost/admin/appmeritlist.php">Merit List</a>
          </td>
          <td>
            <a href="http://localhost/admin/appmeritlist.php">pdf</a>
          </td>
        </tr>
        <tr>
          <td>Admission advertisement for host country students</td>
          <td>
            <a href="http://admission.iutoic-dhaka.edu/assets/admission/admission_advertise.pdf">pdf</a>
          </td>
        </tr>

    </tbody>
  </table>


</div>
<script>
  $('#admission_notices').addClass('active')

</script>
            </div>
@endsection
</body>
</html>