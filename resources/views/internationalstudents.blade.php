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

 <!-- GENERAL INFO-->

 <div class="content-container section">
                
    <div class="row">
        <div class="container-fluid">

                            <div id="international_general_info">
        <center><h3>GENERAL INFORMATION</h3></center>
        <hr style="border=0; border-top: 3px double #8c8c8c;">
        <ul>
            <li>International applicants have to apply through their nominating authority of OIC member states to get full OIC or partial OIC scholarship.</li>
            <li>International applicants have to apply in IUT circulated application form.</li>
            <li>Application form is available at the focal point of the OIC member states. Application form can also be downloaded from the following links:</li>
            <ul>
                <li><a href="http://admission.iutoic-dhaka.edu/assets/admission/Application Form for BSc. Engineering 2019.pdf">Form for Undergraduate ( B.Sc.Engg/BBA/DTE/BSc.TE )</a></li>
                <li><a href="http://admission.iutoic-dhaka.edu/assets/admission/Application Form for MSc and PhD 2019.pdf">Form for Postgraduate ( M.Engg/MSc.Engg/MSc.TE/PhD )</a></li>
            </ul>
            <li>Following items have to be submitted with the application form for the International applicants:</li>
            <ul>
                <li>Attested certificates/transcripts</li>
                <li>English proficiency certificate(if there is any)</li>
                <li>Letter of Nomination (only for nominated candidates)</li>
                <li>Medical Reports</li>
            </ul>
            <li>Application submitted through this online portal will not be considered for any scholarship.</li>
            <li>The online application will only be considered for self-financed programmes.</li>
        </ul>
    </div>
            
        </div>
    </div>
</div>

<!--REQUIREMENTS-->

<div class="content-container section">
                
    <div class="row">
        <div class="container-fluid">

                            <div id="international_entry_requirements">
        <center><h3>ENTRY REQUIREMENTS</h3></center>
        <div style="border=0; border-top: 3px double #8c8c8c;"></div>
        <a id="ug_requirement">&nbsp;</a>
        <div>
            <h3>Undergraduate Programmes</h3>

            <hr>
            <div>
                <h3>BSc Engineering and BBA</h3>
                <p><strong>Duration: 4 years</strong></p>
                <h4><b><i>Student from O/A Level or Equivalent</i></b></h4>
                <ul class="list-unstyled">
                    <li>
                        O Level or Equivalent:
                        <ul>
                            <li>Mathematics, Physics and Chemistry with Minimum grade B, and English with minimum grade C</li>
                        </ul>
                    </li>
                    <li>
                        A Level or Equivalent:
                        <ul>
                            <li>Mathematics, Physics and Chemistry with Minimum grade B</li>
                        </ul>
                    </li>
                    <li>If the transcript provides both grade and marks, then the grades will be considered and marks will be ignored. If the transcript shows only marks, only then marks will be converted into grades according to the following table
                        <table width="450" style="margin: 0px auto;">
                            <thead>
                                <tr>
                                    <th>Marks</th>
                                    <th>O/A level</th>
                                    <th>Grade Point</th>
                                </tr>
                            </thead>
                            <tbody><tr>
                                <td>80-100</td>
                                <td>A/A*</td>
                                <td>5.00</td>
                            </tr>
                            <tr>
                                <td>70-79</td>
                                <td>B</td>
                                <td>4.00</td>
                            </tr>
                            <tr>
                                <td>60-69</td>
                                <td>C</td>
                                <td>3.50</td>
                            </tr>
                        </tbody></table>
                    </li>
                </ul>

            </div>
            <a id="te_requirement">&nbsp;</a>
            <div>
                <h3>Technical Education</h3>
                <ul class="list-unstyled">
                    <li><b>Diploma in Technical Education [DTE], </b>
                        <br>
                        <b>Duration: 1 year</b>
                        <ul>
                            <li>The candidate must have at least 3 years Diploma.</li>
                        </ul>
                    </li>
                    <li>
                        <b>Bachelor of Science in Technical Education [BScTE],</b>
                        <br>
                        <b>Duration: 2 years</b>
                        <ul>
                            <li>The candidate must have DTE.</li>
                        </ul>
                    </li>
                    <li>
                        <b>Bachelor of Science in Technical Education [BScTE],</b>
                        <br>
                        <b>Duration: 1 year</b>
                        <ul>
                            <li>The candidate must have Higher Diploma.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <a id="pg_requirement">&nbsp;</a>
        <div>
            <h3>Postgraduate Programmes</h3>
            <hr>
            <h3>Engineering</h3>
            <a id="ms_requirement"></a>
            <div>
                <h4><b><i>Doctor of Philosophy</i></b></h4>
                <ul>
                    <li>MSc in relevant field or Equivalent</li>
                    <li>Minimum CGPA of 2.5 (out of 4.0) or 3.0 (out of 5.0) in both MSc and BSc levels</li>
                </ul>
                <h4><b><i>Master of Science/Engineering</i></b></h4>
                <ul>
                    <li>BSc in relevant field or Equivalent</li>
                    <li>Minimum CGPA of 2.5 (out of 4.0) in the BSc level</li>
                </ul>
            </div>
            <a id="pgte_requirement">&nbsp;</a>
            <div>
                <h3>Technical Education</h3>
                <ul class="list-unstyled">
                    <li><b>Postgraduate Diploma in Technical Education (PGD DTE) </b>
                        <br>
                        <b>Duration: 1 year</b>
                        <ul>
                            <li>The candidate must have B.Sc.TE or B.Sc.Engg. degree in relevant field
                                with a minimum CGPA of 2.5 (out of 4.0).
                            </li>
                        </ul>
                    </li>
                    <li>
                        <b>Master of Science in Technical Education (M.Sc. TE)</b>
                        <br>
                        <b>Duration: 2 years</b>
                        <ul>
                            <li>The candidate must have B.Sc.TE or B.Sc.Engg. degree in relevant field
                                with a minimum CGPA of 2.5 (out of 4.0).
                            </li>
                        </ul>
                    </li>
                    <li>
                        <b>Master of Science in Technical Education (M.Sc. TE)</b>
                        <br>
                        <b>Duration: 1 year</b>
                        <ul>
                            <li>The candidate must have PGDTE degree in relevant field with a minimum
                                CGPA of 2.5 (out of 4.0).
                            </li>
                        </ul>
                    </li>
                    <li><b>Doctor of Philosophy</b>
                        <br>
                        <ul>
                            <li>Master of Science in Technical Education MSc(TE) or Master of Education in TE </li>
                            <li>Minimum CGPA of 2.5 (out of 4.0) or 3.0 (out of 5.0) in both MSc and BSc levels
                            </li>
                        </ul>
                    </li>                   
                </ul>
            </div>
        </div>
    </div>
            
        </div>
    </div>
