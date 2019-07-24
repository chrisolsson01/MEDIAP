<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php $website ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<!-- <body>
    <div class="header">
        <h2>Admin - User</h2>
    </div>

    <form method="post" action="create_user.php">

        
        <div class="input-group">
            <label>Firstname</label>
            <input type="text" name="firstname" value="">
        </div>
        <div class="input-group">
            <label>Lastname</label>
            <input type="text" name="lastname" value="">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="
        </div>
        <div class="input-group">
            <label>User type</label>
            <select name="user_type" id="user_type">
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="register_btn">Create user</button>
        </div>
    </form>
</body> -->

<body style="overflow: hidden;">
    <section class="Sec-Register">
        <div class="register-form">
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
            <form method="post" action="create_user.php">
                <!-- Firstname --><br><br>
                <label for="firstname"><b>Firstname</b></label>
                <input type="text" max="25" name="firstname" required placeholder="Enter Firstname">
                <!-- Lastname --><br><br>
                <label for="lastname"><b>Lastname</b></label>
                <input type="text" max="45" name="lastname" required placeholder="Enter Lastname">
                <!-- Username --><br><br>
                <label for="username"><b>Username</b></label>
                <input type="text" max="25" name="username" required placeholder="<?php echo $username; ?>">
                <!-- Email --><br><br>
                <label for="email"><b>Email</b></label>
                <input type="email" max="45" name="email" required placeholder="<?php echo $email; ?>">
               
                <!-- Password --><br><br>
                <label for="password"><b>Password</b></label>
                <input id="password" type="password" max="25" name="password_1" required placeholder="Enter Password">
                <label for="password"><b>Confirm Password</b></label>
                <input id="password" type="password" max="25" name="password_2" required placeholder="Confirm Password">
                <br><br>
                <br><br>
                <input type="submit" name="register_btn" value="Add Member" />
            </form>
        </div>
    </section>
</body>

</html>


 <!-- User Type -->
 <label>User type</label>
 <select name="user_type" id="user_type">
     <option value=""></option>
     <option value="admin">Admin</option>
     <option value="user">User</option>
 </select>