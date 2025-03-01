<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>
<body>
<div class="wrapper fade-in-down">
      <div id="form-content">
        <!-- Tabs Titles -->
        <a href="./login.php">
          <h2 class="inactive underline-hover">Đăng nhập</h2>
        </a>
        <a href="./register.php">
          <h2 class="active">Đăng ký</h2>
        </a>

        <!-- Icon -->
        <div class="fade-in first">
          <img src="./imgs/avatar.png" id="avatar" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form>
          <input
            type="email"
            id="Email"
            class="fade-in second"
            name="email"
            placeholder="Email"
          />
          <input
            type="password"
            id="password"
            class="fade-in third"
            name="password"
            placeholder="Mật khẩu"
          />
          <input type="submit" class="fade-in five" value="Đăng nhập" />
        </form>

      </div>
    </div>
</body>
</html>