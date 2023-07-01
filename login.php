<!DOCTYPE html>
<html>
<head>
  <title>Login 📝</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
    }

    .signup-form {
      max-width: 400px;
      padding: 20px;
      border-radius: 5px;
      background-color: #ffffff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      height:20%;
    }

    .signup-form h2 {
      text-align: center;
      color: #333333;
      margin-bottom: 20px;
    }

    .signup-form label {
      display: block;
      margin-bottom: 8px;
      color: #555555;
      width: 80px; /* Adjust the width as needed */
    }

    .signup-form input[type="email"] {
      flex: 1;
      padding: 10px;
      border: none;
      border-bottom: 1px solid #cccccc;
      border-radius: 0;
    }

    .signup-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 3px;
      background-color: #4CAF50;
      color: #ffffff;
      cursor: pointer;
    }
    
    .vertical-bar {
      border-left: 1px solid #cccccc;
      height: 100%; /* Adjust the height as needed */
      margin: 0 10px;
    }
  </style>
</head>
<body>
  <div class="signup-form">
    <h2>Signup Form</h2>
    <div class="vertical-bar"></div>
    <form method="post" action="/secretsanta/scripts/login_action.php">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <input type="submit" value="Sign Up">
    </form>
  </div>
</body>
</html>
