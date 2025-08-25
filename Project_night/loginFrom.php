<?php
$title = "เเบบฟร์มลงชื่อเข้าใช้";
require_once "./layout/header.php";
require_once "./db/connect.php";
require_once "./db/controller.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = $user -> getUser($username, $password);
    if(!$result){
        echo '<div class = "alert alert-danger">ชื่อหรือรหัสไม่ถูก</div>';
    }else{
        $_SESSION["username"] = $username;
        $_SESSION["userid"] = $result["id"];
        header("Location:index.php");
    }


}
?>
  <main class="main-content">
    <form method="POST" class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
      <h1 class="Login-title">Login</h1>

      <section class="input-box">
        <input type="text" name="username" placeholder="Username" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") echo $_POST["username"]; ?>">
        <i><img class="bx-user" src="./img/pngegg.png" alt=""></i>
      </section>

      <section class="input-box">
        <input type="password" name="password" placeholder="Password">
        <i><img class="bx-pass" src="./img/49855_closed_padlock_icon.png" alt=""></i>
      </section>

      <section class="rememder-forgot-box">
        <div class="rememder-me">
          <input type="checkbox" name="rememder-me" id="rememder-me">
          <label for="rememder-me"><h5>Rememder me</h5></label>
          <a class="forgot-password" href="">Forgot password?</a>
        </div>

        <input class="login-button" type="submit" name="submit" value="Login">

        <h5 class="dont-have-an-account">
          Don't have an account?
          <a class="register" href="">register</a>
        </h5>
      </section>
    </form>
  </main>
    <footer class="site-footer">
         <p>&copy; 2025 MyWebsite by: Atikarn Sinkeaw</p>
         <p>FB: Benshi</p>
         <p>Discord: isashi_kazuto</p>
         <p>IG: Atikarn Sinkeaw</p>
    </footer>
</body>
</html>
<link rel="stylesheet" href="Login.css">