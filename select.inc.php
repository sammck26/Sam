<?php
    if(isset($_POST["submit"])){
        $conn = new mysqli("localhost", "root", "")
        $query = "SELECT * FROM students";
        
        $selectedStudent = $_POST["select_student"];

        $result = $conn->query($query);

        if($selectedStudent = null){
            $_SESSION["selectedstudent"] = "";
        }
        else if($result == $selectedStudent)
        {
            $_SESSION["selectedstudent"] = $selectedStudent;
        }
        else if(!$result == $selectedStudent) {
            $Error = "student was not found!";
            $_SESSION["selectedstudent"] = $Error;
        }
    }
?>