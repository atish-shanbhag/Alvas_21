<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
include('config.php');
$canupdate=true;
$total=0;
$q="select * from setiamaxmarks";
$record=mysqli_query($con,$q);
$r=mysqli_fetch_array($record);
    $_1AM=$r['1a'];
    $_1AL=$r['1al'];
    $_1AC=$r['1ac'];
    $_1BM=$r['1b'];
    $_1BL=$r['1bl'];
    $_1BC=$r['1bc'];
    $_1CM=$r['1c'];
    $_1CL=$r['1cl'];
    $_1CC=$r['1cc'];
    $_2AM=$r['2a'];
    $_2AL=$r['2al'];
    $_2AC=$r['2ac'];
    $_2BM=$r['2b'];
    $_2BL=$r['2bl'];
    $_2BC=$r['2bc'];
    $_2CM=$r['2c'];
    $_2CL=$r['2cl'];
    $_2CC=$r['2cc'];
    $_3AM=$r['3a'];
    $_3AL=$r['3al'];
    $_3AC=$r['3ac'];
    $_3BM=$r['3b'];
    $_3BL=$r['3bl'];
    $_3BC=$r['3bc'];
    $_3CM=$r['3c'];
    $_3CL=$r['3cl'];
    $_3CC=$r['3cc'];
    $_4AM=$r['4a'];
    $_4AL=$r['4al'];
    $_4AC=$r['4ac'];
    $_4BM=$r['4b'];
    $_4BL=$r['4bl'];
    $_4BC=$r['4bc'];
    $_4CM=$r['4c'];
    $_4CL=$r['4cl'];
    $_4CC=$r['4cc'];
    if(isset($_POST['setiamarks1']))
    {
          echo "<script>alert('$sss');</script>";
         $s1am=$_POST['s1am'];
	 $s1bm=$_POST['s1bm'];
	 $s1cm=$_POST['s1cm'];
	 $s2am=$_POST['s2am'];
	 $s2bm=$_POST['s2bm'];
	 $s2cm=$_POST['s2cm'];
	 $s3am=$_POST['s3am'];
	 $s3bm=$_POST['s3bm'];
	 $s3cm=$_POST['s3cm'];
	 $s4am=$_POST['s4am'];
	 $s4bm=$_POST['s4bm'];
	 $s4cm=$_POST['s4cm'];
	 if((is_numeric($s1am)))
	{
  		 $test1a=$s1am;
	}
	else
	{
   		$test1a=0;
                $s1am="NA";
	}
	 if((is_numeric($s1bm)))
	{
  		 $test1b=$s1bm;
	}
	else
	{
   		$test1b=0;
                $s1bm="NA";
	}
	 if((is_numeric($s1cm)))
	{
  		 $test1c=$s1cm;
	}
	else
	{
   		$test1c=0;
                $s1cm="NA";
	}
	 if((is_numeric($s2am)))
	{
  		 $test2a=$s2am;
	}
	else
	{
   		$test2a=0;
                $s2am="NA";
	}
	 if((is_numeric($s2bm)))
	{
  		 $test2b=$s2bm;
	}
	else
	{
   		$test2b=0;
                $s2bm="NA";
	}
	 if((is_numeric($s2cm)))
	{
  		 $test2c=$s2cm;
	}
	else
	{
   		$test2c=0;
                $s2cm="NA";
	}
	 if((is_numeric($s3am)))
	{
  		 $test3a=$s3am;
	}
	else
	{
   		$test3a=0;
                $s3am="NA";
	}
	 if((is_numeric($s3bm)))
	{
  		 $test3b=$s3bm;
	}
	else
	{
   		$test3b=0;
                $s3bm="NA";
	}
           if((is_numeric($s3cm)))
	{
  		 $test3c=$s3cm;
	}
	else
	{
   		$test3c=0;
                $s3cm="NA";
  	}
        if((is_numeric($s4am)))
	{
  		 $test4a=$s4am;
	}
	else
	{
   		$test4a=0;
                $s4am="NA";
	}
        if((is_numeric($s4bm)))
	{
  		 $test4b=$s4bm;
	}
	else
	{
   		$test4b=0;
                $s4bm="NA";
	}
        if((is_numeric($s4cm)))
	{
  		 $test4c=$s4cm;
	}
	else
	{
   		$test4c=0;
                $s4cm="NA";
	}
         if($canupdate==true)
	{
		if($test1a+$test1b+$test1c>$test2a+$test2b+$test2c)
		{
 		   $total=$test1a+$test1b+$test1c;
  		 $in="UPDATE setiamarks SET 1a='$s1am',1b='$s1bm',1b='$s1cm',2a='$s2am',2b='$s2bm',2b='$s2cm' WHERE USN='4AL17CS077'";
  		 $inres=mysqli_query($con,$in);
		}
		else
		{
			 $in="UPDATE setiamarks SET 1a='$s1am',1b='$s1bm',1c='$s1cm',2a='$s2am',2b='$s2bm',2c='$s2cm',3a='$s3am',3b='$s3bm',3c='$s3cm',4a='$s4am',4b='$s4bm',4c='$s4cm' WHERE USN='4AL17CS077'";
			   $inres=mysqli_query($con,$in);
  			 $total=$test2a+$test2b+$test2c;
		}
               
		if($test3a+$test3b+$test3c>$test4a+$test4b+$test4c)
		{
  			  $total=$total+$test3a+$test3b+$test3c;
  			 $in1="UPDATE setiamarks SET total='$total' WHERE USN='4AL17CS077'";
  			 $inres=mysqli_query($con,$in1);
		}
		else
		{
 
			$total=$total+$test4a+$test4b+$test4c;
			   $inres=mysqli_query($con,"UPDATE setiamarks SET total='$total' WHERE USN='4AL17CS077'");
		}
	}
	
    }
