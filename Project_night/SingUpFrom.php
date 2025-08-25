<?php
$title = "เเบบฟร์มสมัครชื่อเข้าใช้";
require_once "./layout/header.php";
require_once "./db/connect.php";
require_once "./db/controller.php";
$result = $controller -> getUsers();
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $status = $controller -> insertUsers($username , $password);
}
?>
  <main class="main-content">
    <form method="POST" class="container" action="">
      <h1 class="Login-title">Sing Up</h1>

      <section class="input-box">
        <input type="text" name="username" placeholder="Username">
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

        <input class="login-button" type="submit" name="submit" value="Sing Up">

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
<link rel="stylesheet" href="singup.css">