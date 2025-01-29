<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Hospital</title>
    <style>
        /* Your CSS styles here */
        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            background: #ecf0f3;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            position: relative;
            width: 400px;
            height: 550px;
            border-radius: 20px;
            padding: 40px;
            box-sizing: border-box;
            background: #00f61d1d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .text-primary {
            color: #23ca23 !important;
        }

        a.text-primary:hover, a.text-primary:focus {
            color: #23b819 !important;
        }

        .brand-logo {
            height: 100px;
            width: 100px;
            background-image: url('assets\img\blog\9654258.png');
            margin: auto;
            border-radius: 50%;
            box-sizing: border-box;
            box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
        }

        .brand-title {
            margin-top: 10px;
            font-weight: 900;
            font-size: 1.8rem;
            color: #3ad129;
            letter-spacing: 1px;
            background: <span class="text-primary">XYZ </span>Hospital;
        }

        .form-container {
            text-align: left;
            margin-top: 30px;
        }

        label {
            display: block;
            margin-bottom: 4px;
        }

        input::placeholder {
            color: gray;
        }

        input[type="email"],
        input[type="password"] {
            background: #ecf0f3;
            padding: 10px;
            padding-left: 20px;
            height: 30px;
            font-size: 14px;
            border-radius: 50px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
            width: 100%;
            margin-bottom: 10px;
            border: none;
        }

        .flex-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }

        .remember-me {
            flex-grow: 1;
            display: flex;
            align-items: center;
            padding-bottom: 16px;
        }

        .remember-me label {
            margin: 0;
            margin-left: 5px;
        }

        .forgot-password {
            text-align: right;
            padding-bottom: 16px;
        }

        .submit-button {
            color: white;
            background: #42a222d4;
            height: 40px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 900;
            box-shadow: 6px 6px 6px #ffffff, -6px -6px 6px rgb(255, 255, 255);
            transition: 0.5s;
            width: 100%;
        }

        .submit-button:hover {
            box-shadow: none;
        }
    </style>


</head>
<body>
    <div class="container">
        <div class="brand-logo" >
        </div>
        <div class="brand-title">XYZ Hospital</div>
        <div class="form-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" placeholder="example@test.com" required autofocus autocomplete="username" />
                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Min 6 characters long" required autocomplete="current-password" />
                <div class="flex-container">
                    <div class="remember-me">
                        <input type="checkbox" id="remember_me" name="remember" />
                        <label for="remember_me">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="forgot-password">
                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                        </div>
                    @endif
                </div>
                <button type="submit" class="submit-button">LOGIN</button>
            </form>
        </div>

    </div>
</body>
</html>