?>
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
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/1aiet-logo.png"/>
    <link rel="stylesheet" href="assets/css/nav_side.css">
    <link rel="stylesheet" href="assets/css/Contents.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/Contents.css">
    <link rel="stylesheet" href="assets\css\internal_tabulate.css">
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
        <a id="show-sidebar" class="btn btn-sm btn-black  top" style="margin-top: 70px;" href="#">
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
                                    <!-- <li>
                                        <a href="#">Course File</a>
                                    </li>
                                    <li>
                                        <a href="#">Assessment Method</a>
                                    </li> -->

                                </ul>
                            </div>
                        </li>



                        <!-- <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span>Performance</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">My Performance</a>
                                    </li>
                                    <li>
                                        <a href="#">Goal Sheet</a>
                                    </li>
                                    <li>
                                        <a href="#">AGP</a>
                                    </li>

                                </ul>
                            </div>
                        </li> -->

                        <li>
                            <a href="#">
                                <i class="fa fa-bell"></i>
                                <span>Alerts / Notifications</span>
                            </a>
                        </li>




                        <!-- <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>

                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">

            <div class="row pr-0 text-center">
                <div class="col col-md-8 col-4"></div>
                <div class="col col-md-2 col-3">

                    <!-- Button trigger modal -->
                    
                    <button type="button" class="btn btn-black"  style="width: 80px;" data-toggle="modal" data-target="#exampleModal1">
                    <i class="fas fa-user-cog"></i>
                        Set
                    </button>
                    
                    
                    <!-- Modal -->
                    
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <form method="post" action="maxset.php">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Entries</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body ">
                               
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">1A</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="1AL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="1AC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="1AM">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">1B</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="1BL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="1BC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="1BM">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">1C</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="1CL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="1CC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="1CM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">2A</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="2AL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="2AC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="2AM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">2B</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="2BL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="2BC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="2BM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">2C</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="2CL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="2CC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="2CM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">3A</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="3AL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="3AC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="3AM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">3B</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="3BL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="3BC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="3BM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">3C</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="3CL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="3CC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="3CM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">4A</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="4AL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="4AC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="4AM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">4B</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="4BL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="4BC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="4BM">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2 mx-auto my-auto">4C</div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="4CL">
                                        <option selected>L</option>
                                        <option value="1">L1</option>
                                        <option value="2">L2</option>
                                        <option value="3">L3</option>
                                        <option value="4">L4</option>
                                        <option value="5">L5</option>
                                      </select></div>
                                    <div class="col col-md-3">
                                        <select class="form-control" aria-label="Default select example" name="4CC">
                                            <option selected>CO</option>
                                            <option value="1">CO1</option>
                                            <option value="2">CO2</option>
                                            <option value="3">CO3</option>
                                            <option value="4">CO4</option>
                                            <option value="5">CO5</option>
                                            <option value="6">CO6</option>
                                          </select>
                                    </div>
                                    <div class="col col-md-4">
                                        <input  class="form-control"  placeholder="MAX MARKS" name="4CM">

                                    </div>
                                </div>

                               <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-black" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary btn-green" name="setmarks" value="Save Changes">
                            </div>
                                
                            </div>
 </form>
                        </div>
                        </div>
                    </div>
                            
                </div>
                <div class="col col-md-2 col-2">
                    <button type="button" class="btn btn-black mx-auto" style="width: 80px;"> <i class="fas fa-arrow-circle-left"></i> Back</button>
                    <div class="row">
                        <div class="col">


                            <a href="archive_internal.html" class="btn mt-4">
                                <i _ngcontent-c10="" class="fa fa-archive" style="color: #4a8bca"></i> View Archive
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cont text-center">
                <div class="row ml-2">
                    <div class="col mt-5">
                        <table class="table table-stripped table-responsive text-center">
                            <thead>
                                <tr>
                                    <th scope="col">CO</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"><?php if(isset($_1AC)) { echo $_1AC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_1BC)) { echo $_1BC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_1CC)) { echo $_1CC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2AC)) { echo $_2AC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2BC)) { echo $_2BC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2CC)) { echo $_2CC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3AC)) { echo $_3AC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3BC)) { echo $_3BC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3CC)) { echo $_3CC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4AC)) { echo $_4AC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4BC)) { echo $_4BC; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4CC)) { echo $_4CC; } else { echo "#"; } ?></th>
  

                                </tr>

                                <tr>
                                    <th scope="col">Level</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"><?php if(isset($_1AL)) { echo $_1AL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_1BL)) { echo $_1BL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_1CL)) { echo $_1CL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2AL)) { echo $_2AL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2BL)) { echo $_2BL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2CL)) { echo $_2CL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3AL)) { echo $_3AL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3BL)) { echo $_3BL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3CL)) { echo $_3CL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4AL)) { echo $_4AL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4BL)) { echo $_4BL; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4CL)) { echo $_4CL; } else { echo "#"; } ?></th>
  

                                </tr>
                                <tr>
                                    <th scope="col">Max Marks</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"><?php if(isset($_1AM)) { echo $_1AM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_1BM)) { echo $_1BM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_1CM)) { echo $_1CM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2AM)) { echo $_2AM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2BM)) { echo $_2BM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_2CM)) { echo $_2CM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3AM)) { echo $_3AM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3BM)) { echo $_3BM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_3CM)) { echo $_3CM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4AM)) { echo $_4AM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4BM)) { echo $_4BM; } else { echo "#"; } ?></th>
                                    <th scope="col"><?php if(isset($_4CM)) { echo $_4CM; } else { echo "#"; } ?></th>
  

                                </tr>


                              <tr>
                                <th scope="col">Present/Absent</th>
                                <th scope="col">USN</th>
                                <th scope="col">Name</th>
                                <th scope="col">1A</th>
                                <th scope="col">1B</th>
                                <th scope="col">1C</th>
                                <th scope="col">2A</th>
                                <th scope="col">2B</th>
                                <th scope="col">2C</th>
                                <th scope="col">3A</th>
                                <th scope="col">3B</th>
                                <th scope="col">3C</th>
                                <th scope="col">4A</th>
                                <th scope="col">4B</th>
                                <th scope="col">4C</th>
                                <th scope="col">Final Marks</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                              <tr>
                                  
                              </tr>
				<?php
					$m="select * from setiamarks";
					$record1=mysqli_query($con,$m);
					while($ro=mysqli_fetch_array($record1))
					{
                                       ?>
                              <tr>
				<form method="post">
                                <th scope="row"> 
                                    <label class="switch ">
                                        <input type="checkbox" name="cname" onchange="this.form.submit()">
                                        <span class="slider round "></span>
                                      </label>
                                </th>
				</form>
                                <td><a href="internal_tabulate.php?edit=<?php echo $ro['USN'];?>"  style="text-decoration: none; " data-toggle="modal" data-target="#exampleModal"><?php echo $ro['USN']; ?></a></td>
                                <td>
                                
                                
                            
                                   <?php echo $ro['name']; ?>
                                    <!-- Modal -->
                                    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
 <?php $sss=$ro['USN'];  ?>
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Enter the Marks</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col col-md-6">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col col-md-2"><label for="1A">1A</label></div>
                                                                    <div class="col col-md-4"> Max Marks</div>
                                                                    <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="1A"  placeholder="NA" name="s1am">
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col col-md-2"><label for="1B">1B</label></div>
                                                                    <div class="col col-md-4"> Max Marks</div>
                                                                    <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="1B"  placeholder="NA" name="s1bm">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                              <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col col-md-2"><label for="1C">1C</label></div>
                                                                    <div class="col col-md-4"> Max Marks</div>
                                                                    <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="1C"  placeholder="NA" name="s1cm">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class="col col-md-6 p-1">
                                                            <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-md-2"><label for="2A">2A</label></div>
                                                                <div class="col col-md-4">Max Marks</div>
                                                                <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="2A"  placeholder="NA" name="s2am">
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="form-group" >
                                                            <div class="row">
                                                                <div class="col col-md-2"><label for="2B">2B</label></div>
                                                                <div class="col col-md-4"> Max Marks</div>
                                                                <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="2B"  placeholder="NA" name="s2bm">
                                                                </div>
                                                            </div>
                                                            </div>
                                                          <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-md-2"><label for="2C">2C</label></div>
                                                                <div class="col col-md-4"> Max Marks</div>
                                                                <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="2C"  placeholder="NA" name="s2cm">
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="container">
                                                <div class="row">
                                                    <div class="col col-md-6">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-md-2"><label for="3A">3A</label></div>
                                                                <div class="col col-md-4"> Max Marks</div>
                                                                <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="3A"  placeholder="NA" name="s3am">
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-md-2"><label for="3B">3B</label></div>
                                                                <div class="col col-md-4"> Max Marks</div>
                                                                <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="3B"  placeholder="NA" name="s3bm">
                                                                </div>
                                                            </div>
                                                            </div>
                                                          <div class="form-group">
                                                            <div class="row">
                                                                <div class="col col-md-2"><label for="3C">3C</label></div>
                                                                <div class="col col-md-4"> Max Marks</div>
                                                                <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="3C"  placeholder="NA"name="s3cm">
                                                                </div>
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <div class="col col-md-6 p-1">
                                                        <div class="form-group">
                                                        <div class="row">
                                                            <div class="col col-md-2"><label for="4A">4A</label></div>
                                                            <div class="col col-md-4">Max Marks</div>
                                                            <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="4A"  placeholder="NA" name="s4am">
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group" >
                                                        <div class="row">
                                                            <div class="col col-md-2"><label for="4B">4B</label></div>
                                                            <div class="col col-md-4"> Max Marks</div>
                                                            <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="4B"  placeholder="NA" name="s4bm">
                                                            </div>
                                                        </div>
                                                        </div>
                                                      <div class="form-group">
                                                        <div class="row">
                                                            <div class="col col-md-2"><label for="4C">4C</label></div>
                                                            <div class="col col-md-4"> Max Marks</div>
                                                            <div class="col col-md-4"><input  class="form-control" style="width: 50px;" id="4C"  placeholder="NA" name="s4cm">
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                                                
                                                  
                                                    
                                                        
                                                
                                              
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-black btn-secondary" data-dismiss="modal">Close</button>
					    <input type="submit" class="btn btn-primary btn-green" value="Save changes" name="setiamarks1">
                                        </div>
                                        </div>

                                    </div>
                                    </div>
          </form>
                                </td>
                                <td>
                                   <?php echo $ro['1a']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['1b']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['1c']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['2a']; ?>
                                </td>
                                <td>
                                     <?php echo $ro['2b']; ?>
                                </td>
                                <td>
                                     <?php echo $ro['2c']; ?>
                                </td>
                                <td>
                                     <?php echo $ro['3a']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['3b']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['3c']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['4a']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['4b']; ?>
                                </td>
                                <td>
                                    <?php echo $ro['4c']; ?>
                                </td>
                                <td><label class= "p-2" for=""><?php echo $ro['total']; ?></label></td>
                              </tr>
                              <?php
						}
                                      ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col col-md-3 col-12 my-3">
                        <select class="form-control" aria-label="Default select example">
                            <option selected>HOD</option>
                            <option value="1">CSE HOD</option>
                            <option value="2">ISE HOD</option>
                            <option value="3">ECE HOD</option>
                          </select>
                    </div>
                    <div class="col col-md-9 col-12 my-auto">
                        <button type="button" class="btn btn-green"><i class="fas fa-check-double"></i> Submit</button>
                    </div>
                </div>
            </div>
            
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="assets/js/side_nav.js"></script>

</body>

</html>