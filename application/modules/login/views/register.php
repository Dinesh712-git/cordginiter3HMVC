<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Healthcare System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f8ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-box {
      background: white;
      padding: 35px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
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
    input[type="email"],
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
      background-color: #27ae60;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #219150;
    }

    p {
      text-align: center;
    }

    a {
      color: #2980b9;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

    .footer {
      text-align: center;
      font-size: 0.9em;
      color: #777;
      margin-top: 30px;
    }
  </style>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<div class="register-box">
  <h2>Create Account</h2>
  <form id="registerForm">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <label>Confirm Password:</label>
    <input type="password" name="confirm_password" required>

    <button type="button" onclick="save()">Register</button>
  </form>

  <div class="footer">
    &copy; 2025 HealthCare D_Solution
  </div>
</div>
<script>
    let url = "<?php echo base_url('login/login/save'); ?>";
    console.log("Save URL:", url);
</script>

<script>
  function save() {
    const form = document.getElementById("registerForm");
    const formData = new FormData(form);

    fetch("<?php echo base_url('login/login/save'); ?>", {
      method: "POST",
      body: formData,
    })
    .then((res) => res.json())
    .then((data) => {
      if (data.status === 'success') {
        Swal.fire({
          icon: 'success',
          title: 'Registration Successful!',
          showConfirmButton: false,
          timer: 2000
        });
        // window.location.href = "<?php echo base_url('login'); ?>";
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Registration Failed',
          text: data.message
        });
      }
    })
    .catch((error) => {
      console.error("Error:", error);
       Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'An error occurred during registration.'
      });
    });
  }
</script>

</body>
</html>
