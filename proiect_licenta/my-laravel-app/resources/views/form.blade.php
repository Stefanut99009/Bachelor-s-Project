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
        <form action="{{ route('form') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="username" id="username" placeholder="Enter your username"
                title="Example ceva nou" required>
            <textarea name="describe_yourself" id="describe_yourself" title="anything that matches your character" rows="10"
                cols="100">
                Ceva poate sa fie ceva vechi
                altceva intotdeauna poate e ceva nou
            </textarea>
            <br>
            <label>Your lvl</label>
            <input type="number" name="lvl" id="lvl" value="1" readonly>
            <label>Your experience</label>
            <input type="number" name="experience" id="experience" value="0" readonly>
            <label>Profile picture</label>
            <input type="file" class="form-control" required name="image">
            <label>Background picture</label>
            <input type="file" class="form-control" required name="background_image">
            <input type="submit" class="button" value="All is setup">
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('scripts/black.js') }}"></script>
</body>
</html>
