<?php
    include_once('conn.php');

    if(isset($_GET['id'])){
        
        $student_id = $_GET['id'];
    
        $quary = mysqli_query($conn, "DELETE FROM students where id=$student_id");
    
        if($quary){
            header("Location:index.php");
        }
    }

    

    
?>