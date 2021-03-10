<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transcript form</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>
    <!--container for form begins here-->
    <div class="container" id="transcript_form">
        <h1>Transcript Input details</h1>
        <p>Fill in the form below to display your sessional Transcript<br>
        <b>Note:</b> Ensure you input the correct details in order to get the right results.</p>
        <!--main form begins here-->
         <form name="TranscriptForm" action="Transcript.php" method="POST" target="" enctype="multipart/form-data"> <!--target="_blank"-->
    
            <div class="form-group">
                <label for="text"> School name:</label><br>
                <input name="Schoolname" id="schoolNameInput" placeholder="Enter your school name here...">
            </div>
            <div class="form-group">
                <label for="text">Department:</label><br>
                <input name="Department" class="form-control" id="departmentInput" placeholder="e.g Computer Engineering">
            </div>
            <div class="form-group">
                 <label for="text">Faculty:</label><br>
                 <input name="Faculty" class="form-control" id="facultyInput" placeholder="e.g Engineering" rows="2">
            </div>
            <div class="form-group">
                 <label for="text">School Address:</label><br>
                <input name="Schooladdress" class="form-control" id="schoolAddressInput" placeholder="Enter your school's address here.." rows="2">
                
            </div>
            <fieldset>
                <legend>Personal Information:</legend>
            <div class="form-group">
                    <label for="text">Full Name:</label><br>
                   <input name="FullName" class="form-control" id="studentNameInput" placeholder="Enter your full name here.." rows="2">
                   
            </div>
            <div class="form-group">
                    <label for="text">Matriculation/Registration number:</label><br>
                   <input name="Matno" class="form-control" id="studentNameInput">
                   
            </div>
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Level:</label><br>
                    <select class="form-control" id="studentLevelInput" name="studentLevel">
                        <option>100</option>
                        <option>200</option>
                        <option>300</option>
                        <option>400</option>
                        <option>500</option>
                        <option>600</option>
                        <option>700</option>
                    </select>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Academic Session:</label><br>
                   <input name="Academicsession" type="text" class="form-control" id="academicSessionInput" placeholder="Enter your Academic Session here.." rows="2">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlInput1">Email address:</label><br>
                    <input name="Email" type="email" class="form-control" id="studentEmailInput" placeholder="name@example.com">
            </div>
            </fieldset><br><br>
        

        
            <strong>**Upload your school logo here**</strong>
            Select a file: <input type="file" name="myFile" id="myFile"><br><br>

            <fieldset>
                <legend>Academic Information:</legend>
                <table>
            <tr>
                    <th>Course</th>
                    <th>Grade</th>
                    <th>Credit Load</th>
            </tr>
            <tr>
                <td>
                    <input type="text" class="courses" name="course1">
                </td>
                <td>
                    <input list="Grade" id="grade1" name="grade1">
                    <datalist id="Grade">
                        <option value="5">A</option>
                        <option value="4">B</option>
                        <option value="3">C</option>
                        <option value="2">D</option>
                        <option value="1">E</option>
                        <option value="0">F</option>  
                    </datalist>                  
                    <!-- <input type="text" id="grade1"> -->
                </td>
                <td>
                        <input list="Credit_Load" id="credit1" name="credit1">
                        <datalist id="Credit_Load">
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                                <option value="0">0</option>  
                        </datalist> 
                            <!-- <input type="text" id="credit1"> -->
                </td>
            </tr>
            <tr>
                    <td>
                        <input type="text" class="courses" name="course2">
                    </td>
                    <td>
                        <input list="Grade" id="grade2" name="grade2">
                        <datalist id="Grade">
                            <option value="5">A</option>
                            <option value="4">B</option>
                            <option value="3">C</option>
                            <option value="2">D</option>
                            <option value="1">E</option>
                            <option value="0">F</option>  
                        </datalist>                  
                        <!-- <input type="text" id="grade2"> -->
                    </td>
                    <td>
                            <input list="Credit_Load" id="credit2" name="credit2">
                            <datalist id="Credit_Load">
                                    <option value="10">10</option>
                                    <option value="9">9</option>
                                    <option value="8">8</option>
                                    <option value="7">7</option>
                                    <option value="6">6</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>  
                            </datalist> 
                                <!-- <input type="text" id="credit2"> -->
                    </td>
                </tr>
                <tr>
                        <td>
                            <input type="text" class="courses" name="course3">
                        </td>
                        <td>
                            <input list="Grade" id="grade3" name="grade3">
                            <datalist id="Grade">
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                                <option value="0">F</option>  
                            </datalist>                  
                            <!-- <input type="text" id="grade3"> -->
                        </td>
                        <td>
                                <input list="Credit_Load" id="credit3" name="credit3">
                                <datalist id="Credit_Load">
                                        <option value="10">10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">0</option>  
                                </datalist> 
                                    <!-- <input type="text" id="credit3"> -->
                        </td>
                    </tr>
                    <tr>
                            <td>
                                <input type="text" class="courses" name="course4">
                            </td>
                            <td>
                                <input list="Grade" id="grade4" name="grade4">
                                <datalist id="Grade">
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                    <option value="0">F</option>  
                                </datalist>                  
                                <!-- <input type="text" id="grade4"> -->
                            </td>
                            <td>
                                    <input list="Credit_Load" id="credit4" name="credit4">
                                    <datalist id="Credit_Load">
                                            <option value="10">10</option>
                                            <option value="9">9</option>
                                            <option value="8">8</option>
                                            <option value="7">7</option>
                                            <option value="6">6</option>
                                            <option value="5">5</option>
                                            <option value="4">4</option>
                                            <option value="3">3</option>
                                            <option value="2">2</option>
                                            <option value="1">1</option>
                                            <option value="0">0</option>  
                                    </datalist> 
                                    <!-- <input type="text" id="credit4"> -->
                            </td>
                        </tr>
                        <tr>
                                <td>
                                    <input type="text" class="courses" name="course5">
                                </td>
                                <td>
                                    <input list="Grade" id="grade5" name="grade5">
                                    <datalist id="Grade">
                                        <option value="5">A</option>
                                        <option value="4">B</option>
                                        <option value="3">C</option>
                                        <option value="2">D</option>
                                        <option value="1">E</option>
                                        <option value="0">F</option>  
                                    </datalist>                  
                                    <!-- <input type="text" id="grade5"> -->
                                </td>
                                <td>
                                        <input list="Credit_Load" id="credit5" name="credit5">
                                        <datalist id="Credit_Load">
                                                <option value="10">10</option>
                                                <option value="9">9</option>
                                                <option value="8">8</option>
                                                <option value="7">7</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                                <option value="0">0</option>  
                                        </datalist> 
                                            <!-- <input type="text" id="credit5"> -->
                                </td>
                            </tr> 

                            <tr>
                <td>
                    <input type="text" class="courses" name="course6">
                </td>
                <td>
                    <input list="Grade" id="grade6" name="grade6">
                    <datalist id="Grade">
                        <option value="5">A</option>
                        <option value="4">B</option>
                        <option value="3">C</option>
                        <option value="2">D</option>
                        <option value="1">E</option>
                        <option value="0">F</option>  
                    </datalist>                  
                
                </td>
                <td>
                        <input list="Credit_Load" id="credit6" name="credit6">
                        <datalist id="Credit_Load">
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                                <option value="0">0</option>  
                        </datalist> 
                            
                </td>
            </tr>
            <tr>
                    <td>
                        <input type="text" class="courses" name="course7">
                    </td>
                    <td>
                        <input list="Grade" id="grade7" name="grade7">
                        <datalist id="Grade">
                            <option value="5">A</option>
                            <option value="4">B</option>
                            <option value="3">C</option>
                            <option value="2">D</option>
                            <option value="1">E</option>
                            <option value="0">F</option>  
                        </datalist>                  
                        
                    </td>
                    <td>
                            <input list="Credit_Load" id="credit7" name="credit7">
                            <datalist id="Credit_Load">
                                    <option value="10">10</option>
                                    <option value="9">9</option>
                                    <option value="8">8</option>
                                    <option value="7">7</option>
                                    <option value="6">6</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>  
                            </datalist> 
                                
                    </td>
                </tr>
                <tr>
                        <td>
                            <input type="text" class="courses" name="course8">
                        </td>
                        <td>
                            <input list="Grade" id="grade8" name="grade8">
                            <datalist id="Grade">
                                <option value="5">A</option>
                                <option value="4">B</option>
                                <option value="3">C</option>
                                <option value="2">D</option>
                                <option value="1">E</option>
                                <option value="0">F</option>  
                            </datalist>                  
                            
                        </td>
                        <td>
                                <input list="Credit_Load" id="credit8" name="credit8">
                                <datalist id="Credit_Load">
                                        <option value="10">10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                        <option value="0">0</option>  
                                </datalist> 
                                    
                        </td>
                    </tr>
                    <tr>
                            <td>
                                <input type="text" class="courses" name="course9">
                            </td>
                            <td>
                                <input list="Grade" id="grade9" name="grade9">
                                <datalist id="Grade">
                                    <option value="5">A</option>
                                    <option value="4">B</option>
                                    <option value="3">C</option>
                                    <option value="2">D</option>
                                    <option value="1">E</option>
                                    <option value="0">F</option>  
                                </datalist>                  
                                
                            </td>
                            <td>
                                    <input list="Credit_Load" id="credit9" name="credit9">
                                    <datalist id="Credit_Load">
                                            <option value="10">10</option>
                                            <option value="9">9</option>
                                            <option value="8">8</option>
                                            <option value="7">7</option>
                                            <option value="6">6</option>
                                            <option value="5">5</option>
                                            <option value="4">4</option>
                                            <option value="3">3</option>
                                            <option value="2">2</option>
                                            <option value="1">1</option>
                                            <option value="0">0</option>  
                                    </datalist> 
                                    
                            </td>
                        </tr>
                        <tr>
                                <td>
                                    <input type="text" class="courses" name="course10">
                                </td>
                                <td>
                                    <input list="Grade" id="grade10" name="grade10">
                                    <datalist id="Grade">
                                        <option value="5">A</option>
                                        <option value="4">B</option>
                                        <option value="3">C</option>
                                        <option value="2">D</option>
                                        <option value="1">E</option>
                                        <option value="0">F</option>  
                                    </datalist>                  
                                    
                                </td>
                                <td>
                                        <input list="Credit_Load" id="credit10" name="credit10">
                                        <datalist id="Credit_Load">
                                                <option value="10">10</option>
                                                <option value="9">9</option>
                                                <option value="8">8</option>
                                                <option value="7">7</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                                <option value="0">0</option>  
                                        </datalist> 
                                        
                                </td>
                            </tr>
                            
        </table>

        

        <button type="button" class="btn btn-primary mb-2" id="calculate">Calculate</button>
        <input type="hidden" id="gpa" name="gpa"> </h4>

            </fieldset>
      
              <input type="submit" class="btn btn-primary mb-2" id="submit" value="Submit" name="Submit"> 
         <!--main form ends here-->

    </div> <!--container for the form ends here-->
    
       


    <script src="jquery/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>