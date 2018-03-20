<?php
require 'db_connection.php';
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit();
}
session_start();
if(isset($_SESSION["a_id"])){
}
else{
    echo "<script>alert('Session Expired. Login Again!');
                  window.location = '../html/perfect_admin.html'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>About us</title>
    <link href="../css/all.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/aboutus.css" rel="stylesheet" type="text/css" media="all" />
    <script src="../js/jquery-1.8.3.min.js"></script>
</head>
<body class="">
<div id="site">
    <div id="header">
    </div>
    <h3 align="right"><font color="#92c100"><?php
            $a_id=$_SESSION['a_id'];
            $query2 = "SELECT * FROM `admin` WHERE a_id=$a_id";
            $result2 = mysqli_query($connection, $query2);
            $admin=mysqli_fetch_assoc($result2);
            $admin_name=$admin['adminname'];
            echo "Welcome, " . $admin_name;
            ?></font></h3>
    <div id="nav_main" role="navigation" class="reset menu pull_out">
        <h3 class="hidden">Main Navigation</h3>
        <ul>
            <li><a href="admin_home.php"><span>Add balance</span></a></li>
            <li><a href="admin_rating.php"><span>View ratings</span></a></li>
            <li><a href="admin_comments.php"><span>View comments</span></a></li>
            <li><a href="admin_aboutus.php"><span>About Us</span></a></li>
            <li><a href="admin_view_user_info.php" class="parent"><span>View UserInfo</span></a></li>
        </ul>
    </div>
    <div id="content">
        <div id="leftbar">
            <h2>The Perfect Treat</h2>
            <h3>OUR LEGACY</h3>
            <p>We began our journey as a tiny shop in Bikaner, the land as famed for its savories as for its leather faced pipe players and fierce warriors. By 1982, we had set up shops in Mumbai and the financial capital of India begun to stop by and take note of the savories and sweets. It was word of mouth that grew the business manifold over the next decade till our food outlets became synonymous with taste, hygiene and innovation.</p>
            <div id="news1">
                <h3>Latest Updates</h3>
                <h4>Ganpati Offer</h4>
                <small>August, 2017</small>
                <p>15% off on Modak and Prasad Items.
                    Hurry now.Offer Valid on Website only.
                    <a href="#"> Read More</a></p>
            </div>
        </div>
        <div id="rightbar"><iframe width="560" height="315" src="https://www.youtube.com/embed/ZdLrYy61PZU?autoplay=1&amp;showinfo=0&amp;start=21" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="footer">
    </div>
</div>
<p id="disclaimer">This website is made by Saqlain Kadiri and Rahul Joshi for educational purposes only. By using this website you understand that there is no attorney client relationship between you and the website publisher.This website is to be used as a template for online sweet shopping for educational purposes only.</p>
<script>
    $(document).ready(function() {
        $("#header").load("admin_header.html");
        $("#footer").load("footer.html");
    });
</script>
</body>
</html>
