<!DOCTYPE html><html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5fa;
      margin: 0;
      padding: 0;
    }
    .navbar {
      background-color: #112d4e;
      padding: 1em;
      display: flex;
      justify-content: flex-end;
    }
    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #112d4e;
    }
    label {
      display: block;
      margin-bottom: 8px;
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #f08cab;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 16px;
    }
    .login-link {
      text-align: center;
      margin-top: 15px;
    }
    .login-link a {
      color: #e63946;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="signUp.php">Signup</a>
  </div>  <div class="container">
    <h2>SignUp to our website</h2>
    <form id="signupForm">
      <label>Username</label>
      <input type="text" id="username" required /><label>Email</label>
  <input type="email" id="email" required />

  <label>Mobile Number</label>
  <input type="text" id="mobile" required />

  <label>Usertype</label>
  <select id="usertype" required>
    <option value="">Choose Usertype</option>
    <option value="admin">Admin</option>
    <option value="user">User</option>
  </select>

  <label>Password</label>
  <input type="password" id="password" required />

  <label>Confirm Password</label>
  <input type="password" id="confirmPassword" required />

  <button type="submit">Signup</button>
</form>
<div class="login-link">
  Already have an account? <a href="login.php">Login Now</a>
</div>

  </div>  <script>
    document.getElementById('signupForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      if (password !== confirmPassword) {
        alert("Passwords do not match");
        return;
      }

      alert("Signup successful");
    });
  </script></body>
</html>