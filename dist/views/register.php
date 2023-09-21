<?php
require '../app/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];

    // Membuat prepared statement
    $stmt = $conn->prepare("INSERT INTO users (username, password, email, no_telepon) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss",  $username, $password, $email, $no_telepon);

    if ($stmt->execute()) {
        header("location: login.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pemandian</title>
    <link rel="stylesheet" href="../../public/css/auth.css">
    <link rel="stylesheet" href="../../public/css/waves2.css">
    <link rel="icon" type="image/x-icon" href="../../public/img/icon.png" />
</head>

<body>
<!-- https://dribbble.com/shots/15392711-Dashboard-Login-Sign-Up/-->

<div class="login-container">
  <div class="login-form">
    <div class="login-form-inner">
      <div class="logo">
          <img src="../../public/img/logo_pemandian_transparant.png" alt="" style="width: 200px; height: 50px; margin-left: 70px;">
        </div>
      <h1>Daftar</h1>
      <p class="body-text">Silahkan daftar akun anda terlebih dahulu.</p>

      <a href="#" class="rounded-button google-login-button">
        <span class="google-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M113.47 309.408L95.648 375.94l-65.139 1.378C11.042 341.211 0 299.9 0 256c0-42.451 10.324-82.483 28.624-117.732h.014L86.63 148.9l25.404 57.644c-5.317 15.501-8.215 32.141-8.215 49.456.002 18.792 3.406 36.797 9.651 53.408z" fill="#fbbb00" />
            <path d="M507.527 208.176C510.467 223.662 512 239.655 512 256c0 18.328-1.927 36.206-5.598 53.451-12.462 58.683-45.025 109.925-90.134 146.187l-.014-.014-73.044-3.727-10.338-64.535c29.932-17.554 53.324-45.025 65.646-77.911h-136.89V208.176h245.899z" fill="#518ef8" />
            <path d="M416.253 455.624l.014.014C372.396 490.901 316.666 512 256 512c-97.491 0-182.252-54.491-225.491-134.681l82.961-67.91c21.619 57.698 77.278 98.771 142.53 98.771 28.047 0 54.323-7.582 76.87-20.818l83.383 68.262z" fill="#28b446" />
            <path d="M419.404 58.936l-82.933 67.896C313.136 112.246 285.552 103.82 256 103.82c-66.729 0-123.429 42.957-143.965 102.724l-83.397-68.276h-.014C71.23 56.123 157.06 0 256 0c62.115 0 119.068 22.126 163.404 58.936z" fill="#f14336" />
          </svg></span>
        <span>Daftar Dengan Google</span>
      </a>

      <div class="sign-in-seperator">
        <span>Atau Daftar Dengan Email</span>
      </div>

      <form method="post" action="" id="form">
        <div class="login-form-group">
            <label for="email">Username<span class="required-star">*</span></label>
            <input type="text" placeholder="Masukkan username anda" id="email" name="username" required>
        </div>
        <div class="login-form-group">
            <label for="email">Email<span class="required-star">*</span></label>
            <input type="text" placeholder="Masukkan email anda" id="email" name="email" required>
        </div>
        <div class="login-form-group">
            <label for="pwd">Password <span class="required-star">*</span></label>
            <input autocomplete="off" type="password" placeholder="Minimum 8 characters" id="pwd" name="password" required>
        </div>
        <div class="login-form-group">
            <label for="pwd">Confirm Password <span class="required-star">*</span></label>
            <input autocomplete="off" type="password" placeholder="Minimum 8 characters" id="pwd" name="password" required>
        </div>
        <button class="rounded-button login-cta g-recaptcha" type="submit"
        data-sitekey="6LcUfDsoAAAAAKWDZQoulxVqCHCHc50yX1Akzij2" 
        data-callback='onSubmit' 
        data-action='submit'>Daftar Sekarang</button>
      </form>
      <?php if (isset($error)) { echo $error; } ?>
      <div class="register-div">Sudah mempunyai akun? <a href="login.php" class="link create-account" -link>Login</a></div>
    </div>

  </div>
  <div class="onboarding">
      <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
<!--Just the logo.. Don't mind this-->

</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
<div class="content flex">
</div>
<!--Content ends-->
  </div>
  </div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
   function onSubmit(token) {
     document.getElementById("form").submit();
   }
 </script>
</body>

</html>