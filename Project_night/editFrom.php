<?php
$title = "เเก้ไขข้อมูล";
require_once "./layout/header.php";
require_once "./db/connect.php";
require_once "./layout/header.php";
$result = $controller -> getDepartment();
if(!isset($_GET["id"])){
    header("Location:Employeeinformation.php");
}else{
    $id = $_GET["id"];
    $emp = $controller -> getEmployeeDetall($id);
}

?>
<body>
    <div class = "container" >
        <h1 class = "text-center" >เเก้ไขข้อมูล</h1>

        <form method="POST" action="./updateFrom.php">
            <input type="hidden" name="emp_id" value="<?php echo $emp["emp_id"]; ?>">
            <div class = "form-group">
                <label for="" class = "form-label" >ชื่อ</label>
                <input type="text" class = "form-control" name="fname" value="<?php echo $emp["fname"]; ?>" >
            </div>
            <div class = "form-group">
                <label for="" class = "form-label" >นามสกุล</label>
                <input type="text" class = "form-control" name="lname" value="<?php echo $emp["lname"]; ?>" >
            </div>
            <div class = "form-group">
                <label for="" class = "form-label" >เงินเดือน</label>
                <input type="text" class = "form-control" name="salary" value="<?php echo $emp["salary"]; ?>" >
            </div>
            <div class = "form-group">
                <label for="" class = "form-label" >แผนก</label>
                <select name = "department_id" class = "form-control" >
                    <?php while($row = $result -> fetch(PDO::FETCH_ASSOC)){?>
                        <option 
                        <?php if($row["department_id"] == $emp["department_id"]) echo "selected" ?>
                        value = "<?php echo $row["department_id"] ?>" >
                        <?php echo $row["department_name"]; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" name="submit" value = "บันทึก" class = "btn btn-success mt-2" >
        </form>
    </div>
</body>
</html>