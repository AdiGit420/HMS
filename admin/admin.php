<?php

include '../config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <!-- loading bar -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="../css/flash.css">
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>Golden Palace - Admin</title>

</head>

<body>    <!-- mobile view -->
    <div id="mobileview">
        <h5>Admin panel is not available in mobile view. Please use a desktop or laptop.</h5>
    </div>
  
    <!-- nav bar -->

    <nav class="uppernav">
        <div class="logo">
            <img class="bluebirdlogo" src="../image/goldenpalacelogo-glow.png" alt="Golden Palace logo">
            <p>GOLDEN PALACE</p>
        </div>
        <div class="logout">
            <a href="../logout.php"><button class="btn btn-primary">Logout</button></a>
        </div>
    </nav>
    <nav class="sidenav">
        <ul>
            <li class="pagebtn active"><img src="../image/icon/dashboard.png" alt="Dashboard icon">&nbsp;&nbsp;&nbsp;Dashboard</li>
            <li class="pagebtn"><img src="../image/icon/bed.png" alt="Room booking icon">&nbsp;&nbsp;&nbsp;Room Booking</li>
            <li class="pagebtn"><img src="../image/icon/wallet.png" alt="Payment icon">&nbsp;&nbsp;&nbsp;Payment</li>            
            <li class="pagebtn"><img src="../image/icon/bedroom.png" alt="Rooms icon">&nbsp;&nbsp;&nbsp;Rooms</li>
            <li class="pagebtn"><img src="../image/icon/staff.png" alt="Staff icon">&nbsp;&nbsp;&nbsp;Staff</li>
        </ul>
    </nav>    <!-- main section -->
    <div class="mainscreen">
        <iframe class="frames frame1 active" src="./dashboard.php" frameborder="0"></iframe>
        <iframe class="frames frame2" src="./roombook.php" frameborder="0"></iframe>
        <iframe class="frames frame3" src="./payment.php" frameborder="0"></iframe>
        <iframe class="frames frame4" src="./room.php" frameborder="0"></iframe>
        <iframe class="frames frame5" src="./staff.php" frameborder="0"></iframe>
    </div>
</body>

<script src="./javascript/script.js"></script>

</html>
