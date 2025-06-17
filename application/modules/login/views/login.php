<?php
// Simple login validation (static, just for demo)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Static validation (replace with DB check later)
    if ($username === 'admin' && $password === 'password123') {
        echo "<script>alert('Login successful!');</script>";
        // You can redirect using: header("Location: dashboard.php");
    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Healthcare System Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f9ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-box {
      background-color: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 25px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
    }

    p {
      text-align: center;
      margin: 15px 0 5px;
    }

    a {
      text-align: center;
      display: block;
      color: #3498db;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

    .footer {
      text-align: center;
      font-size: 0.9em;
      color: #888;
      margin-top: 30px;
    }
  </style>
</head>
<body>

<div class="login-box">
  <h2>Healthcare System Login</h2>
  <form method="POST" action="">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
    <p>or</p>
    <button type="button" onclick="loadRegisterView()" >Register</button>
  </form>
  <div class="footer">
    &copy; 2025 HealthCare D_Solution
  </div>
</div>

</body>
</html>


<script>
    function loadRegisterView() {
        window.location.href = "<?php echo base_url('login/login/register'); ?>";
    }
</script>

