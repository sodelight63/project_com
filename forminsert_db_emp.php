<?php
//ถ้ามีค่าส่งมาจากฟอร์ม
if (isset($_POST['name_emp']) && isset($_POST['surname_emp']) && isset($_POST['phone_emp']) && isset($_POST['email_emp']) && isset($_POST['adress_emp'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'config/connect_db.php';
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $name_emp = $_POST['name_emp'];
    $surname_emp = $_POST['surname_emp'];
    $phone_emp = $_POST['phone_emp'];
    $email_emp = $_POST['email_emp'];
    $adress_emp = $_POST['adress_emp'];
    //sql insert
    $stmt = $conn->prepare("INSERT INTO employee (name_emp, surname_emp, phone_emp, email_emp, adress_emp)
    VALUES (:name_emp, :surname_emp, :phone_emp, :email_emp, :adress_emp)");
    $stmt->bindParam(':name_emp', $name_emp, PDO::PARAM_STR);
    $stmt->bindParam(':surname_emp', $surname_emp, PDO::PARAM_STR);
    $stmt->bindParam(':phone_emp', $phone_emp, PDO::PARAM_STR);
    $stmt->bindParam(':email_emp', $email_emp, PDO::PARAM_STR);
    $stmt->bindParam(':adress_emp', $adress_emp, PDO::PARAM_STR);
    $result = $stmt->execute();
    // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if ($result) {
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "index_emp.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    } else {
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "index_emp.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
    $conn = null; //close connect db
} //isset
?>

