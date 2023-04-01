<?php
include 'script.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/dashboard_link.css">
    <link rel="stylesheet" href="../../styles/my_profile_link.css">
    <!-- <link rel="stylesheet" href="../styles/myStudent.css"> -->
    <link rel="stylesheet" href="../../styles/data-table.css">
    <link rel="shortcut icon" href="../../assets/logo/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b4c62562db.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">

        <div class="sidebar">

            <div id="menu-icon">
                <i class="fa-solid fa-angle-right"></i>
            </div>

            <div class="sidebar-header">
                <img src="../../src/logo/logo.png" alt="logo image">
                <h5 class="title">InternTrack</h5>
            </div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item active" data-content="dashboard">
                    <img src="../../src/logo/dashboard.png" alt="">
                    <p>Dashboard</p>
                </li>

                <li class="sidebar-menu-item" data-content="my_profile">
                    <img src="../../src/logo/profile.png" alt="">
                    <p>My profile</p>
                </li>
                <li class="sidebar-menu-item" data-content="myStudent">
                    <img src="../../src/logo/student.png" alt="">
                    <p>My students</p>
                </li>

                <li class="sidebar-menu-item" data-content="records">
                    <img src="../../src/logo/studentlist.png" alt="">
                    <p>Records</p>
                </li>

                <span class="header_message">-Messages</span>

                <li class="sidebar-menu-item" data-content="messages">
                    <img src="../../src/logo/message.png" alt="">
                    <p>Messages</p>
                </li>
                <li class="sidebar-menu-item" data-content="announcement">
                    <img src="../../src/logo/announcement.png" alt="">
                    <p>Announcement</p>
                </li>
                <li class="sidebar-menu-item" data-content="about">
                    <img src="../../src/logo/about.png" alt="">
                    <p>About us</p>
                </li>


                <li class="sidebar-menu-item" data-content="contact">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a id="signout" href="#">Sign out</a>
                </li>


                
            </ul>

        </div>

        <div class="main">
            <div class="content active dashboard" id="dashboard">
                <?php include '../admin/includes/dashboard.php'?>
            </div>
            <div class="content myprofile" id="my_profile">
                <?php include '../admin/includes/my_profile.php'?>
            </div>
            <div class="content myprofile" id="myStudent">
                <?php include '../admin/includes/myStudent.php' ?>
            </div>
            <div class="content myprofile" id="records">Records</div>
            <div class="content" id="messages">messages.</div>
            <div class="content" id="announcement">announcement.</div>
            <div class="content" id="about">about.</div>
        </div>
    </div>

    <script src="../../script/apps.js"></script>


</body>

</html>