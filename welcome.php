<!DOCTYPE html>
<html>
<head>
  <title>Welcome😎</title>
  <style>

    .button-container {
      display: flex;
      justify-content: center;
      position: relative;
      top: 20%;
    }

    .button {
      display: inline-block;
      padding: 50px 100px;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      text-decoration: none;
      font-size: 40px;
      margin: 100px;
      border: none;
      cursor: pointer;
      font-family: Arial, sans-serif;
    }

    .button .child{
        background-color: inherit;
        color: inherit;
        padding: inherit;
        border: inherit;
        cursor: inherit;
        font-size: 50px;
    }

    .description {
      font-size: 14px;
      margin-top: 5px;
    }

  </style>
</head>
<body>
  <h1 style="text-align: center; height: 100px; top: 100px; font-family: Arial, sans-serif;">Hello! 😁😁😁</h1>
  <div class="button-container">
    <form method="post">
      <input type="submit" name="button1" value="SignUp" formaction="/secretsanta/signup.php"/>
      <input type="submit" name="button2" value="Login" formaction="/secretsanta/login.php"/>
    </form>
  </div>
</body>
</html>
