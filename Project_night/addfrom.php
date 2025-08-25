<?php
$title = "บันทึกข้อมูลพนักงาน";
require_once "./layout/header.php";
require_once "./db/connect.php";
$result = $controller -> getDepartment();
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $salary = $_POST["salary"];
    $department_id = $_POST["department_id"];
    $status = $controller -> insert($fname , $lname , $salary, $department_id);
    if($status){
        $meassage = "finish";
        require_once "./layout/success_meassage.php";
    }else{
        $meassage =  "kak";
        require_once "./layout/error_meassage.php";
    }
}
?>
<body>
    <div class = "container" >
        <h1 class = "text-center" >บันทึกข้อมูลพนักงาน</h1>

        <form method="POST" action="./addfrom.php">
            <div class = "form-group">
                <label for="" class = "form-label" >ชื่อ</label>
                <input type="text" class = "form-control" name="fname">
            </div>
            <div class = "form-group">
                <label for="" class = "form-label" >นามสกุล</label>
                <input type="text" class = "form-control" name="lname">
            </div>
            <div class = "form-group">
                <label for="" class = "form-label" >เงินเดือน</label>
                <input type="text" class = "form-control" name="salary">
            </div>
            <div class = "form-group">
                <label for="" class = "form-label" >แผนก</label>
                <select name = "department_id" class = "form-control" >
                    <?php while($row = $result -> fetch(PDO::FETCH_ASSOC)){?>
                        <option value = "<?php echo $row["department_id"] ?>" ><?php echo $row["department_name"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" name="submit" value = "บันทึก" class = "btn btn-success mt-2" >
        </form>
    </div>
</body>
</html>