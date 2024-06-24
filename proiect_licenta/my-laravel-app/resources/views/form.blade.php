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

    <div class="registration form">
        <header>Sign up</header>

        @if (session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('form') }}" method="POST">
            @csrf
            <input type="text" name="username" id="username" placeholder="Enter your username"
                title="Example ceva nou" required>
            <textarea name="describe_yourself" id="describe_yourself" title="anything that matches your character" rows="10"
                cols="100">
                Ceva poate sa fie ceva vechi
                altceva intotdeauna poate e intotdeana ceva nou
            </textarea>
            <input type="text" name="lvl" id="lvl" value="1" readonly>
            <input type="text" name="describe_gender"
                title="Enter a short description I am.... or I indentify as.... or write something funny" id="gender"
                placeholder="Enter anything you want">
            <div class="image">
                <label>
                    <h4>Add image</h4>
                </label>
                <input type="file" class="form-control" required name="image">
                <input type="file" class="form-control" required name="background_image">

            </div>


            <input type="submit" class="button" value="Sign up">
        </form>

        <div class="signup">
            <span class="signup">Already have an account?
                <a href="{{ route('login.form') }}">Login</a>
            </span>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('scripts/black.js') }}"></script>
</body>

</html>
