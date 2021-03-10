<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Transcript</title>
        <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
            
            <!-- start the header of the transcript-->
            <div class="row" id="header" >
                <div class="col-lg-6" id="logo">
                    <?php 
                if(isset($_POST['Submit'])){
                    $filepath = "images/" . $_FILES['myFile']['name'];
                    $target_file = $_FILES['myFile']['tmp_name'];
                    $uploadOk = 1;
                    $imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    //check file size
                    if($_FILES['myFile']['size'] > 500000){
                             echo "Sorry your file is too large.";
                             $uploadOk = 0;
                        }
                       
                    if(move_uploaded_file( $target_file, $filepath))
                    {
                        echo "<img src=".$filepath." width=150 />";
                    }
                    else {
                        echo "Error!!";
                    }
                }
                    ?>
                </div><!-- / logo col -->

            <div class="col-lg-6" id="text-header">
                <h1 id="schoolName">  <?php echo $_POST['Schoolname'];?> </h1>
                <h2 id="department">Department&nbsp;Of&nbsp;<?php echo $_POST['Department'];?></h2>
                <h2 id="faculty">Faculty Of <?php echo $_POST['Faculty'];?> </h2>
            <!-- address goes here-->
                <address id="schoolAddress"> <?php echo $_POST['Schooladdress'];?> </address>
            </div><!-- / end of text header-->
            </div>
            <!-- / row-->
        </div>
        <!-- / header of transcript-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <header>Official Transcript</header>
                </div>
            </div>
        </div> 
        <!-- users details-->
        <div class="container">
            <div class="row userDetail">
             <h3 id="studentName"> <?php echo $_POST['FullName'];?> </h3>
             <h3 id="matNo"> <?php echo $_POST['Matno'];?></h3>
                <h3 id="studyLevel"> <?php echo $_POST['studentLevel'];?> Level</h3>
                <h3 id="academicSession"> <?php echo $_POST['Academicsession'];?> academic session</h3>
                <h3 id="studentEmail"> <?php echo $_POST['Email'];?> </h3>
            </div>
        </div>
        <section>
            <p>This transcript sets out the studies undertaken by the above named during the academic session shown.
                The examination results and credits obtained are detailed below.</p>
        </section>
        <div class="container" id="result">
            <table id="transcriptTable">
                <tr>
                    <th>Courses</th>
                    <th>Grade</th>
                    <th>Credit Load</th>
                </tr>
                <tr>
                    <td><?php echo $_POST['course1'];?></td>
                    <td><?php echo $_POST['grade1'];?></td>
                    <td><?php echo $_POST['credit1'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course2'];?></td>
                    <td><?php echo $_POST['grade2'];?></td>
                    <td><?php echo $_POST['credit2'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course3'];?></td>
                    <td><?php echo $_POST['grade3'];?></td>
                    <td><?php echo $_POST['credit3'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course4'];?></td>
                    <td><?php echo $_POST['grade4'];?></td>
                    <td><?php echo $_POST['credit4'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course5'];?></td>
                    <td><?php echo $_POST['grade5'];?></td>
                    <td><?php echo $_POST['credit5'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course6'];?></td>
                    <td><?php echo $_POST['grade6'];?></td>
                    <td><?php echo $_POST['credit6'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course7'];?></td>
                    <td><?php echo $_POST['grade7'];?></td>
                    <td><?php echo $_POST['credit7'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course8'];?></td>
                    <td><?php echo $_POST['grade8'];?></td>
                    <td><?php echo $_POST['credit8'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course9'];?></td>
                    <td><?php echo $_POST['grade9'];?></td>
                    <td><?php echo $_POST['credit9'];?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['course10'];?></td>
                    <td><?php echo $_POST['grade10'];?></td>
                    <td><?php echo $_POST['credit10'];?></td>
                </tr>
            </table>
            <h4><?php echo $_POST['gpa'];?></h4>
        </div>

        <div class="container signature">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3">
            <hr>
            <h3>Head Of Department</h3>
            </div>
        </div>
        </div>

    <script src="jquery/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>