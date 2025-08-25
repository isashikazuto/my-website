<?php
class controller{
    private $db;
    
    function __construct($con)
    {
        $this -> db = $con;
        // echo "finish";
    }

    function getDepartment(){
        try{
            $spl = "SELECT * FROM department";
            $result = $this -> db -> query($spl);
            return $result;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }

    function getUsers(){
        try{
            $spl = "SELECT * FROM users";
            $result = $this -> db -> query($spl);
            return $result;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }

    function insertUsers($username, $password){
        try{
            $spl = "INSERT INTO users(username, password) VALUES(:username, :password)";
            $stmt = $this -> db -> prepare($spl);
            $stmt -> bindParam(":username", $username);
            $stmt -> bindParam(":password", $password);
            $stmt -> execute();
            return true;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }

    function insert($fname , $lname , $salary, $department_id){
        try{
            $spl = "INSERT INTO employee(fname, lname, salary, department_id) VALUES(:fname, :lname, :salary, :department_id)";
            $stmt = $this -> db -> prepare($spl);
            $stmt -> bindParam(":fname", $fname);
            $stmt -> bindParam(":lname", $lname);
            $stmt -> bindParam(":salary", $salary);
            $stmt -> bindParam(":department_id", $department_id);
            $stmt -> execute();
            return true;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }

    function getEmployee(){
        try{
            $spl = "SELECT * FROM employee emp INNER JOIN department dpm ON emp.department_id = dpm.department_id ORDER BY emp.emp_id ";
            $result = $this -> db -> query($spl);
            return $result;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }

    function delete($id){
        try{
            $sql = "DELETE FROM employee WHERE emp_id = :id";
            $stmt = $this -> db -> prepare($sql);
            $stmt -> bindParam(":id",$id);
            $stmt -> execute();
            return true;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }

    function getEmployeeDetall($id){
        try{
            $sql = "SELECT * FROM employee a INNER JOIN department b ON a.department_id = b.department_id WHERE emp_id = :id ";
            $stmt = $this -> db -> prepare($sql);
            $stmt -> bindParam(":id",$id);
            $stmt -> execute();
            $result = $stmt -> fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }

    function update($fname, $lname, $salary, $department_id, $emp_id){
        try{
            $sql = "UPDATE employee SET fname = :fname, lname = :lname, salary = :salary, department_id = :department_id WHERE emp_id = :emp_id";
            $stmt = $this -> db -> prepare($sql);
            $stmt -> bindParam(":fname", $fname);
            $stmt -> bindParam(":lname", $lname);
            $stmt -> bindParam(":salary", $salary);
            $stmt -> bindParam(":department_id", $department_id);
            $stmt -> bindParam(":emp_id", $emp_id);
            $stmt -> execute();
            $result = $stmt -> fetch(PDO::FETCH_ASSOC);
            return true;
        }catch(PDOException $e){
            echo $e -> getMessage();
            return false;
        }
    }
}

?>