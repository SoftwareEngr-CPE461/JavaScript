(function(global) {
    //Javascript provides a convenient object type 
    //which handles duplicate entries, we use it to
    //to store grades instead of an array
    var grades = {},
        num_grades = 0;

    function calculateGPA() {
        var grade2point; //maps grades to their weight
        var scale = String(gpaScaleEl.value);
        switch (scale) {
            case "5":
                grade2point = {
                    A: 5,
                    B: 4,
                    C: 3,
                    D: 2,
                    E: 1,
                    F: 0
                };
                break;
            case "4":
                grade2point = {
                    "A": 4,
                    "B": 3,
                    "C": 2,
                    "D": 1,
                    "E": 0,
                    "F": 0
                };
                break;
                //We can easily edit/add scales here,
                //however logic must be written to prevent 
                //entering invalid grades eg A+ in 5.0 scale,
                //Easiest solution is to repeat grades for all possible values ie
                //A+ = 5, A = 5, A- = 5,etc
            case "canada":
                grade2point = {
                    "A+": 4.33,
                    "A": 4,
                    "A-": 3.67,
                    "B+": 3.33,
                    "B": 3,
                    "B-": 2.67,
                    "C+": 2.33,
                    "C": 2,
                    "C-": 1.67,
                    "D": 1,
                    "F": 0
                };

        }
        var sum_points = 0,
            total = 0;
        for (var code in grades) {
            var item = grades[code];
            total += item.credit;
            sum_points += grade2point[item.grade] * item.credit;
        }
        if (total == 0) total = 1; //To prevent printing NaN on screen
        var gpa = sum_points / total;
        setGPA(gpa, grade2point);
    }

    function addCourse(e) {
        var item = {
            code: courseCodeEl.value,
            credit: parseFloat(creditLoadEl.value),
            grade: pickGradeEl.value
        };
        courseCodeEl.value = ""; //reset course code input
        if (!item.code) return alert("Please Enter Course Code");
        item.code = item.code.toUpperCase();
        
        //remove duplicate elements
        if (grades.hasOwnProperty(item.code)) {
            removeRowFromTable(item.code);
        }
        //Remove warning text
        num_grades++;
        grades[item.code] = item;
        e.preventDefault(); //stop default browser form submission
        addRowToTable(item);
    }

    //From here downwards is purely code for
    //manipulating/reacting to the html user interface
    
    //$ gets an element eg button, text
    var $ = global.document.querySelector.bind(global.document);
    //_ creates an element
    var _ = global.document.createElement.bind(global.document);
    
    //Initialize All Needed Variables
    var tbodyEl = $("#tbody");
    var warnEmptyEl = $("#warning-if-empty");
    var courseCodeEl = $("#course_code");
    var creditLoadEl = $("#credit_load");
    var pickGradeEl = $("#pick_grade");
    var previewEl = $("#gpa_preview");
    var gpaScaleEl = $("#gpa_scale");
    var ROW_ID_PREFIX = "gpa-row-"; //we avoid id clashes by adding prefix to user-generated ids
    
    //Add Necessary EventListeners
    $("#gpa_calculate").addEventListener("click", calculateGPA);
    $("#gpa_clear").addEventListener("click",clearCourses);
    $("#form").addEventListener("submit", addCourse);
    if($("#print_transcript")!=null)
        $("#print_transcript").addEventListener("submit", printSlip);
    
    function printSlip(e){
        e.preventDefault();
        calculateGPA();
        $("#student_name").innerHTML = $("#student_name_in").value;
        $("#student_mat").innerHTML = $("#student_mat_in").value;
        $("#student_dept").innerHTML = $("#student_dept_in").value;
        $("#student_lvl").innerHTML = $("#student_lvl_in").value;
        global.print();
    }
    
    function setGPA(gpa, grade2point) {
        previewEl.innerHTML = String(gpa.toFixed(2));
        //Add color hinting
        var color;
        if (gpa > (grade2point.B + grade2point.A) / 2) color = "text-success";
        else if (gpa > grade2point.B) color = "text-primary";
        else if (gpa < grade2point.C) color = "text-danger";
        else color = "";
        previewEl.className = "h5 " + color;
    }

    function addRowToTable(item,isRestoring) {
        if(!isRestoring)
            persistData();
        if (num_grades == 1) {
            warnEmptyEl.style.display = 'none';
        }
        //Create a new row
        var row = _("tr");
        row.id = ROW_ID_PREFIX + item.code; //keep id for deduplication

        //Add individual cells
        var sn = _("td");
        var code = _("td");
        var credit = _("td");
        var grade = _("td");
        var del = _("td");
        row.appendChild(sn);
        row.appendChild(code);
        row.appendChild(credit);
        row.appendChild(grade);
        row.appendChild(del);

        //Fill the cells
        sn.innerHTML = num_grades;
        code.innerHTML = escape(item.code);
        credit.innerHTML = item.credit;
        grade.innerHTML = item.grade;
        del.appendChild(createDeleteButton(item.code));

        //Add row to the table
        tbodyEl.appendChild(row);
    }

    function createDeleteButton(code) {
        var btn = _("button");
        btn.className = "d-print-none btn btn-danger btn-primary";
        btn.innerHTML = "delete";
        btn.onclick = removeRowFromTable.bind(null, code);
        return btn;
    }

    function removeRowFromTable(code) {
        tbodyEl.removeChild($("#" + ROW_ID_PREFIX + code));
        delete grades[code];
        num_grades--;
        persistData();
        if (num_grades == 0) {
            warnEmptyEl.style.display = 'block';
            return;
        }
        for (var i = 0, items = tbodyEl.children; i < items.length; i++) {
            var row = items[i];
            row.firstChild.innerHTML = i + 1;
        }
    }
    
    //reset the table
    function clearCourses(){
        tbodyEl.innerHTML = previewEl.innerHTML = "";
        grades = {};
        num_grades = 0;
        persistData();
    }
    
    var ALLOW_SAVE = true;//not necessary but useful esp. for mobile browsers on which this code was written
    //save table to localstorage
    function persistData() {
        if (ALLOW_SAVE)
            localStorage.setItem(ROW_ID_PREFIX + "data", global.JSON.stringify(grades));
    }
    
    //restore table from localstorage
    if (ALLOW_SAVE) {
        //Restore the saved data
        var savedGradesJson = localStorage.getItem(ROW_ID_PREFIX + "data");
        if (savedGradesJson) {
            grades = global.JSON.parse(savedGradesJson);
            for (var code in grades) {
                num_grades++;
                addRowToTable(grades[code],true);
            }
            calculateGPA();
        }
    }
})(window);