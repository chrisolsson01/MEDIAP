<?php 
include('functions.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $website ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <!-- navbar css & js -->
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Muli|PT+Serif&display=swap" rel="stylesheet">
    <link href="/assets/css/navbar.css" type="text/css" rel="stylesheet">
    <script src="build/blotter.js"></script>
    <script src="build/materials/liquidDistortMaterial.js"></script>
    <script src="build/materials/fliesMaterial.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!-- <script src="src/navbar.js"></script> -->

</head>

<body style="overflow: hidden;">
    <section class="Sec-Register">
        <div class="left-side">
            <!-- <img src="assets/img/japan-4287832_1920.jpg" alt="Register MEDIAP"> -->
            <div id="Nav-Logo" style="top: 20%;">
                <h1 class="ml1">
                    <span class="text-wrapper">
                        <span class="line line1"></span>
                        <span class="letters">MEDIAP</span>
                        <span class="line line2"></span>
                    </span>
                </h1>
                <script>
                    // Wrap every letter in a span
                    $('.ml1 .letters').each(function () {
                        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g,
                            "<span class='letter'>$&</span>"));
                    });

                    anime.timeline({
                            loop: false
                        })
                        .add({
                            targets: '.ml1 .letter',
                            scale: [0.3, 1],
                            opacity: [0, 1],
                            translateZ: 0,
                            easing: "easeOutExpo",
                            duration: 600,
                            delay: function (el, i) {
                                return 70 * (i + 1)
                            }
                        }).add({
                            targets: '.ml1 .line',
                            scaleX: [0, 1],
                            opacity: [0.5, 1],
                            easing: "easeOutExpo",
                            duration: 700,
                            offset: '-=875',
                            delay: function (el, i, l) {
                                return 80 * (l - i);
                            }
                        });
                </script>
            </div>
        </div>
        <div class="register-form">

            <form method="post" action="">
                <p>Register</p>
                <!-- Firstname --><br><br>
                <label for="firstname">Firstname</label><br>
                <input type="text" max="25" name="firstname" required placeholder="Enter Firstname">
                <!-- Lastname --><br><br>
                <label for="lastname">Lastname</label><br>
                <input type="text" max="45" name="lastname" required placeholder="Enter Lastname">
                <!-- Username --><br><br>
                <label for="username">Username</label><br>
                <input type="text" max="25" name="username" required placeholder="Enter Username">
                <!-- Email --><br><br>
                <label for="email">Email</label><br>
                <input type="email" max="45" name="email" required placeholder="Enter Email">
                <!-- Password --><br><br>
                <label for="password">Password</label><br>
                <input id="password" type="password" max="25" name="password_1" required placeholder="Enter Password">
               <br><br> <label for="password">Confirm Password</label><br>
                <input id="password" type="password" max="25" name="password_2" required placeholder="Confirm Password">
                <br><br>
                <br><br>
                <input
                    style="color:white;width:6vw;height:30px;border: 1 solid #0a4a7e;border-radius: 6%;background-color:#2196f3;"
                    type="submit"
                    name="register_btn" value="Register!" />
                <p style="font-weight: 200;font-size: 17px;">
                    Already a member? <a href="login.php">Sign in</a>
                </p>
                <!-- Password Repeat<br><br>
                <label for="password_repeat"><b>Password Repeat</b></label>
                <input id="password_repeat" type="password" max="25" name="password_repeat" required placeholder="Enter Password again">
                <script>
                    var password = document.getElementById("password"),
                        confirm_password = document.getElementById("password_repeat");

                    function validatePassword() {
                        if (password.value != confirm_password.value) {
                            confirm_password.setCustomValidity("Passwords Don't Match");

                        } else {
                            confirm_password.setCustomValidity('');
                        }
                    }

                    password.onchange = validatePassword;
                    confirm_password.onkeyup = validatePassword;
                </script> -->
            </form>
        </div>
    </section>
</body>

</html>