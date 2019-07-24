<?php 
    include('functions.php');
    if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    }

    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
    }

    // ...
    function isAdmin()
    {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
    return true;
    }else{
    return false;
    }
    }
?>
<?php  if (isset($_SESSION['user']));?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $website ?></title>
    <link href="/assets/css/main.css" type="text/css" rel="stylesheet">
    <?php include('assets/style.php'); ?>
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

<body>

    <section class="Sec-Nav">
        <label for="menu-toggle">
            <div id="menu-ico">
            </div>
        </label>
        <input type="checkbox" id="menu-toggle" />

        <nav>
            <ul>
                <li style="text-align:left; margin-top: 20px;">
                    <?php echo $_SESSION['user']['username']; ?>
                    <p style="margin-top:-5px;">User Type: <?php echo ucfirst($_SESSION['user']['user_type']); ?></p>
                </li>
                <br>
                <li>
                    <a href="" title="">Home</a>
                </li>
                <li>
                    <a href="" title="">My Profile</a>
                </li>
                <li>
                    <a href="" title="">Following</a>
                </li>
                <li>
                    <a href="" title="">Settings</a>
                </li>
                <li>
                    <a href="create_user.php"> Users</a>
                </li>
                <li>
                    <a href="index.php?logout='1'" style="font-size:18px">Logout?</a>
                </li>
                

            </ul>
        </nav>
        <span class="bar bar1"></span>
        <span class="bar bar2"></span>
        <span class="bar bar3"></span>

        <div id="Nav-Logo">
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

        <div class="Nav-Search">
            <input type="search" class="search-bar" placeholder="Search..." autocomplete=>
        </div>
    </section>
    <section class="Sec-Header">
        <div class="Popular-Posts">

        </div>
    </section>

</body>

</html>