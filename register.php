
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครบัญชี</title>
</head>

    <link rel="stylesheet" href="css\register.css">

<body>

<form action="processregister.php" method="POST">
  <div class="imgcontainer">
    <img src="images_account\user-6820232_640.webp" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username_account"><b>ชื่อผู้ใช้</b></label>
    <input type="text" placeholder="Username" name="username_account" required>
    
    <label for="email_account"><b>อีเมล์</b></label>
    <input type="email" placeholder="Email" name="email_account" required>

    <label for="password_account1"><b>รหัสผ่าน</b></label>
    <input type="password" placeholder="Password" name="password_account1" required>

    <label for="password_account2"><b>ยืนยันรหัสผ่าน</b></label>
    <input type="password" placeholder="Confirm Password" name="password_account2" required>
    <button type="submit">สมัครบัญชี</button> 

    <span class="account"> <a href="login.php">มีบัญชีอยู่เเล้ว</a></span>
  
    </div>
</body>
</html>