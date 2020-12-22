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
<div class="content-container section">
                
    <div class="row">
        <div class="container-fluid">
        <div id="international_general_info">

<!-- GENERAL INFORMATION-->
        <center><h3>GENERAL INFORMATION</h3></center>
        <center>(only Muslim applicants of OIC member countries can apply for admission in IUT)</center>
        <hr style="border=0; border-top: 3px double #8c8c8c;">
        <hr>
        <h2>Host country applicants</h2>
        <ul>
            <li><b>For admission in BSc Engineering and BBA programmes, host country applicants must have to sit for the admission test. Date of the admission test is 28 September 2019.</b></li>
            <li>For admission of the academic Year 2019-2020, candidates upto the <b>4000th</b> position according to the academic score (and associated tie breaking rule as mentioned in the selection process) is stated below:</li>
            <li>For admission in the TVE departments the host country applicants have to complete the online registration process as described in how to <a href="/homepage">apply page</a>.</li>
            <li>For admission in the MSc Engineering/PhD programmes the host country applicants have to complete the online registration process as described in how to <a href="/homepage">apply page</a>.</li>
            <li>All the host country candidates have to pay an admission test/process fees as detailed in the how to apply page.</li>
            <li>Application form for technical and graduate program can be downloaded from the following links:</li>
            <ul>
                <li><a href="http://admission.iutoic-dhaka.edu/assets/admission/Application Form for BSc. Engineering 2019.pdf">Form for Undergraduate ( DTE/BSc.TE )</a></li>
                <li><a href="http://admission.iutoic-dhaka.edu/assets/admission/Application Form for MSc and PhD 2019.pdf">Form for Postgraduate ( M.Engg/MSc.Engg/MSc.TE/PhD )</a></li>
            </ul>
            <li>Applicants must submit the following documents with the application form:</li>
            <ul>
                <li>Attested Certificates/Transcripts</li>
                <li>English proficiency certificate(if there is any)</li>
                <li>Letter of Nomination (only for nominated candidates)</li>
                <li>Medical Reports</li>
            </ul>           
    </ul></div>
            
        </div>
    </div>

<!-- ENTRY REQUIREMENTS -->

    <div class="content-container section">
                
    <div class="row">
        <div class="container-fluid">

                            <center><h2>ENTRY REQUIREMENTS</h2></center>
<hr style="border=0; border-top: 3px double #8c8c8c;">
<a id="ug_requirement">&nbsp;</a>
<div>
    <h2>Undergraduate Programmes</h2>
    <hr>
    <a id="bsc_requirement">&nbsp;</a>
    <div>
        <h3>BSc Engineering and BBA</h3>
        <br>
        <h4><b><i>Student from Host Country under National Curriculum</i></b></h4>
        <ul class="list-unstyled">
            <li>
                <u>SSC or Equivalent:</u>
                <ul>
                    <li>Minimum CGPA 4.50 out of 5.00</li>
                </ul>
            </li>
            <li>
                <u>HSC or Equivalent:</u>
                <ul>
                    <li>Minimum CGPA 4.50 out of 5.00</li>
                    <li>Must have to pass in 2019 or 2018</li>
                </ul>
            </li>
        </ul>

        <h4><b><i>Student from O/A Level or Equivalent </i></b></h4>
        <ul class="list-unstyled">
            <li>
                <u>O Level or Equivalent:</u> 
                <ul>
                    <li>Mathematics, Physics and Chemistry with Minimum grade B, and English with minimum grade C</li>
                </ul>
            </li>
            <li>
                <u>A Level or Equivalent:</u>
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
            <li>Must have to pass in 2019 or 2018</li>
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
                    <li>The candidate must have at least 3 years Diploma with a total of at least 13 years of education.</li>
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
    <h2>Postgraduate Programmes</h2>
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

<!-- SELECTION PROCESS -->

<div class="content-container section">
                
    <div class="row">
        <div class="container-fluid">

                            <center><h2>STUDENT SELECTION PROCESS</h2></center>
