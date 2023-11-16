

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0'>
  <link rel="stylesheet" href="./index.css">
</head>
<body>
<header>
  <nav class="navbar">
    <span class="hamburger-btn material-symbols-rounded">menu</span>
    <a href="#" class="logo">
      <img src="img/slsulogo.png" alt="logo">
      <h2>WanderLust</h2>
    </a>
    <ul class="links">
      <span class="close-btn material-symbols-rounded">close</span>
      <li><a href="#">About us</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
    <button class="login-btn">LOG IN</button>
  </nav>
</header>

<div class="blur-bg-overlay"></div>
<div class="form-popup">


<div>papart</div>
  <span class="close-btn material-symbols-rounded">close</span>
  <div class="form-box login">
    <div class="form-details">
      <h2>Ticketing Agent</h2>
      <p>Canigao Island Ticketing Management System.</p>
    </div>
    <div class="form-content">
      <h2>LOGIN</h2>
      <form method="post" action="login.php"> <!-- Replace with the actual PHP script for login -->
        <div class="input-field">
          <input type="text" name="user" required>
          <label>Email</label>
        </div>
        <div class="input-field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <input type="hidden" name="login_type" value="ticketing_agent">
        <button type="submit">Log In</button>
      </form>
      <div class="bottom-link">
        Are you an Admin?
        <a href="#" id="signup-link">Admin Login</a>
      </div>
    </div>
  </div>
  <div class="form-box signup">
    <div class="form-details">
      <h2>Admin Login</h2>
      <p>Canigao Island Ticketing Management System</p>
    </div>
    <div class="form-content">
      <h2>LOGIN</h2>
      <form method="post" action="login.php"> <!-- Replace with the actual PHP script for login -->
        <div class="input-field">
          <input type="text" name="user" required>
          <label>Enter your email</label>
        </div>
        <div class="input-field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <input type="hidden" name="login_type" value="admin">
        <button type="submit">Log in</button>
      </form>
      <div class="bottom-link">
        Not an Admin?
        <a href="#" id="login-link">Ticketing Agent</a>
      </div>
    </div>
  </div>
</div>
  <script  src="index.js"></script>
</body>
</html>
