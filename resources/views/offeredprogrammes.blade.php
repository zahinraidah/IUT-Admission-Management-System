@extends ('homepagelayout')

<!--@section ('title')
  <h1>Admission Notices</h1>
  <br>
@endsection-->

<!DOCTYPE html>
<html>
<head>
  <title>Offered Programmes</title>
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
<center><h2>OFFERED PROGRAMMES</h2></center>
<hr style="border=0; border-top: 3px double #8c8c8c;">
<a id="ug_offered">&nbsp;</a>

<center><h2>Undergraduate Programmes</h2></center>
<a id="bsc_offered">&nbsp;</a>

<h3>B.Sc. Engineering and BBA</h3>

<table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>DEPARTMENT</th>
          <th>PROGRAMMES</th>
          <th>SEATS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2" style="vertical-align: middle;">MPE</td>
          <td>Mechanical Engineering (ME)</td>
          <td>50</td>
        </tr>
        <tr>
          <td>Industrial and Production Engineering (IPE)</td>
          <td>50</td>
        </tr>
        <tr>
          <td>EEE</td>
          <td>Electrical and Electronic Engineering (EEE)</td>
          <td>150</td>
        </tr>
        <tr>
          <td rowspan="2" style="vertical-align: middle;">CSE</td>
          <td>Computer Science and Engineering (CSE)</td>
          <td>100</td>
        </tr>
        <tr>
          <td>Software Engineering (SWE)</td>
          <td>50</td>
        </tr>
        <tr>
          <td>CEE</td>
          <td>Civil Engineering (CE)</td>
          <td>100</td>
        </tr>
        <tr>
          <td>BTM</td>
          <td>BBA in Technology Management (BTM)</td>
          <td>50</td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: right;">Total</td>
          <td>550</td>
        </tr>
      </tbody>
    </table>

<div>
    <h3>Technical Education</h3>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>DEPARTMENT</th>
          <th>PROGRAMMES</th>
          <th>DURATION</th>
          <th>SEATS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="3" style="vertical-align: middle;">TVE</td>
          <td>Diploma in Technical Education [DTE]</td>
          <td>1 Year</td>
          <td>10</td>
        </tr>
        <tr>
          <td rowspan="2" style="vertical-align: middle;">Bachelor of Science in Technical Education [BScTE]</td>
          <td>2 Years</td>
          <td rowspan="2" style="vertical-align: middle;">40</td>
        </tr>
        <tr>
          <td>1 Year</td>
        </tr>
        <tr>
          <td colspan="3" style="text-align: right;">Total</td>
          <td>50</td>
        </tr>
      </tbody>
    </table>
  </div>

<div>
  <center><h2>Postgraduate Programmes</h2></center>
  <hr>
  <a id="ms_offered">&nbsp;</a>
  <div>
    <h3>Master of Science/Engineering and Doctor of Philosophy (PhD)</h3>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>DEPARTMENT</th>
          <th>PROGRAMMES</th>
          <th>SEATS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>MPE</td>
          <td>Mechanical Engineering (ME)</td>
          <td>40</td>
        </tr>
        <tr>
          <td>EEE</td>
          <td>Electrical and Electronic Engineering (EEE)</td>
          <td>40</td>
        </tr>
        <tr>
          <td>CSE</td>
          <td>Computer Science and Engineering (CSE)</td>
          <td>40</td>
        </tr>
        <tr>
          <td>CEE</td>
          <td>Civil Engineering (CE)</td>
          <td>40</td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: right;">Total</td>
          <td>160</td>
        </tr>
      </tbody>
    </table>
  </div>
  <a id="pgte_offered">&nbsp;</a>
  <div>
    <h3>Master of Science and Doctor of Philosophy (PhD) in Technical Education</h3>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>DEPARTMENT</th>
          <th>PROGRAMMES</th>
          <th>DURATION</th>
          <th>SEATS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="4" style="vertical-align: middle;">TVE</td>
          <td>Postgraduate Diploma in Technical Education [PGDTE]</td>
          <td>1 Year</td>
          <td rowspan="3" style="vertical-align: middle;">10</td>
        </tr>
        <tr>
          <td rowspan="2" style="vertical-align: middle;">Master of Science in Technical Education [MScTE]</td>
          <td>2 Years</td>
        </tr>
        <tr>
          <td>1 Year</td>
        </tr>
        <tr>
          <td>Doctor of Philosophy (PhD)</td>
          <td>&nbsp;</td>
          <td>10</td>
        </tr>
        <tr>
          <td colspan="3" style="text-align: right;">Total</td>
          <td>20</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


@endsection
</body>
</html>