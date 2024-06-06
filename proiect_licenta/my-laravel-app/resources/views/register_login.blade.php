<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/black.css">

</head>

<body>
  <div class="dark-mode-toggle">
    <input type="checkbox" id="darkModeToggle">
    <label for="darkModeToggle"></label>
  </div>
  <div class="container">

    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="" method="post">
        <input type="text" name="email2" id="email2" placeholder="Enter your email">
        <input type="password" name="password3" id="password3" placeholder="Enter your password">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button2" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <label for="check">Sign up</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Sign up</header>
      <form action="" method="post">
        <input type="text" name="email" id="email" placeholder="Enter your email" title="Example ceva@yahoo.com" pattern="^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|yahoo\.ro|gmail\.ro)$" required>
        <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required placeholder="Create a password">
        <input type="password" name="password2" id="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must match" required placeholder="Confirm your password">
        <label>Scroll up until you find you date of birth</label><input type="date" name="date" id="date">
        <input type="text" name="gender" title="Enter everything you consider you are (I appreciate if you enter you are a male or female or do a meme)" id="gender" placeholder="Enter your gender">
        <input type="submit" class="button" value="Sign up">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
          <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="scripts/black.js"></script>
@php
  include('fake_errors/before_welcome.php');
  include('fake_errors/new_user.php');
@endphp
</body>

</html>