<hr style="border=0; border-top: 3px double #8c8c8c;">
<a id="ug_selection">&nbsp;</a>
<div>
    <center><h3>Undergraduate Programmes</h3></center>
    <hr>
    <a id="bsc_selection"></a>
    <div>
        <h3>B.Sc. Engineering and BBA</h3>
        <br>
        <h3>For Host Country</h3>
        <ul>
        <li>Candidates upto 4000th position based on academic scores will be called for admission test.</li>
            <li>Rules for tie breaking in academic score are:
                <ol type="i">
                    <li>HSC-GPA</li>
                    <li>HSC Math</li>
                    <li>HSC Physics</li>
                    <li>HSC Chemistry</li>
                    <li>HSC English</li>
                    <li>HSC Bangla</li>
                    <li>SSC Math</li>
                    <li>SSC Physics</li>
                    <li>SSC Chemistry</li>
                    <li>SSC English</li>
                    <li>SSC Bangla</li>
                </ol>
            </li>
        </ul>
        <h4><b>Combined Merit List</b></h4>

        <ul>
            <li>Host Country students must have to appear in the Admission Test.</li>
            <li>An <b>academic score</b> will be calculated based on SSC/Equivalent and HSC/Equivalent results of selected subjects.
                <p style="padding: 0px auto; font-weight:bold;">Academic Score = SSC-GPA x 8 + HSC-GPA x 12</p>
            </li>
            <li>Total marks obtained in the admission test will be considered as the <b>Test Score</b>.</li>
            <li>The combined merit list will be prepared based on the Academic score and the Test score. The combined score will be calculated as follows: <br>
                <b>Combined Score = Academic Score + Test Score </b></li>

            </ul>
            <br>
            <h4><b>ACADEMIC SCORE CALCULATION (100 Marks)</b></h4>
            <ul>
                <li>Grade Point Average (GPA) based on the grade point (GP) of selected subjects in
                    <ul>
                        <li>SSC/Equivalent (SSC-GPA) </li>
                        <li>HSC/Equivalent (HSC-GPA)</li>
                    </ul>
                </li>
            </ul>
            <br>
            <img src="http://admission.iutoic-dhaka.edu/images/admission_information/academic_score_calc.png" class="img-rounded" alt="Academic Score Calculation" width="85%" height="600">
            <br>
            <ul>
                <li>Marks are only converted to grades if and only if the transcript does not provide the grades.</li>
            </ul>

            <h4><b>TIE BREAKING IN MERIT POSITION WITH EQUAL COMBINED SCORE</b></h4>
            <ul>
                <li>
                    Following criteria (in order of appearance) will be followed to break the tie in the combined merit list.
                    <ol type="i">
                        <li>Test Score</li>
                        <li>Test Math</li>
                        <li>Test Physics</li>
                        <li>Test Chemistry</li>
                        <li>HSC-GPA</li>
                        <li>HSC Math</li>
                        <li>HSC Physics</li>
                        <li>HSC Chemistry</li>
                        <li>SSC Math</li>
                        <li>SSC Physics</li>
                        <li>SSC Chemistry</li>
                        <li>SSC English</li>

                    </ol></li></ul>
                
            

            <h4><b><i>IUT authority reserves the right to take any decision regarding admission</i></b></h4>

        </div>
        <a id="te_selection">&nbsp;</a>
        <div>
            <h3>Technical Education</h3>
            <p>Department will sort the prospective candidates and the admission Committee will select the candidates for admission offer.</p>
        </div>

        <a id="pg_selection">&nbsp;</a>
        <div>
            <h2>Postgraduate Programmes</h2>
            <hr>
            <a id="ms_selection">&nbsp;</a>
            <div>
                <h3>Master of Science/Engineering (M.Sc.) and Doctor of Philosophy (PhD)</h3>
                <p>
                    The final selection of a candidate will be made by the relevant Post
                    Graduate Committee (PGC) in each department, which may also prescribe
                    the required prerequisites to be completed by the candidate before
                    continuing the normal programme, if necessary.
                </p>
            </div>

            <a id="pgte_selection">&nbsp;</a>
            <div>
                <h3>Master of Science in Technical Education (MSc.TE) and Doctor of Philosophy (PhD)</h3>
                <p>
                    The final selection of a candidate will be made by the relevant Post Graduate Committee (PGC) in each department, which may also prescribe the required prerequisites to be completed by the candidate before continuing the normal programme, if necessary.
                </p>
            </div>
        </div>
    </div>
            
        </div>
    </div>
    </div>
@endsection
</body>
</html>