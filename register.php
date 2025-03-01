<?php
$errors = [];
$username = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = trim($_POST["password"]);
    $repeat_password = trim($_POST["repeat-password"]);

    if (empty($username)) {
        $errors['username'] = "Vui lòng nhập họ tên.";
    }

    if (empty($email)) {
        $errors['email'] = "Vui lòng nhập email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email không hợp lệ.";
    }

    if (empty($password)) {
        $errors['password'] = "Vui lòng nhập mật khẩu.";
    } elseif (strlen($password) < 6) {
        $errors['password'] = "Mật khẩu phải có ít nhất 6 ký tự.";
    }

    if ($repeat_password !== $password) {
        $errors['repeat-password'] = "Xác nhận mật khẩu không khớp.";
    }

    if (empty($errors)) {
        echo "<p style='color: green;'>Chào mừng $username! Bạn đã đăng ký thành công.</p>";
        $username = $email = "";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./style.css" />
    <title>Register Page</title>
  </head>
  <body>
    <div class="wrapper fade-in-down">
      <div id="form-content">
        <!-- Tabs Titles -->
        <a href="/login.html">
          <h2 class="inactive underline-hover">Đăng nhập</h2>
        </a>
        <a href="/register.php">
          <h2 class="active">Đăng ký</h2>
        </a>

        <!-- Icon -->
        <div class="fade-in first">
          <img src="./imgs/avatar.png" id="avatar" alt="User Icon" />
        </div>

        <!-- Register Form -->
        <form method="POST" action="">
          <input
            type="text"
            id="username"
            class="fade-in first"
            name="username"
            placeholder="Họ tên"
            value="<?php echo htmlspecialchars($username); ?>"
          />
          <span style='color: red;'><?php echo $errors['username'] ?? ''; ?></span>
          
          <input
            type="email"
            id="Email"
            class="fade-in second"
            name="email"
            placeholder="Email"
            value="<?php echo htmlspecialchars($email); ?>"
          />
          <span style='color: red;'><?php echo $errors['email'] ?? ''; ?></span>
          
          <input
            type="password"
            id="password"
            class="fade-in third"
            name="password"
            placeholder="Mật khẩu"
          />
          <span style='color: red;'><?php echo $errors['password'] ?? ''; ?></span>
          
          <input
            type="password"
            id="repeat-password"
            class="fade-in fourth"
            name="repeat-password"
            placeholder="Xác nhận mật khẩu"
          />
          <span style='color: red;'><?php echo $errors['repeat-password'] ?? ''; ?></span>
          
          <input type="submit" class="fade-in five" value="Đăng ký" />
        </form>

        <!-- Remind Password -->
        <div id="form-footer">
          <a class="underline-hover" href="#">Quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </body>
</html>