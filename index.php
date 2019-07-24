<?php
include('functions/functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: functions/login.php');
}


// if(!isAdmin()){
//     $_SESSION['msg'] = "Redirecting to Admin page";
//     header('location: home.php');
    
    
// }

// function isAdmin() {
//     if(isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
//         return true;
//     }else {
//         return false;
//     }
// }

include('includes/header.php');
?>


<body>

    <?php include('includes/navigation.php') ?>
    <section class="Sec-Header">
        <div class="Popular-Posts">
            <?php
                // $image_query = mysql_query("SELECT * FROM image_upload") or die(mysql_error());
                // $file_path = 'http://localhost/home/image-script/uploads/';
                // echo '<div class="images_show">';
                // echo '<center><h1> All Uploaded Images Display Here </h1></center>';
                // echo '</div>';
                // while($all_images = mysql_fetch_assoc( $image_query )){
                //     $img_src = $file_path.$all_images['image_name'];
                //     echo '<div class="images_show">';
                //     echo "<center><img src=".$img_src." > </center> </br>";
                //     echo '</div>';
                // }
            ?>
        </div>
    </section>

</body>

</html>