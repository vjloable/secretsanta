<!DOCTYPE html>
<html>
<head>
  <title>Lobby🔥</title>
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
  <h1 style="text-align: center; height: 100px; top: 100px; font-family: Arial, sans-serif;">Welcome to the Lobby!</h1>
  <div class="button-container">
    <div class="button">
      <button class="child">Join</button>
      <div class="description">Friends in a room already? Come join!</div>
    </div>
    <div class="button">
      <button class="child" >Host</button>
      <div class="description">Looking to host a party 👀 Look no further!</div>
    </div>
  </div>
</body>
</html>
