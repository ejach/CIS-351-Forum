<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href="logo.png" type="image/x-icon">
  <title> Forum Talko </title>
</head>

<body>
  <div class="topnav">
    <div class="topnav-img" id="logo">
        <img src="logo.png" width="45" height="45" draggable="false" alt="logo">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
    <a href="/register.php" id="register" draggable="false">Register</a>
    <a href="/login.php" id="login" draggable="false">Login</a>
  </div>
  <div class="Cats123" >
    <form method = "post" action = "login.php">
      <label>Title:</label> <br>
      <textarea id="title" name="title" rows="1" cols="50">

      </textarea>
      <br>
      <label for="post_content">Message:</label>
      <br>
      <textarea id="post_content" name="content" rows="4" cols="50">

      </textarea>
      <br>
      <br>
      <input type="submit" class="btn btn-primary btn-lg active btn-rounded login" value="POST">
    </form>
  </div>
</body>
</html>
