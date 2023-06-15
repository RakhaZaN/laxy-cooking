<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container {{ $type == 'register' ? 'sign-up-mode' : '' }}">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('auth.authenticate') }}" method="POST" class="sign-in-form">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <button type="submit" name="submit-login" class="btn solid"> Login </button>
                </form>
                <form action="{{ route('auth.store') }}" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Username"
                            autocomplete="username" value="{{ old('username') }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" autocomplete="email"
                            value="{{ old('email') }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <button type="submit" name="submit-register" class="btn solid"> Register </button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ? Join LazyCooking Today.</h3>
                    <p>Cook Delicious, Eat Happy</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="{{ asset('img/log.svg') }}" class="image" alt="login illustration" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Discover Simple and Delicious Recipes</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="{{ asset('img/register.svg') }}" class="image" alt="register illustration" />
            </div>
        </div>
    </div>

    <script src="{{ asset('js/reg.js') }}"></script>
</body>

</html>
