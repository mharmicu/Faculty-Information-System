<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 100%;
            background: url(images/bg.jpg);
            background-position: center;
            background-size: cover;
            height: 110vh;
        }

        .navbar {
            width: 1200px;
            height: 75px;
            margin: auto;
        }

        .icon {
            width: 200px;
            float: left;
            height: 70px;
        }

        .logo {
            color: #000;
            font-size: 20px;
            font-family: Arial;
            padding-left: 20px;
            float: left;
            padding-top: 10px;
        }

        .menu {
            width: 400px;
            float: left;
            height: 70px;
        }

        ul {
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul li {
            list-style: none;
            margin-left: 62px;
            margin-top: 27px;
            font-size: 14px;
        }

        ul li a {
            text-decoration: none;
            color: #fff;
            font-family: Arial;
            font-weight: bold;
            transition: 0.4s ease-in-out;
        }

        ul li a:hover {
            color: #ff7200;
        }

        .btn {
            width: 100px;
            height: 40px;
            background: #ff7200;
            border: 2px solid #ff7200;
            margin-top: 13px;
            color: #fff;
            font-size: 15px;
            border-bottom-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .btn:focus {
            outline: none;
        }

        .srch:focus {
            outline: none;
        }

        .content {
            width: 1200px;
            height: auto;
            margin: auto;
            color: #fff;
            position: relative;
        }

        .content .par {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .content h1 {
            font-family: 'Times New Roman';
            font-size: 50px;
            padding-left: 20px;
            margin-top: 9%;
            letter-spacing: 2px;
        }

        .content .cn {
            width: 160px;
            height: 40px;
            background: #ff7200;
            border: none;
            margin-bottom: 10px;
            margin-left: 20px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: .4s ease;
        }

        .content .cn a {
            text-decoration: none;
            color: #000;
            transition: .3s ease;
        }

        .cn:hover {
            background-color: #fff;
        }

        .form {
            width: 280px;
            height: 570px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8)50%, rgba(0, 0, 0, 0.8)50%);
            position: absolute;
            top: -70px;
            left: 870px;
            border-radius: 10px;
            padding: 25px;
        }

        .form h2 {
            width: 220px;
            font-family: sans-serif;
            text-align: center;
            color: #ff7200;
            font-size: 22px;
            background-color: #fff;
            border-radius: 10px;
            margin: 2px;
            padding: 8px;
        }

        .form input {
            width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #ff7200;
            border-top: none;
            border-right: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 15px;
            font-family: sans-serif;
        }

        .form input:focus {
            outline: none;
        }

        ::placeholder {
            color: #fff;
            font-family: Arial;
        }

        .btn {
            width: 240px;
            height: 40px;
            background: #ff7200;
            border: none;
            margin-top: 30px;
            border-radius: 10px;
            cursor: pointer;
            color: #fff;
            transition: 0.4s ease;
        }

        .btn:hover {
            background: #fff;
            color: #ff7200;
        }

        .btn a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .form .link {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            padding-top: 20px;
            text-align: center;
        }

        .form .link a {
            text-decoration: none;
            color: #ff7200;
        }

        .liw {
            padding-top: 15px;
            padding-bottom: 10px;
            text-align: center;
        }

        .icons a {
            text-decoration: none;
            color: #fff;
        }

        .icons ion-icon {
            color: #fff;
            font-size: 30px;
            padding-left: 14px;
            padding-top: 5px;
            transition: 0.3 ease;
        }

        .icons ion-icon:hover {
            color: #ff7200;
        }

        .form button {
            text-transform: uppercase;
            outline: 0;
            background: orange;
            width: 100%;
            border: none;
            padding: 15px;
            font-size: 14px;
            cursor: pointer;
            transition: .5s;
        }

        .form button:hover,
        .form button:active {
            background: green;
            border: none;
        }

        .form .message {
            margin: 15px 0 0;
            color: #fff;
            font-size: 12px;
        }

        .form .message a {
            color: orange;
            text-decoration: none;
        }

        .register-form {
            display: none;
        }
    </style>
</head>

<div class="main">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo"><img src="/images/main-logo-no-bg.png" style="width:80px"></h2>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

    </div>

    <div class="content">
        <h1>Faculty <br><span>Information System</span> </h1>
        <p class="par">Faculty Information Systems are software solutions that allow easy managing, sharing, updating and <br>
            accessing information regarding an institution's faculty members. This system is essentially a database <br>
            of every professor's career development be it research,teaching, credentials, articles, etc.</p>
        <button class="cn"><a href="#"> JOIN US </a></button>

        <div class="login-page">
            <div class="form">

                <?php

                $success = "";
                $error_message = "";
                $conn = mysqli_connect("localhost", "root", "", "faculty");
                $check = mysqli_connect("localhost", "root", "", "faculty");
                if (!empty($_GET["submit_email"])) {
                    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $_GET["email"] . "'");
                    $count  = mysqli_num_rows($result);
                    if ($count > 0) {

                        $emailz = $_GET['email'];

                        // generate OTP
                        $otp = rand(100000, 999999);
                        // Send OTP
                        require_once("mail_function.php");
                        $mail_status = sendOTP($_GET["email"], $otp);

                        $hour_to_add = 8;

                        $time = new DateTime();
                        $time->add(new DateInterval('PT' . $hour_to_add . 'H'));
                        $date = $time->format('Y-m-d H:i:s');

                        if ($mail_status == 1) {
                            $result = mysqli_query($conn, "INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . $date . "')");
                            $current_id = mysqli_insert_id($conn);
                            $result2 = mysqli_query($check, "UPDATE users SET otp = $otp WHERE email = '" . $_GET["email"] . "'");
                            if (!empty($current_id)) {
                                $success = 1;
                            }
                        }
                    } else {
                        $error_message = "Email not exists!";
                    }
                }
                if (!empty($_GET["submit_otp"])) {
                    if ($result2 = $check->query("SELECT * FROM users WHERE email = '" . $_GET["email"] . "' AND otp ='" . $_GET["otp"] . "'")) {
                    }

                    $result = mysqli_query($conn, "SELECT * FROM otp_expiry WHERE otp='" . $_GET["otp"] . "' AND is_expired!=1 AND CURRENT_TIMESTAMP <= DATE_ADD(create_at, INTERVAL 5 MINUTE)");
                    $count  = mysqli_num_rows($result);
                    if (!empty($count) and $result2->num_rows == 1) {
                        $emailz = $_GET['email'];
                        $result = mysqli_query($conn, "UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_GET["otp"] . "'");
                        $result2 = mysqli_query($check, "UPDATE users SET otp = '000000' WHERE email = '" . $_GET["email"] . "'");
                        $success = 2;
                    } else {
                        $success = 1;
                        $emailz = $_GET['email'];
                        $error_message = "Invalid OTP or Password! \n Please get a new OTP and make sure you correctly input your password or OTP";
                    }
                }
                ?>

                <x-slot name="logo">

                </x-slot>

                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <center><img src="/images/logo-3.png" style="width:70px"></center>
                <?php
                if (!empty($error_message)) {
                ?>
                    <div class="message error_message"><?php echo $error_message; ?></div>
                <?php
                }
                ?>

                <form id="otp" method="GET" action="">
                    @csrf
                    <?php
                    if (!empty($success == 1)) {
                    ?>
                        <div class="tableheader">Enter OTP</div>
                        <p style="color:#31ab00;">Check your email for the OTP</p><br>
                        <x-jet-input class="block mt-1 w-full" name="email" type="text" value="<?php echo (isset($emailz)) ? $emailz : ''; ?>" readonly required />
                        <div class="tablerow">
                            <x-jet-input class="block mt-1 w-full text-center" type="text" id="otp" name="otp" placeholder="One Time Password" />
                        </div>
                        <div id='submitb'>
                            <div class="tableheader"><input type="submit" name="submit_email" value="Resend OTP" class="btnSubmit"></div>
                            <div class="tableheader"><input type="submit" name="submit_otp" value="Submit" class="btnSubmit"></div>
                        </div>
                    <?php
                    } else if ($success == 2) {
                    ?>
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input class="block mt-1 w-full" id="email2" type="email" value="<?php echo (isset($emailz)) ? $emailz : ''; ?>" readonly required />
                        </div>
                    <?php
                    } else {
                    ?>
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <div class="tableheader"><input type="submit" name="submit_email" value="Get OTP" class="btnSubmit"></div>
                        </div>
                    <?php
                    }
                    ?>
                </form>

                <form id="verify" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-jet-input id="email" class="block mt-1 w-full" type="hidden" id="email" name="email" :value="old('email')" readonly required autofocus />
                    </div>

                    

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="pass" class="block mt-1 w-full" type="password" required autocomplete="current-password" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="hidden" name="password" required />
                        <x-jet-label id="noHighlight" class="mt-5 w-full text-sm" onmousedown="showPass()" onmouseup="showPass()">
                            {{ __('SHOW PASSWORD') }}
                        </x-jet-label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                        <p class="message">Not Registered? <a href="#">Register</a></p>
                        <x-jet-button class="ml-4" onclick="setEmail()">
                            {{ __('Login') }}
                        </x-jet-button>
                    </div>
                </form>


                <form method="POST" class="register-form" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <p class="message">Already Registered? <a href="#">Login</a></p>
                        </a>

                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
    $('.message a').click(function() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });

    function setEmail() {
        document.getElementById("email").value = document.getElementById("email2").value;
        var success = "<?php echo $success; ?>";
        if (success == 2) {
            document.getElementById('password').value = document.getElementById('pass').value;
            document.getElementById('pass').value = "0000000000000000000000000000000";
        }
    }

    function showPass() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>

</html>