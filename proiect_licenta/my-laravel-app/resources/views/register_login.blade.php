<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="dark-mode-toggle">
    <input type="checkbox" id="darkModeToggle">
    <label for="darkModeToggle"></label>
  </div>
  <div class="container">
    <div class="login form">
      <header>Login</header>

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email" required>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <a href="#">Forgot password?</a>
        <input type="submit" class="button2" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <a href="{{ route('register.form') }}">Register</a>
        </span>
      </div>
    </div>
  </div>
</body>

</html>