</div>

<!--SELECTION PROCESS-->

<div class="content-container section">
                
    <div class="row">
        <div class="container-fluid">

                            <div id="student_selection_process">
        <center><h3>STUDENT SELECTION PROCESS</h3></center>
        <hr style="border=0; border-top: 3px double #8c8c8c;">
        <div>
            <h3>Undergraduate Programmes</h3>
            <br>
            <a id="undergraduate_selection_process"></a>
            <div id="bsc_selection">
                <h4>BSc Engineering &amp; BBA Programmes</h4>
                <p>
                    The final selection of the international candidates will be made by the admission committee based on academic results.
                </p>
                </div>
                <div id="te_selection">
                    <h4>Diploma/BSc in Technical Education </h4>
                <p> The department of TVE will shortlist the eligible candidates based on academic results and experience of the candidate. The admission committee will make the final selection.</p>

                </div>


            </div>

            <h3>Postgraduate Programmes</h3>
            <a id="postgraduate_selection_process"></a>
            <br>
            <div>
            <h4>Master of Science/Engineering and Doctor of Philosophy (PhD)</h4>
                <p>The final selection of a candidate will be made by the relevant Post
                    Graduate Committee (PGC) of the individual academic department, which may also prescribe
                    the required prerequisites to be completed by the candidate before
                    continuing the normal programme, if necessary.</p>
                <h4>Master of Science in Technical Education (MSc.TE) and Doctor of Philosophy (PhD)</h4>
                <p>
                    The final selection of a candidate will be made by the relevant Post
                    Graduate Committee (PGC) of the TVE department, which may also prescribe
                    the required prerequisites to be completed by the candidate before
                    continuing the normal programme, if necessary.
                </p>


            </div>
        </div>
            
        </div>
    </div>
</div>
@endsection
</body>
</html>