<?php
    $employee_id = $_GET['employee_id'];
    require_once 'config/connect_db.php';
    $sql = "DELETE FROM employee_id WHERE employee_id = employee_id";
    $stmt = $conn->prepare($sql);
    if($stmt->execute([$employee_id])){
        header("Location:index_emp.php");
    }else{
        echo "ลบไม่สำเร็จ";
    }
?>