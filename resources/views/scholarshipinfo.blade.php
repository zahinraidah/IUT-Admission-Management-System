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

 <div class="content-container section">
                
    <div class="row">
        <div class="container-fluid">

                            <center><h2>SCHOLARSHIP INFORMATION</h2></center>
<hr style="border=0; border-top: 3px double #8c8c8c;">
<a id="ug_scholarship">&nbsp;</a>
<div>
    <h2>Undergraduate Programmes</h2>
    <hr>
    <a id="bsc_scholarship">&nbsp;</a>
    <div>
        <h3>B.Sc. Engineering and BBA</h3>

        <h3>FULL OIC SCHOLARSHIP</h3>
        <ul>
<!--            <li>Full OIC scholarships for BSc Engineering programmes are only for nominated International candidates.</li>
            <li>International candidates without nomination will not get the full OIC scholarship.</li>
            <li>Scholarships will be distributed among the nominated eligible students of OIC member states equally.</li> -->
            <li>Two full OIC scholarship for host country are awarded to two top ranked admitted students in the combined merit list of the admission process. But they have to deposit a refundable amount of US$500.00 which will be refunded after completing one year.</li>
<!--            <li>40 full OIC scholarships are awarded for the following programmes:</li> -->
        </ul>
<!--        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>PROGRAMMES</th>
                    <th>No. of scholarships</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ME</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>EEE</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>CSE</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td align="right">Total</td>
                    <td>40</td>
                </tr>
            </tbody>
        </table> -->

        <h3>PARTIAL OIC SCHOLARSHIP</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">DEPARTMENT</th>
                    <th rowspan="2">PROGRAMMES</th>
                    <th colspan="2">SEATS
                        </th>
                </tr>
                <tr>
                    
                    <th>Host
                        </th>
                        <th>International
                        </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MPE</td>
                    <td>Mechanical Engineering (ME)</td>
                    <td>20</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>EEE</td>
                    <td>Electrical and Electronic Engineering (EEE)</td>
                    <td>40</td>
                    <td>20</td>
                </tr>
                <tr>
                    <!-- <td rowspan="2" style="vertical-align: middle;">CSE</td> -->
                    <td>CSE</td>
                    <td>Computer Science and Engineering (CSE)</td>
                    <td>20</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right">Total</td>
                    <td>80</td>
                    <td>40</td>
                </tr>
            </tbody>
        </table>
        <br>
        <ul>
<!--            <li>The International students must have to apply through their nominating authority.</li> -->
<!--            <li>Partial scholarships are distributed among nominated eligible students of applied member states equally.</li> -->
            <li>Additional scholarships for the Host country may be considered if there is any vacant scholarship after the admission of the international students.</li>
<!--            <li>International selected candidates must have to pay their fees within 15 October 2019, otherwise seats will be declared as vacant. In such case, the remaining scholarships will be distributed among host country students.</li>
            <li>Residential facility will be  provided for all the admitted students.</li> -->
            <li>Host country students get this partial scholarship based on merit position in the admission test combined score.</li>
        </ul>

        <h3>WITHOUT OIC SCHOLARSHIP (SELF-FINANCED)</h3>
<!--        <ul>
            <li>International students without nomination can apply in this category.
                <ul>
                    <li>Subject to the satisfactory minimum academic requirements, international students will get direct admission with prior payment of fees.</li>
                </ul>
            </li>
        </ul> -->
        <table class="table table-striped table-bordered">
            <caption>Without OIC Scholarship (Self-financed) seat distribution</caption>
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
                    <td>10</td>
                </tr>
                <tr>
                    <td>Industrial Production Engineering (IPE)*</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>EEE</td>
                    <td>Electrical and Electronic Engineering (EEE)</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td rowspan="2" style="vertical-align: middle;">CSE</td>
                    <td>Computer Science and Engineering (CSE)</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>Software Engineering (SWE)*</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>CEE</td>
                    <td>Civil Engineering (CE)*</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>BTM</td>
                    <td>BBA in Technology Management (BTM)*</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right">Total</td>
                    <td>390</td>
                </tr>
            </tbody>
        </table>
        <b>*[In order to attract bright students to join IUT it has been decided to create provision for awarding <u>IUT Partial Scholarship</u> to some students to the above mentioned programmes. Initially 04 (four) top ranked admitted students in the merit list after Admission Test for host country students will be awarded this scholarship.Programme wise distribution of the IUT Partial Scholarship will be announced later. Students availing IUT partial scholarship shall continue to enjoy it for the subsequent years if they maintain the CGPA of 3.75 or above; otherwise their scholarship will be forfeited and they will need to pay the fees as specified in the payment schedule of self-finance students.].
        </b>
    </div>

    <a id="te_scholarship">&nbsp;</a>
    <div>
        <h3>Technical Education</h3>
        <ul>
            <li>All selected candidates under this programme will get Full OIC Scholarships.</li>
            <li>This scholarships are awarded for both host country and Nominated International Students.</li>
            <li>Scholarships are distributed among Nominated Eligible Students of member states equally.</li>
        </ul>
    </div>
</div>
<br>
<a id="pg_scholarship">&nbsp;</a>
<div>
    <h2>Postgraduate Programmes</h2>
    <hr>
    <a id="ms_scholarship">&nbsp;</a>
    <div>
        <h3>Master of Science/Engineering (M.Sc.) and Doctor of Philosophy (PhD)</h3>
        <ul>
            <li>IUT faculty members will receive 100% tuition-waiver at the Ph.D. Level.</li>
            <li>In addition, one full time Ph.D. student per department per year will receive 100% tuition-waiver.</li>
            <li>At the M.Sc. level, IUT faculty members will receive 50% tuition-waiver.</li>
            <li>At the M.Sc. level, two full time students in each department per year will receive 100% tuition-waiver.</li>
        </ul>
    </div>
    <a id="pgte_scholarship">&nbsp;</a>
    <div>
        <h3>Master of Science in Technical Education (MSc.TE)</h3>
        <ul>
            <li>All selected candidates under this programme will get Full OIC Scholarships.</li>
            <li>This scholarship is for both host country and Nominated International Students.</li>
            <li>Scholarships are distributed among Nominated Eligible Students of member states equally.</li>
        </ul>
    </div>
</div>
            
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $('#admission_information').addClass('active');
            console.log('adm_ active');
        });


    </script>

            </div>
@endsection
</body>
</html>