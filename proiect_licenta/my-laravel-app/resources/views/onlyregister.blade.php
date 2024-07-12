<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/black.css') }}">
</head>

<body>
    <div class="dark-mode-toggle">
        <input type="checkbox" id="darkModeToggle">
        <label for="darkModeToggle"></label>
    </div>

    <div class="container">
        <div class="login form">


        <header>Sign up</header>



        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="email" id="email" placeholder="Enter your email" title="Example ceva@yahoo.com" pattern="^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|yahoo\.ro|gmail\.ro)$" required value="{{ old('email') }}">
            <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required placeholder="Create a password">
            <input type="password" name="password_confirmation" id="password_confirmation" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must match" required placeholder="Confirm your password">
            <label>Scroll up until you find your date of birth</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}">
            <input type="text" name="gender" title="Enter everything you consider you are (I appreciate if you enter you are a male or female or do a meme)" id="gender" placeholder="Enter your gender" value="{{ old('gender') }}">
            <input type="submit" class="button" value="Sign up">
        </form>

        <div class="signup">
          <span class="signup">Already have an account?
            <a href="{{ route('form.form') }}">Login</a>
          </span>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('scripts/black.js') }}"></script>
</body>
</html>
