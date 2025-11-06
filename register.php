<?php

include "db_connect.php";
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];   
    $age = $_POST['age'];

    //Check if name already exists
    $stmt = $conn->prepare("SELECT* FROM students WHERE name=?");
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows>0){
        echo "Error: Student with this name already exists!<br>";
    }
    
    else{
        $stmt = $conn->prepare("INSERT INTO students(name,email,age) VALUES(?,?,?)");
        $stmt-> bind_param("ssi", $name, $email, $age);
        $stmt->execute();
        echo "Student registered successfully!<br>";
        }
    echo '<a href="activity.php">Go Back</a> | <a href="student.php">View Students</a>';
    }
?>