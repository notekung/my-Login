<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
  
    <link rel="stylesheet" href="css/login.css">

<body>
<form action="processlogin.php" method="post">
  <div class="imgcontainer">
    <img src="images_account\user-6820232_640.webp" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email_account"><b>อีเมล์</b></label>
    <input type="email" placeholder="Enter Email" name="" required>

    <label for="password_account"><b>รหัสผ่าน</b></label>
    <input type="password" placeholder="Enter Password" name="" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <button type="submit">เข้าสู่ระบบ</button>
  
    <span class="registeraccount"><a href="register.php">สมัครบัญชี</a></span>

    </div>

  </div>
</form>
</body>
</html>