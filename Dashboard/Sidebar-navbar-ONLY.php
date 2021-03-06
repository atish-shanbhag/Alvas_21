<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/1aiet-logo.png"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nav_side.css">
    <link rel="stylesheet" href="assets/css/Contents.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/Contents.css">
</head>

<body>
    <!-- navbar start -->
    <div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a href="index.html"><img style="height: 50;" src="assets\images\1aiet-logo.png" alt="alvas"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link m-1 glow"  href="#" onclick="alert('notificaions')"><i class="fas fa-bell glow "></i></a>
                    </li>
                    <li class="nav-item glow">
                        <a class="nav-link glow" href="#" onclick="alert('logout function call')">
                            <i class="fas fa-power-off p-1"> Logout</i>
                        </a>
                    </li>
                </ul>


            </div>
        </nav>
    </div>
    <!-- navbar end -->
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark btn-black top" style="margin-top: 70px;" href="#">
            <i class="fas fa-bars top"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Alvas erp</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">

                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>Shilpa</strong>
                        </span>
                        <span class="user-role">Faculty</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Timetable</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Class Timetable</a>
                                    </li>
                                    <li>
                                        <a href="#">Internal Assessment</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Assessment</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Class Transfer</a>
                                    </li> -->
                                </ul>
                            </div>
                        </li>



                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-sitemap sidebar-small-icons"></i>
                                <span>Attendance</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Student Attendance</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-bullseye"></i>
                                <span>Lesson Plan</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Planning & Tracking</a>
                                    </li>
                                    <li>
                                        <a href="#">CO PO Mapping</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Marks Scored</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Internal Assessment</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Assessment</a>
                                    </li>
                                    <li>
                                        <a href="#">Lab</a>
                                    </li>
                                    <li>
                                        <a href="#">University Exam</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Feedback</span>
                            </a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span>Reports</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Progress Report</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-bell"></i>
                                <span>Alerts / Notifications</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

        </nav>
        <!-- sidebar-wrapper  -->
       
        <!-- page-content" -->
    </div>
  
