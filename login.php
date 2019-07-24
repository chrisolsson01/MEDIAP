<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php $website ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <!-- navbar css & js -->
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Muli|PT+Serif&display=swap" rel="stylesheet">
    <script src="build/blotter.js"></script>
    <script src="build/materials/liquidDistortMaterial.js"></script>
    <script src="build/materials/fliesMaterial.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body style="">
    <section class="Sec-Register">
        <div class="left-side">
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

            <form method="post" action="login.php">
                <p>
                    Login
                </p><br><br>
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="username" /><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="password" /> <br><br>
                <input
                    style="color:white;width:6vw;height:30px;border: 1 solid #0a4a7e;border-radius: 6%;background-color:#2196f3;"
                    type="submit" name="login_btn" value="Login" />
            </form>
            <p style="font-weight: 200;font-size: 17px;">
                Not yet a member? <a href="register.php">Sign Up!</a>
            </p>

        </div>
    </section>
</body>

</html>