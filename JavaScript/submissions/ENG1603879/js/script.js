$(document).ready(function(){
    
    $("#calculate").click(function(){
        //getting the input for the first grade entered
        var Grade1 = document.getElementById('grade1').value;
        //getting the value of the first credit load entered
         creditLoad1 = document.getElementById('credit1').value;
        //result of the multiplication of a course grade and its credit load
        var total1 = Grade1 * creditLoad1;
    
        //getting the input for the second grade entered
         var Grade2 = $("#grade2").val();
         //getting the value of the second credit load entered
         creditLoad2 = parseInt($("#credit2").val());
         //result of the multiplication of a course grade and its credit load
         var total2 = Grade2 * creditLoad2;
    
         var Grade3 = $("#grade3").val();
         creditLoad3 = parseInt($("#credit3").val());
         var total3 = Grade3 * creditLoad3;
    
         var Grade4 = $("#grade4").val();
          creditLoad4 = parseInt($("#credit4").val());
         var total4 = Grade4 * creditLoad4;
    
         var Grade5 = $("#grade5").val();
          creditLoad5 = parseInt($("#credit5").val());
         var total5 = (Grade5 * creditLoad5);
         
         var Grade6 = document.getElementById('grade6').value;
         creditLoad6 = document.getElementById('credit6').value;
         var total6 = Grade6 * creditLoad6;
    
         var Grade7 = $("#grade7").val();
         creditLoad7 = parseInt($("#credit7").val());
         var total7 = Grade7 * creditLoad7;
    
         var Grade8 = $("#grade8").val();
         creditLoad8 = parseInt($("#credit8").val());
         var total8 = Grade8 * creditLoad8;
    
         var Grade9 = $("#grade9").val();
         creditLoad9 = parseInt($("#credit9").val());
         var total9 = Grade9 * creditLoad9;
    
         var Grade10 = $("#grade10").val();
         creditLoad10 = parseInt($("#credit10").val());
         var total10 = (Grade10 * creditLoad10);
    
        //sum of the total credit load per semester
        var totalLoad = parseInt(creditLoad1) + parseInt(creditLoad2) + parseInt(creditLoad3) + parseInt(creditLoad4) + 
        parseInt(creditLoad5) + parseInt(creditLoad6) + parseInt(creditLoad7) + parseInt(creditLoad8) + parseInt(creditLoad9) + 
        parseInt(creditLoad10);
    //sum of total variables
        var TOTAL = (total1 + total2 + total3 + total4 + total5 + total6 + total7 + total8 + total9 + total10);
        var newLine= "\n";
        document.getElementById('gpa').innerHTML = "GPA: " + ((TOTAL/totalLoad).toFixed(2));
        document.getElementById('gpa').value = "GPA: " + ((TOTAL/totalLoad).toFixed(2));
        // document.write("GPA:", TOTAL/totalLoad);
        
        //Ajax
        var http = new XMLHttpRequest();
        var url = "Transcript.php";
        var params = "gpa=" + ((TOTAL/totalLoad).toFixed(2));
        http.open("POST", url, true);
        //send a proper header information along with the request
    
        http.send(params);


        alert("Confirm the total credit load for the semester:" + totalLoad + newLine +
             "Total grade obtained for the semester:" + TOTAL + newLine + "Your GPA:" + ((TOTAL/totalLoad).toFixed(2)));
             $("#gpa").append($("#gpa").val());
        });
        

    $('#submit').click(function validateForm(){
        var x = document.forms["TranscriptForm"]["Schoolname","Department","Faculty","Schooladdress","FullName",
    "Academicsession","Email"].value;
        if (x == ""){
            alert("Form must be filled out!");
            return false;
        }
      });
    });
    
