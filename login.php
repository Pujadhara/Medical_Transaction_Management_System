<!DOCTYPE html><html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
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
    input {
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
    .signup-link {
      text-align: center;
      margin-top: 15px;
    }
    .signup-link a {
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
    <h2>Login to your account</h2>
    <form id="loginForm">
      <label>Email</label>
      <input type="email" id="loginEmail" required /><label>Password</label>
  <input type="password" id="loginPassword" required />

  <button type="submit">Login</button>
</form>
<div class="signup-link">
  Don't have an account? <a href="signUp.php">Signup Now</a>
</div>

  </div>  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const email = document.getElementById('loginEmail').value;
      const password = document.getElementById('loginPassword').value;

      // Example validation (replace with actual logic)
      if (email === "test@example.com" && password === "1234") {
        alert("Login successful");
      } else {
        alert("Invalid email or password");
      }
    });
  </script></body>
</html>