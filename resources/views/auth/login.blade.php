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

<head>
    <style>
        #submitb {
            width: 100%;
            text-align: center;
        }

        .tableheader {
            padding: 15px;
            font-size: 20px;
            display: inline-block;
        }

        .tablerow {
            padding: 20px;
        }

        .error_message {
            color: #b12d2d;
            background: #ffb5b5;
            border: #c76969 1px solid;
        }

        .message {
            width: 100%;
            padding: 10px 30px;
            border-radius: 4px;
            margin-bottom: 5px;
        }

        .login-input {
            border: #CCC 1px solid;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .btnSubmit {
            padding: 3px 8px;
            background: #2c7ac5;
            color: #FFF;
            border-radius: 4px;
        }

        #noHighlight {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>

<script>
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

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <img src="/uploads/logo/d1.jpg">
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
                <x-jet-button class="ml-4" onclick="setEmail()">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>