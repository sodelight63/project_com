<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>เพิ่มข้อมูลพนักงาน</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"><br>
                <h4>ฟอร์มเพิ่มข้อมูลลูกค้า</h4>
                <form action="frominsert_db_emp.php" method="post">
                    <div class="mb-2">
                        <label for="name_emp" class="col-sm-2 col-form-label"> ชื่อ</label>
                        <div class="col-sm-10">
                            <input type="text" name="name_emp" class="form-control" id="name_emp" required placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="surname_emp" class="col-sm-2 col-form-label"> นามสกุล:</label>
                        <div class="col-sm-10">
                            <input type="text" name="surname_emp" class="form-control" id="surname_emp" required placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="phone_emp" class="col-sm-2 col-form-label"> เบอร์โทร:</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone_emp" class="form-control" id="phone_emp" required placeholder="เบอร์โทร">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="email_emp" class="col-sm-2 col-form-label"> อีเมล:</label>
                        <div class="col-sm-10">
                            <input type="text" name="email_emp" class="form-control" id="email_emp" required placeholder="อีเมล">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="adress_emp" class="col-sm-2 col-form-label"> ที่อยู่:</label>
                        <div class="col-sm-10">
                            <input type="text" name="adress_emp" class="form-control" id="adress_emp" required placeholder="ที่อยู่">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>