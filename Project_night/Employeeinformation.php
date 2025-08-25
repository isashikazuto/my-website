<?php
$title = "ข้อมูลพนักงาน";
require_once "./layout/header.php";
require_once "./db/connect.php";

$result = $controller->getEmployee();
?>

<body>
    <h1 class="text-center">ข้อมูลพนักงาน</h1>
    <table class="table table-dark table-hover table-striped-columns">
        <thead>
            <tr class="text-center">
                <th>ชื่อพนักงาน</th>
                <th>นามสกุล</th>
                <th>เงินเดือน</th>
                <th>แผนก</th>
                <th>ดำเนินการ</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row["fname"] ?></td>
                    <td><?php echo $row["lname"] ?></td>
                    <td><?php echo number_format($row["salary"]) ?></td>
                    <td><?php echo $row["department_name"] ?></td>
                    <td class="text-end">
                        <a href="./editFrom.php?id=<?php echo $row["emp_id"]; ?>" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
                            <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11z" />
                            </svg>
                        </a>
                        <a href="delete.php?id= <?php echo $row["emp_id"]; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบหรือไม่')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>