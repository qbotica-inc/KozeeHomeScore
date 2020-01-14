<?php 
session_start();
?>
<!doctype html>
<html lang="en">
 
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    
    
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/46.2/loader.js"></script>
    <link id="load-css-0" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/46.2/css/core/tooltip.css">
    <link id="load-css-1" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/46.2/css/util/util.css">
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_format_module.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_default_module.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_ui_module.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/46.2/js/jsapi_compiled_gauge_module.js"></script>
    <title>Kozee Web App</title>
    <style>
    
    hr {
  border:none;
  height: 20px;
 	width: 90%;
	height: 50px;
	margin-top: 0;
	border-bottom: 1px solid #1f1209;
	box-shadow: 0 20px 20px -20px #333;
  margin: -50px auto 10px; 
}

    .card {
  position: relative;
  
}

.image {
  display: block;
  width: 100%;
  height: auto;
}


.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
    
    
    
    .br-theme-bars-reversed .br-widget a {
  background-color: pink;
}

.br-theme-bars-reversed .br-widget a.br-active,
.br-theme-bars-reversed .br-widget a.br-selected {
  background-color: #ff446a;
}

.br-theme-bars-reversed .br-widget .br-current-rating {
  color: #ff446a;
  font-size: 20px;  
}
div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/*Overlay*/
#overlay {
  position: fixed;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}

.ad-right{
    float: right;
}


@import "lesshat";

// Method 1) Pure CSS
.star-ratings-css {
  unicode-bidi: bidi-override;
  color: #c5c5c5;
  font-size: 25px;
  height: 25px;
  width: 100px;
  margin: 0 auto;
  position: relative;
  padding: 0;
  text-shadow: 0px 1px 0 #a2a2a2;
  
&-top {
    color: #e7711b;
    padding: 0;
    position: absolute;
    z-index: 1;
    display: block;
    top: 0;
    left: 0;
    overflow: hidden;
  }
&-bottom {
    padding: 0;
    display: block;
    z-index: 0;
  }
}

h4.rating {   font-family: "Open Sans", Tahoma, sans-serif; } 


/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 600px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 20%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 10%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */




/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
hr {
  border:none;
  height: 20px;
 	width: 100%;
	height: 50px;
	margin-top: 0;
	border-bottom: 1px solid #1f1209;
	box-shadow: 0 20px 20px -20px #333;
  margin: -50px auto 10px; 
}
.cp-text{ color: rgba(0,0,0,.7); text-shadow: 0 1px rgba(255, 255, 255, 0.1);}
</style>
</head>

<body>




<?php 
$uri = $_SERVER['REQUEST_URI'];



//grading
if($_SESSION['count_dt'] == 0)
{
    $grade = 0;
    $count_dt = 0;   
}
else
{
    $grade = $_SESSION['grade'];
    $count_dt = $_SESSION['count_dt'];
}

$pieces = explode("?",$uri);
$extract = explode(",",$pieces[1]);
#echo $extract[0];
$new = str_replace("%20"," ",$extract[0]);
$citynew = str_replace("%20"," ",$extract[1]);
$citystate = $citynew . ", AZ";
#echo $extract[0];
#echo $new;
#echo $uri; // Outputs: URI
include 'zillow_api.php';
#use Zillow\ZillowClient;
    
#$client = new ZillowClient('X1-ZWz1h3bazhu8sr_60bkd');

$zws_id = "X1-ZWz1h3bazhu8sr_60bkd";

#$response = $client->GetSearchResults(['address' => '5400 Tujunga Ave', 'citystatezip' => 'North Hollywood, CA 91601']);
$zillow_api = new Zillow_Api($zws_id); // $zws_id is your Zillow API Key
$onetwo = $zillow_api->GetSearchResults(array('address' => $new, 'citystatezip' => $citystate));
$search_result = $zillow_api->GetUpdatedPropertyDetails(array('address' => $new, 'citystatezip' => $citystate));
#echo (string)($search_result->response->editedFacts->bedrooms);


#REDFIN Data

 
/*$uri = "abc?1825,"//$_SERVER['REQUEST_URI'];

$pieces = explode("?",$uri);
$extract = explode(",",$pieces[1]);
#echo $extract[0];
$new = str_replace("%20"," ",$extract[0]);
#echo $extract[0];
#echo $new;
#echo $uri; // Outputs: URI
*/

$myfile = fopen("listfile.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
${"var" . "Street"} = "N/A";
${"var" . "Restaurants"} = "N/A";
${"var" . "Coffee"} = "N/A";
${"var" . "WalkScore"} = "N/A";
${"var" . "TransitScore"} = "N/A";
${"var" . "BikeScore"} = "N/A";
${"var" . "HeatingType"} = "N/A";
${"var" . "HeatingSystem"} = "N/A";
${"var" . "PhyiscalCondition"} = "N/A";
${"var" . "BuildingConstructionQuality"} = "N/A";
${"var" . "ExteriorWall"} = "N/A";
${"var" . "BuildingType"} = "N/A";
${"var" . "NofParkingSpaces"} = "N/A";
while(!feof($myfile)) 
{
    $fileext = fgets($myfile);
    $temp = explode(":",$fileext);
    //echo $temp[0];
    ${"var" . $temp[0]} = $temp[1];
    #echo $varStreet;
  //if(strpos($temp, 'Restaurants'))
}
fclose($myfile);

#echo $search_result->response->images->image->url;
?> 

<div id="myModal" class="modal">

  <!-- Modal content -->
  
  <div id="contentpop" class="modal-content">
    <span class="close">&times;</span>
    Description about the rating:
    
    
    <p>Some text in the Modal..</p>
  </div>

</div>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    


    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Kozee</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <!--
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li  class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style=""><!--
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>-->
                                </div>
                            </li><!--
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/general.html">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/tabs.html">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/404-page.html">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/timeline.html">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/widgets.html">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>-->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Kozee Dashboard</h2>
                                <h2 class="pageheader-title">Street Address <?php echo (string)$search_result->response->address->street ?>, Phoenix, AZ</h2>
                             <!--   <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
            <!--         <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12"> -->
                            <div class="col-8">
                                <div class="card shadow-lg">
                                    <h5 class="card-header">House Photos</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                        <!--
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Image</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Product Id</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0">Order Time</th>
                                                        <th class="border-0">Customer</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #1 </td>
                                                        <td>id000001 </td>
                                                        <td>20</td>
                                                        <td>$80.00</td>
                                                        <td>27-08-2018 01:22:12</td>
                                                        <td>Patricia J. King </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #2 </td>
                                                        <td>id000002 </td>
                                                        <td>12</td>
                                                        <td>$180.00</td>
                                                        <td>25-08-2018 21:12:56</td>
                                                        <td>Rachel J. Wicker </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #3 </td>
                                                        <td>id000003 </td>
                                                        <td>23</td>
                                                        <td>$820.00</td>
                                                        <td>24-08-2018 14:12:77</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #4 </td>
                                                        <td>id000004 </td>
                                                        <td>34</td>
                                                        <td>$340.00</td>
                                                        <td>23-08-2018 09:12:35</td>
                                                        <td>Michael K. Ledford </td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table> -->
 <!--                                           
<div class="w3-content" style="max-width:1200px">
  <img class="mySlides" src="1.jpg" style="width:100%;display:none">
  <img class="mySlides" src="2.jpg" style="width:100%">
  <img class="mySlides" src="3.jpg" style="width:100%;display:none">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
    </div>
  </div>
</div> -->

<div class="w3-content" style="max-width:1000px">
<?php 
function xml_child_exists($xml, $childpath)
{
    $result = $xml->xpath($childpath); 
    return (bool) (count($result));
}

if(xml_child_exists($search_result->response, '//images'))
{
   $countwer = $search_result->response->images->image->url->count();


for($i=0;$i<$countwer;$i++)
{
    echo "<img class='mySlides' src='".$search_result->response->images->image->url[$i]."' style='width:100%;display:none'";
    //echo $search_result->response->images->image->url[i];
}
}
else
{
    echo "<img class='mySlides' src='na.jpg' style='width:100%;'";
}


 ?>


  <div class="w3-row-padding w3-section">
    <?php 
    

if(xml_child_exists($search_result->response, '//images'))
{
    $countwer = $search_result->response->images->image->url->count();

for($i=0;$i<$countwer;$i++)
{
    echo "<div class='w3-col s4'>";
    echo "<img class='demo w3-opacity w3-hover-opacity-off' src='".$search_result->response->images->image->url[$i]."' style='width:100%;cursor:pointer' onclick='currentDiv(".$i.")'>";
    echo "</div>";
    //echo $search_result->response->images->image->url[i];
}
}
else
{
    echo "<div class='w3-col s4'>";
    echo "<img class='demo w3-opacity w3-hover-opacity-off' src='na.jpg' style='width:70%;cursor:pointer' onclick='currentDiv('1')'>";
    echo "</div>";
}
    
    
    

 ?>
  </div>
</div>



<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col">
                                <div class="card shadow-lg bg-primary text-white" onclick="info()">
                                <div class="card-header"><h1 class="mb-1 text-primary">Kozee Insights</h1>
                                <br>
                                <p align="right" class="cp-text" style="color: #FF8C00">Powered by qBotica AI</p></div>
                                <div class="card-body">
                                
                                <br>        
                                <br>        
                                <br>        
                                <br>  
                            <!--    <button id="try">Reload</button> -->
                                <div id="reloadthis">
                                <h2 class="rating text-white"><b>Kozee Score: 
                                <?php 
                                    $calc_res = intval($grade/$count_dt);
                                    //echo $grade."Grade";
                                    //echo $count_dt."Count";
                                    echo $calc_res;
                                    if($calc_res > 90)
                                    {
                                        echo "<p>&#128512;</p>";
                                    }
                                    else if($calc_res <= 90 && $calc_res > 80)
                                    {
                                        echo "<p>&#128515</p>";
                                    }
                                    else if($calc_res > 80 && $calc_res <= 70)
                                    {
                                        echo "<p>&#128543</p>";
                                    }
                                    else
                                    {
                                        echo "<p>&#128552</p>";
                                    }
                                ?></b></h2>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                
                                <script>
                                function info()
                                {
                                    
                                    //window.location.href = "kozeeinsights.php";// + <?php echo $extract[0];?>;
                                     var currentURL = window.location.href;
                                     var tempurl = currentURL.split("?");
                                     console.log(tempurl);
                                     window.location.href = "kozeeinsights.php?" + tempurl[1];
                                    //console.log(currentURL);
                                    //var 
                                }
                                </script>
                         <!--   </div> -->
                            <script>       google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Score', 80],
          
        ]);

        var options = {
          width: 400, height: 250,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
          chart.draw(data, options);
        }, 13000);
        setInterval(function() {
          data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
          data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
          chart.draw(data, options);
        }, 26000);
      }</script>
      
                    
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                        <!--
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Home Type</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"></h4>
                                        <!--
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                 <!--   <div id="sparkline-revenue"></div>
                                </div>
                            </div> -->
                            <div id="yearBuilt" class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                        <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content="This rating is based on how old the house is.">Year Built</a></h2></div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$search_result->response->editedFacts->yearBuilt?></h4>
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                            <?php
                                            function clean($string) {
                                               //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

                                               return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                                            }
                                            $grade_yb = 0;
                                            $ans = (string)$search_result->response->editedFacts->yearBuilt;
                                            $ans = clean($ans);
                                            $ans = (int)$ans;
                                            //echo "hello" . $ans . "hi";
                                            //$len = explode(" ",$ans);
                                            //for($i=0;$i<count($len);$i++)
                                            //{
                                                    if($ans >= 2010)
                                                    {
                                                        $grade_yb = $grade_yb + 95;
                                                        //$count_fl = $count_fl + 1;
                                                    }
                                                    if($ans < 2010 && $ans >= 1990)
                                                    {
                                                        $grade_yb = $grade_yb + 90;
                                                        //$count_fl = $count_fl + 1;   
                                                    }
                                                    if($ans < 1990 && $ans >= 1980)
                                                    {
                                                        $grade_yb = $grade_yb + 85;
                                                        //$count_fl = $count_fl + 1;
                                                    }
                                                    if($ans < 1980 && $ans >= 1960)
                                                    {
                                                        $grade_yb = $grade_yb + 80;
                                                        //$count_fl = $count_fl + 1;
                                                    }
                                                    if($ans >= 1940 && $ans < 1960)
                                                    {
                                                        $grade_yb = $grade_yb + 70;
                                                        //$count_fl = $count_fl + 1;
                                                    }
                                                        
                                            
                                            ?>
                                            <span id="myBtn"><?php 
                                            
                                            if($grade_yb > 0)
                                            {
                                                $total_yb = $grade_yb;
                                                if($total_yb == 95)
                                                {
                                                 echo "Grade A+";   
                                                }
                                                else if($total_yb == 90)
                                                {
                                                 echo "Grade A";   
                                                }
                                                else if($total_yb == 85)
                                                {
                                                 echo "Grade B";
                                                }
                                                else if($total_yb == 80)
                                                {
                                                 echo "Grade B-";   
                                                }
                                                else if($total_yb == 70)
                                                {
                                                    echo "Grade C";
                                                }

                                                $grade = $grade + $total_yb;
                                                $count_dt = $count_dt + 1;
                                                //echo $count_dt;
                                            }
                                            
                                            else
                                            {
                                                echo "N/A";
                                            }
                                            
                                            ?>
                                           
                                             
                                             
                                            </span>
                                            
                                            

                                        </div>
                                    </div>
                                <!--    <div class="card-footer">
                                     <img src="info.png" alt="info" width="30" height="30" align="right">
                                     <div class="overlay">
                                        <div class="text">
                                        <?php 
                                        /*if($ans >= 2010)
                                                    {
                                                        echo "The house is built recently. Probably the house has an excellent construction quality.";
                                                    }
                                                    if($ans < 2010 && $ans >= 1990)
                                                    {
                                                        echo "The house is built in the early 2000’s. Probably the house has a good construction quality.";   
                                                    }
                                                    if($ans < 1990 && $ans >= 1980)
                                                    {
                                                        echo "The house is built in the late 1900’s. Probably the house has an average construction quality.";
                                                    }
                                                    if($ans < 1980 && $ans >= 1960)
                                                    {
                                                        echo "The house is built in the 19th century. Probably the house has an average construction quality.";
                                                    }
                                                    if($ans >= 1940 && $ans < 1960)
                                                    {
                                                        echo "The house is built in the early 1900’s. Probably the house has a bad construction quality.";
                                                    }*/
                                        ?>
                                        </div>
                                    </div>
                                    </div> -->
                                  <!--  <div id="sparkline-revenue2"></div>-->
                                </div>
                            </div>
                            
                            
                                
                            <!--
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Home Size</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php //echo number_format((float)$search_result->response->editedFacts->finishedSqFt)?> sqft</h4><!--
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <!--<div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Bathrooms</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php //echo (string)$search_result->response->editedFacts->bathrooms ?></h4>
                                        <!--
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                <!--    <div id="sparkline-revenue4"></div> 
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Bedrooms</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php //echo (string)$search_result->response->editedFacts->bedrooms ?></h4>
                                        <!--
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                <!--    <div id="sparkline-revenue4"></div> 
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Zestimate Amount</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted">$ <?php //echo number_format((float)$onetwo->response->results->result->zestimate->amount) ?></h4>
                                        <!--
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                <!--    <div id="sparkline-revenue4"></div> 
                                </div>
                            </div>-->
                            
                            <!--Redfin data ---->
                            
                                                     
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                        <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content="Physical Condition of the house explains about how strong the house is.">Physical Condition</a></h2></div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php
                                        $print_this = $_SESSION["print_pc"];
echo $_SESSION["print_pc"];/*echo (string)$varPhyiscalCondition;*/ ?></h4>
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span id="myBtn1"><?php 
                                            if($print_this == "Average")
                                            {
                                             $grade = $grade + 75;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade C";
                                            }
                                            else if($print_this == "Bad")
                                            {
                                             $grade = $grade + 65;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade D";
                                            }
                                            else if($print_this == "Good")
                                            {
                                             $grade = $grade + 85;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade B";
                                            }
                                            else if($print_this == "Excellent")
                                            {
                                             $grade = $grade + 90;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade A";
                                            }
                                            else
                                            {
                                                    echo "N/A";
                                            }
                                            
                                            ?></span>
                                        </div>
                                    </div>
                                <!--    <div class="card-footer">
                                     <img src="info.png" alt="info" width="30" height="30" align="right">
                                     <div class="overlay">
                                        <div class="text"></div>
                                    </div>
                                    </div> -->
                                <!--    <div id="sparkline-revenue4"></div> -->
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content="Floor covering is a term to generically describe any finish material applied over a floor structure to provide a walking surface.">Floor Material</a></h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$search_result->response->editedFacts->floorCovering?></h4>
                                         
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                            <?php
                                            /*function clean($string) 
                                            {
                                               //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

                                               return preg_replace('/[^A-Za-z0-9 ]/', '', $string); // Removes special chars.
                                            }*/
                                            $grade_fl = 0;
                                            $count_fl = 0;
                                            $ans = (string)$search_result->response->editedFacts->floorCovering;
                                            //$ans = clean($ans);
                                            $display_floormat = "";
                                            //echo "hello" . $ans . "hi";
                                            $len = explode(",",$ans);
                                            for($i=0;$i<count($len);$i++)
                                            {
                                                    $len[$i] = trim($len[$i]);
                                                    if($len[$i] == "carpet" || $len[$i] == "Carpet")
                                                    {
                                                        $grade_fl = $grade_fl + 85;
                                                        $count_fl = $count_fl + 1;
                                                        $display_floormat = $display_floormat."It Varies from $2 to $26+ per square foot. Though it needs some guidance for installation, you can purchase carpets in form of tiles for easy installation.";
                                                    }
                                                    if($len[$i] == "Laminate" || $len[$i] == "laminate")
                                                    {
                                                        $grade_fl = $grade_fl + 90;
                                                        $count_fl = $count_fl + 1;   
                                                        $display_floormat = $display_floormat."It’s A low-cost alternative to traditional flooring which costs around $1-$6 per square foot.Laminate is very durable and some companies uphold 30-year warranties. Although you can have laminate professionally installed, you can install easily by yourself.";
                                                    }
                                                    if($len[$i] == "Vinyl" || $len[$i] == "vinyl")
                                                    {
                                                        $grade_fl = $grade_fl + 90;
                                                        $count_fl = $count_fl + 1;
                                                        $display_floormat = $display_floormat."It’s considered to be the most affordable and easiest to install. Vinyl sheets range from 75 cents to $4 a square foot and vinyl tiles typically cost $1 to $8 per square foot";
                                                    }
                                                    if($len[$i] == "Tile" || $len[$i] == "tile")
                                                    {
                                                        $grade_fl = $grade_fl + 75;
                                                        $count_fl = $count_fl + 1;
                                                        $display_floormat = $display_floormat."Tile comes in a variety of types including marble, porcelain and ceramic, and if installed the right way, looks beautiful and should last forever. Popular in warmer parts of the country like Florida, Arizona and California.";
                                                    }
                                                    if($len[$i] == "Bamboo" || $len[$i] == "Bamboo")
                                                    {
                                                        $grade_fl = $grade_fl + 80;
                                                        $count_fl = $count_fl + 1;
                                                        $display_floormat = $display_floormat."It can be installed by oneself with some guidance. The cost of the material is $4-$12 per square foot. They are considered to be more durable and more environmentally friendly than traditional hardwoods.";
                                                    }
                                                    if($len[$i] == "Cork" || $len[$i] == "Cork")
                                                    {
                                                        $grade_fl = $grade_fl + 80;
                                                        $count_fl = $count_fl + 1;
                                                        $display_floormat = $display_floormat."It can be installed by oneself with some guidance. The cost of the material is $4-$12 per square foot. They are considered to be more durable and more environmentally friendly than traditional hardwoods.";
                                                    }
                                                    if($len[$i] == "Hardwood" || $len[$i] == "Hardwood")
                                                    {
                                                        $grade_fl = $grade_fl + 80;
                                                        $count_fl = $count_fl + 1;
                                                        $display_floormat = $display_floormat."Hardwood is difficult to install(DIY). It is costly($3-$8 per square foot) and should be resealed every five or six years and be treated with care.";
                                                    } 
                                                    if($len[$i] == "slate" || $len[$i] == "Slate")
                                                    {
                                                        $grade_fl = $grade_fl + 75;
                                                        $count_fl = $count_fl + 1;
                                                        $display_floormat = $display_floormat."Slate flooring is one of the most desirable types of stone flooring available today. As a building material, slate has many good qualities, not the least of which is its incredible durability. In flooring, it is most effective in places that will receive a lot of traffic or will be subject to a significant amount of moisture.";
                                                    }
                                            }
                                            ?>
                                            <span id="myBtn2" class="ml-1">
                                            
                                            
                                            <?php 
                                            if($grade_fl > 0)
                                            {
                                              $total_fl = $grade_fl/$count_fl;
                                            if($total_fl >= 95)
                                            {
                                             echo "Grade A+";   
                                            }
                                            else if($total_fl >= 90 && $total_fl < 95)
                                            {
                                             echo "Grade A";   
                                            }
                                            else if($total_fl >= 85 && $total_fl < 90)
                                            {
                                             echo "Grade B";
                                            }
                                            else if($total_fl >= 80 && $total_fl < 85)
                                            {
                                             echo "Grade B-";   
                                            }
                                            else if($total_fl >= 70 && $total_fl < 80)
                                            {
                                                echo "Grade C";
                                            }

                                            $grade = $grade + $total_fl;
                                            $count_dt = $count_dt + 1;
                                            
                                            }
                                            else
                                            {
                                                echo "N/A";
                                                $display_floormat = "Sorry. No information is available for this data point";
                                            }
                                            
                                            
                                            ?>
                                             
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content=" The outer layer of a roof shows great variation dependent upon availability of material, and the nature of the supporting structure. The weatherproofing material is the topmost or outermost layer exposed to the weather.">Roof Material</a></h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$search_result->response->editedFacts->roof ?></h4>
                                         
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                            
                                            <?php
                                            /*function clean($string) 
                                            {
                                               //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

                                               return preg_replace('/[^A-Za-z0-9 ]/', '', $string); // Removes special chars.
                                            }*/
                                            $grade_roof = 0;
                                            $count_roof = 0;
                                            $ans = (string)$search_result->response->editedFacts->roof;
                                            //$ans = clean($ans);
                                            $ans = trim($ans);
                                            $display_roof = "";
                                            //echo "hello" . $ans . "hi";
                                            $len = explode(",",$ans);
                                            for($i=0;$i<count($len);$i++)
                                            {
                                                    $len[$i] = trim($len[$i]);
                                                    if($len[$i] == "Other" || $len[$i] == "other")
                                                    {
                                                        $display_roof = $display_roof."";
                                                        $grade_roof = $grade_roof + 80;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    if($len[$i] == "Asphalt" || $len[$i] == "asphalt")
                                                    {
                                                        $display_roof = $display_roof."Asphalt are easy to install and the least-expensive roofing option. Asphalt shingles absorb a lot of heat, and that heat doesn't stop at the roofline; it streams into the structure and increases the indoor temperature by 20 to 25 degree.";
                                                        $grade_roof = $grade_roof + 80;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    if($len[$i] == "Wood Shingles" || $len[$i] == "wood" || $len[$i] == "shingles" || $len[$i] == "Shingles")
                                                    {
                                                        $display_roof = $display_roof."Wood shingles are an eco-friendly alternative. Though they are twice as pricey as asphalt, a wood roof also has a life expectancy of 25 years. Wood shingles may help you optimize the performance of your house's heating and cooling system.";
                                                        $grade_roof = $grade_roof + 80;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    if($len[$i] == "Tile" || $len[$i] == "tile" || $len[$i] == "Clay" || $len[$i] == "cement" || $len[$i] == "clay" || $len[$i] == "Cement")
                                                    {
                                                        $display_roof = $display_roof."Tile are extremely durable, fire-resistant roofing materials and are capable of insulating and isolating any unwanted heat or cold from being transferred to your home’s attic space. They are expensive but they last 50 to 100 years. Roof tiles are designed mainly to keep out rain, and are traditionally made from locally available materials such as terracotta or slate. Modern materials such as concrete and plastic are also used and some clay tiles have a waterproof glaze. Roof tiles are 'hung' from the framework of a roof by fixing them with nails. The tiles are usually hung in parallel rows, with each row overlapping the row below it to exclude rainwater and to cover the nails that hold the row below. There are also roof tiles for special positions, particularly where the planes of the several pitches meet. They include ridge, hip and valley tiles. These can either be bedded and pointed in cement mortar or mechanically fixed. Similarly to roof tiling, tiling has been used to provide a protective weather envelope to the sides of timber frame buildings. These are hung on laths nailed to wall timbers, with tiles specially molded to cover corners and jambs. Often these tiles are shaped at the exposed end to give a decorative effect. Another form of this is the so-called mathematical tile, which was hung on laths, nailed and then grouted. This form of tiling gives an imitation of brickwork and was developed to give the appearance of brick, but avoided the brick taxes of the 18th century.";
                                                        $grade_roof = $grade_roof + 85;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    if($len[$i] == "Slate" || $len[$i] == "slate")
                                                    {
                                                        $display_roof = $display_roof."Slate is a heavy, natural stone that is among the most durable of all roofing materials, lasting 100 years or more. This also makes it the most expensive and is impervious to weather, sun, heat, and cold.  ";
                                                        $grade_roof = $grade_roof + 80;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    if($len[$i] == "Aluminium" || $len[$i] == "aluminium")
                                                    {
                                                        $display_roof = $display_roof."Aluminium is the best";
                                                        $grade_roof = $grade_roof + 80;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    if($len[$i] == "steel" || $len[$i] == "Steel" || $len[$i] == "copper" || $len[$i] == "Copper")
                                                    {
                                                        $display_roof = $display_roof."Steel is the best";
                                                        $grade_roof = $grade_roof + 80;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    if($len[$i] == "Synthetic" || $len[$i] == "polymer" || $len[$i] == "composite" || $len[$i] == "synthetic" || $len[$i] == "Polymer" || $len[$i] == "Composite")
                                                    {
                                                        $display_roof = $display_roof."Lower production cost to environment than slate. They tend to be lightweight, durable, and comparable in price to asphalt. With minimal maintenance, they can last up to 50 years.";
                                                        $grade_roof = $grade_roof + 90;
                                                        $count_roof = $count_roof + 1;
                                                    }
                                                    
                                            }
                                            ?>
                                            <span id="myBtn3" class="ml-1">
                                            
                                            
                                            <?php 
                                            if($grade_roof > 0)
                                            {
                                              $total_roof = $grade_roof/$count_roof;
                                            if($total_roof >= 95)
                                            {
                                             echo "Grade A+";   
                                            }
                                            else if($total_roof >= 90 && $total_roof < 95)
                                            {
                                             echo "Grade A";   
                                            }
                                            else if($total_roof >= 85 && $total_roof < 90)
                                            {
                                             echo "Grade B";
                                            }
                                            else if($total_roof >= 80 && $total_roof < 85)
                                            {
                                             echo "Grade B-";   
                                            }
                                            else if($total_roof >= 70 && $total_roof < 80)
                                            {
                                                echo "Grade C";
                                            }

                                            $grade = $grade + $total_roof;
                                            $count_dt = $count_dt + 1;
                                            
                                            }
                                            else
                                            {
                                                echo "N/A";
                                                $display_roof = "Sorry. No information is available for this data point";
                                            }
                                            
                                            
                                            ?>
                                             
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                           
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Exterior Material</h2>
                                        </div>
                                        <h4 class="text-muted"><?php /*echo (string)$search_result->response->editedFacts->exteriorMaterial */?></h4>
                                         
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">Grade A</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content="Parking facilities can be both indoor and outdoor, public or private. It can be a parking garage, or a parking space that belongs to the property of a person’s house. Ratings are given based on privacy of the car parking. If it is on-street, the car is exposed outside. but if it is a garage, then the car is inside. Also, this rating is given based on the most popularly used type.">Parking Type</a></h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$search_result->response->editedFacts->parkingType?></h4>
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                            
                                            
                                            <?php
                                            /*function clean($string) 
                                            {
                                               //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

                                               return preg_replace('/[^A-Za-z0-9 ]/', '', $string); // Removes special chars.
                                            }*/
                                            $grade_park = 0;
                                            $count_park = 0;
                                            $ans = (string)$search_result->response->editedFacts->parkingType;
                                            //$ans = str_replace('', ',', $ans);
                                            $ans = trim($ans);
                                            $display_parkingtype = "";
                                            //echo "hello" . $ans . "hi";
                                            $len = explode(",",$ans);
                                            for($i=0;$i<count($len);$i++)
                                            {
                                                    $len[$i] = trim($len[$i]);
                                                    if($len[$i] == "Off-street" || $len[$i] == "off-street")
                                                    {
                                                        //echo $len[$i];
                                                        $display_parkingtype = $display_parkingtype."Off-street parking means that you have a dedicated space on the property itself that you can park in. Usually it’s not a carport or garage space but an uncovered space in the driveway or something like that.";
                                                        $grade_park = $grade_park + 75;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "On-street" || $len[$i] == "on-street")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." On street parking means you have to find a parking space on the street. In some neighborhoods there’s ample street parking and people can find a space near their home. In other neighborhoods parking is very limited/always taken and people may have to walk several blocks to find a parking spot. ";
                                                        $grade_park = $grade_park + 70;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "Carport" || $len[$i] == "carport")
                                                    {
                                                        //echo $len[$i];
                                                        $display_parkingtype = $display_parkingtype." Carports are roofed type structure which can he easily installed in additional to our house. There are many benefits of having carport at an apartment. Some of them as to protect our cars, boats, and bikes from rain, snow and Sun. Also it can be used as shelter storage for big farm, commercial business and more. Carports are easy to install, durable, cost effective.";
                                                        $grade_park = $grade_park + 80;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "Garage - Detached")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." Detached garages are not attached to a residence. Garages may be close by, but can also be on the other side of the property. Detached garages are often larger or more creatively built due to the freedom of a stand-alone format. The pros of a detached garage is the flexibility in size and location, with freedom to maximize lot area. But detached garages aren't perfect, with downsides like Less-convenient access to the home, especially in bad weather";
                                                        $grade_park = $grade_park + 85;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "Garage - Attached")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." Attached garages, as the name implies, are garages that are part of a residence. In these garages, typically a door leads to the inside of the home, creating an extension in which to park a car and store numerous family and household items. The most common option for houses, attached garages are often fairly standard in shape and size.";
                                                        $grade_park = $grade_park + 90;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "Breezeways" || $len[$i] == "breezeways")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." Breezeways  are typically meant for pedestrian traffic, but cars are sometimes parked under them. Breezeways are built between two structures (sometimes a house and a garage), where the roof extends from one structure all the way to the other.  This kind of parking may keep a vehicle drier than parking outside, but breezeways do not have walls so the car may still get rained or snowed on. Breezeways are not common parking areas.";
                                                        $grade_park = $grade_park + 75;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "indoor parking" || $len[$i] == "Indoor parking")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." Indoor parking means that the area is completely enclosed, above ground parking that is not in a garage – a garage being a smaller structure meant for few cars, whereas indoor parking is meant for many vehicles. Sometimes condominiums are built up on a parking garages – although this format is rare.";
                                                        $grade_park = $grade_park + 80;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "Parkade parking" || $len[$i] == "parkade parking" || $len[$i] == "composite" || $len[$i] == "synthetic" || $len[$i] == "Polymer" || $len[$i] == "Composite")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." Parkade parking is not common, but there are some buildings that have a parkade for their tenants. Commercial buildings downtown will sometimes have a parkade.";
                                                        $grade_park = $grade_park + 85;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "underground parking" || $len[$i] == "Underground parking")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." Underground parking is almost always reserved for highrise apartment condominiums and commercial highrises. Because building an underground parking garage is expensive, they are not that common except where land value is very high – as it is in the downtown core.";
                                                        $grade_park = $grade_park + 90;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "outdoor stalls" || $len[$i] == "Outdoor stalls")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." Outdoor parking stalls are often reserved for condominium and apartment-dwellers. These parking stalls are not common near the center of the city because land is so valuable, but you can see parking lots for highrise and lowrise apartments in many other areas of the city.";
                                                        $grade_park = $grade_park + 70;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    if($len[$i] == "parking pads" || $len[$i] == "Parking Pads")
                                                    {
                                                        $display_parkingtype = $display_parkingtype." A minature version of a stall, a parking pad is meant for just one or two cars and have no covering at all. A pad consists of just a concrete or asphalt parking area.  This is the least expensive form of off street parking.";
                                                        $grade_park = $grade_park + 70;
                                                        $count_park = $count_park + 1;
                                                    }
                                                    
                                                    
                                                    
                                            }
                                            ?>
                                            <span id="myBtn4" class="ml-1">
                                            
                                            
                                            <?php 
                                            if($grade_park > 0)
                                            {
                                              $total_park = $grade_park/$count_park;
                                            if($total_park >= 95)
                                            {
                                             echo "Grade A+";   
                                            }
                                            else if($total_park >= 90 && $total_park < 95)
                                            {
                                             echo "Grade A";   
                                            }
                                            else if($total_park >= 85 && $total_park < 90)
                                            {
                                             echo "Grade B";
                                            }
                                            else if($total_park >= 80 && $total_park < 85)
                                            {
                                             echo "Grade B-";   
                                            }
                                            else if($total_park >= 70 && $total_park < 80)
                                            {
                                                echo "Grade C";
                                            }

                                            $grade = $grade + $total_park;
                                            $count_dt = $count_dt + 1;
                                            
                                            }
                                            else
                                            {
                                                echo "N/A";
                                                $display_parkingtype = "Sorry. No information is available for this data point";
                                            }
                                            
                                            
                                            ?>
                                             
                                            </span>
                                        </div>
                                    </div>
                                <!--    <div class="card-footer">
                                     <img src="info.png" alt="info" width="30" height="30" align="right">
                                     <div class="overlay">
                                        <div class="text"> Ratings are given based on privacy of the car parking. If it is on-street, the car is exposed outside. but if it is a garage, then the car is inside. Also, this rating is given based on the most popularly used type. </div>
                                    </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Heating System</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$search_result->response->editedFacts->heatingSystem?></h4>
                                         
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                            
                                            <?php
                                            /*function clean($string) 
                                            {
                                               //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

                                               return preg_replace('/[^A-Za-z0-9 ]/', '', $string); // Removes special chars.
                                            }*/
                                            $grade_heatsys = 0;
                                            $count_heatsys = 0;
                                            $ans = (string)$search_result->response->editedFacts->heatingSystem;
                                            //$ans = str_replace('', ',', $ans);
                                            $ans = trim($ans);
                                            $display_heatingsys = "";
                                            //echo "hello" . $ans . "hi";
                                            $len = explode(",",$ans);
                                            for($i=0;$i<count($len);$i++)
                                            {
                                                    $len[$i] = trim($len[$i]);
                                                    if($len[$i] == "Heat pump" || $len[$i] == "Heat Pump")
                                                    {
                                                        $display_heatingsys = $display_heatingsys."Heat Pumps cost a lot to install and a longer operating life. ";
                                                        $grade_heatsys = $grade_heatsys + 80;
                                                        $count_heatsys = $count_heatsys + 1;
                                                    }
                                                    if($len[$i] == "Forced air" || $len[$i] == "forced air")
                                                    {
                                                        $display_heatingsys = $display_heatingsys."Many forced air heating systems are remarkably energy efficient and can effectively keep you home comfortable all winter long. Additionally, they are generally made to be incorporated with central air conditioning systems for year round temperature control";
                                                        $grade_heatsys = $grade_heatsys + 70;
                                                        $count_heatsys = $count_heatsys + 1;
                                                    }
                                                    if($len[$i] == "Fan Coils" || $len[$i] == "Fan Coil")
                                                    {
                                                        $display_heatingsys = $display_heatingsys."Indoor air moves over the coil, which heats or cools the air before pushing it back out into the room. FCs can be less expensive and are available in ceiling, floor-mounted and freestanding configurations.";
                                                        $grade_heatsys = $grade_heatsys + 80;
                                                        $count_heatsys = $count_heatsys + 1;
                                                    }
                                                    if($len[$i] == "In-floor" || $len[$i] == "In-floor heating")
                                                    {
                                                        $display_heatingsys = $display_heatingsys."Installation of in-floor systems is expensive and It is difficult access to hidden piping if maintenance problems emerge.";
                                                        $grade_heatsys = $grade_heatsys + 80;
                                                        $count_heatsys = $count_heatsys + 1;
                                                    }
                                                    if($len[$i] == "Steam" || $len[$i] == "Steam Radiators")
                                                    {
                                                        $display_heatingsys = $display_heatingsys."One of the advantages of boiler systems is their long life. Regular maintenance for steam radiators depends on whether the radiator is a one-pipe system or a two-pipe system ";
                                                        $grade_heatsys = $grade_heatsys + 75;
                                                        $count_heatsys = $count_heatsys + 1;
                                                    }
                                                    if($len[$i] == "Boilers" || $len[$i] == "boilers")
                                                    {
                                                        $display_heatingsys = $display_heatingsys."They usually runs more quietly than forced air systems and are often more expensive to purchase and install than forced air systems";
                                                        $grade_heatsys = $grade_heatsys + 70;
                                                        $count_heatsys = $count_heatsys + 1;
                                                    }
                                                    if($len[$i] == "Furnaces" || $len[$i] == "furnaces")
                                                    {
                                                        $display_heatingsys = $display_heatingsys."Furnaces are Inexpensive to install, reliable and low-maintenance";
                                                        $grade_heatsys = $grade_heatsys + 70;
                                                        $count_heatsys = $count_heatsys + 1;
                                                    }
                                                    
                                                    
                                                    
                                                    
                                            }
                                            ?>
                                            <span id="myBtn5" class="ml-1">
                                            
                                            
                                            <?php 
                                            if($grade_heatsys > 0)
                                            {
                                              $total_heatsys = $grade_heatsys/$count_heatsys;
                                            if($total_heatsys >= 95)
                                            {
                                             echo "Grade A+";   
                                            }
                                            else if($total_heatsys >= 90 && $total_heatsys < 95)
                                            {
                                             echo "Grade A";   
                                            }
                                            else if($total_heatsys >= 85 && $total_heatsys < 90)
                                            {
                                             echo "Grade B";
                                            }
                                            else if($total_heatsys >= 80 && $total_heatsys < 85)
                                            {
                                             echo "Grade B-";   
                                            }
                                            else if($total_heatsys >= 70 && $total_heatsys < 80)
                                            {
                                                echo "Grade C";
                                            }

                                            $grade = $grade + $total_heatsys;
                                            $count_dt = $count_dt + 1;
                                            
                                            }
                                            else
                                            {
                                                echo "N/A";
                                                $display_heatingsys = "Sorry. No information is available for this data point";
                                            }
                                            
                                            
                                            ?>
                                             
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Heating Sources</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$search_result->response->editedFacts->heatingSources?></h4>
                                         
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                             <?php
                                            /*function clean($string) 
                                            {
                                               //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

                                               return preg_replace('/[^A-Za-z0-9 ]/', '', $string); // Removes special chars.
                                            }*/
                                            $grade_heatsource = 0;
                                            $count_heatsource = 0;
                                            $ans = (string)$search_result->response->editedFacts->heatingSources;
                                            //$ans = str_replace('', ',', $ans);
                                            $ans = trim($ans);
                                            $display_heatingsources = "";
                                            //echo "hello" . $ans . "hi";
                                            $len = explode(",",$ans);
                                            for($i=0;$i<count($len);$i++)
                                            {
                                                    $len[$i] = trim($len[$i]);
                                                    if($len[$i] == "Electric" || $len[$i] == "electric")
                                                    {
                                                        $display_heatingsources = $display_heatingsources."While most homes are heated by forced air or hot water, electric heating can make sense in certain circumstances. For instance, if you live in an area where electricity is cheaper than gas/oil (very rare) or extending central heating ductwork is impractical, electric heating may be a smart choice. Keep in mind that electricity is probably the most expensive and least environmentally friendly heating method. In most cases, furnaces and heat pumps are the most cost effective and earth friendly options. If you don’t have a gas connection to your home, it may be worth the investment. Speak with a professional HVAC technician to choose the best heating system for your home.";
                                                        $grade_heatsource = $grade_heatsource + 85;
                                                        $count_heatsource = $count_heatsource + 1;
                                                    }
                                                    if($len[$i] == "Gas" || $len[$i] == "gas")
                                                    {
                                                        $display_heatingsources = $display_heatingsources."The most common forms of central heating are electricity and gas because they are the easiest to maintain. A gas heater simply takes natural gases and burns them to make heat. This means that they get much hotter than other systems. Central gas heating systems use natural gas to heat homes. It's strongly prefered using natural gas as opposed to a normal central heating system because it is comfortable, convenient, reliable, and more efficient. Heat that comes from natural gas feels much warmer than heat emitted from a central system. The air from forced air systems is about 120 to 140 degrees. The air from a central system is only about 85-95 degrees. The air is able to heat a room, but is lower than the average human temperature of 98.6 degrees.";
                                                        $grade_heatsource = $grade_heatsource + 70;
                                                        $count_heatsource = $count_heatsource + 1;
                                                    }
                                                    if($len[$i] == "Other" || $len[$i] == "other")
                                                    {
                                                        $display_heatingsources = $display_heatingsources."";
                                                        $grade_heatsource = $grade_heatsource + 75;
                                                        $count_heatsource = $count_heatsource + 1;
                                                    }
                                                                                                 
                                                    
                                                    
                                                    
                                            }
                                            ?>
                                            <span id="myBtn6" class="ml-1">
                                            
                                            
                                            <?php 
                                            if($grade_heatsource > 0)
                                            {
                                              $total_heatsource = $grade_heatsource/$count_heatsource;
                                            if($total_heatsource >= 95)
                                            {
                                             echo "Grade A+";   
                                            }
                                            else if($total_heatsource >= 90 && $total_heatsource < 95)
                                            {
                                             echo "Grade A";   
                                            }
                                            else if($total_heatsource >= 85 && $total_heatsource < 90)
                                            {
                                             echo "Grade B";
                                            }
                                            else if($total_heatsource >= 80 && $total_heatsource < 85)
                                            {
                                             echo "Grade B-";   
                                            }
                                            else if($total_heatsource >= 70 && $total_heatsource < 80)
                                            {
                                                echo "Grade C";
                                            }

                                            $grade = $grade + $total_heatsource;
                                            $count_dt = $count_dt + 1;
                                            
                                            }
                                            else
                                            {
                                                echo "N/A";
                                                $display_heatingsources = "Sorry. No information is available for this data point";
                                            }
                                            
                                            
                                            ?>
                                             
                                            </span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Cooling System</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$search_result->response->editedFacts->coolingSystem?></h4>
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <!--    <span id="myBtn7" class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span>-->
                                        <span id="myBtn7" class="ml-1">
                                        <?php 
                                         $grade_heatsource = 0;
                                            $count_heatsource = 0;
                                            $ans = (string)$search_result->response->editedFacts->coolingSystem;
                                            //$ans = str_replace('', ',', $ans);
                                            $ans = trim($ans);
                                            $display_coolingsys = "";
                                            //echo "hello" . $ans . "hi";
                                            $len = explode(",",$ans);
                                            for($i=0;$i<count($len);$i++)
                                            {
                                                    $len[$i] = trim($len[$i]);
                                                    if($len[$i] == "Other" || $len[$i] == "other")
                                                    {
                                                        $display_coolingsys = $display_coolingsys."";
                                                        $grade_heatsource = $grade_heatsource + 40;
                                                        $count_heatsource = $count_heatsource + 1;
                                                    }
                                                    if($len[$i] == "Central" || $len[$i] == "central")
                                                    {
                                                        $display_coolingsys = $display_coolingsys."Central air conditioners circulate cool air through a system of supply and return ducts. Supply ducts and registers (i.e., openings in the walls, floors, or ceilings covered by grills) carry cooled air from the air conditioner to the home. This cooled air becomes warmer as it circulates through the home; then it flows back to the central air conditioner through return ducts and registers.";
                                                        $grade_heatsource = $grade_heatsource + 90;
                                                        $count_heatsource = $count_heatsource + 1;
                                                    }
                                                    if($len[$i] == "split" || $len[$i] == "Split")
                                                    {
                                                        $display_coolingsys = $display_coolingsys."";
                                                        $grade_heatsource = $grade_heatsource + 75;
                                                        $count_heatsource = $count_heatsource + 1;
                                                    }
                                                                                                 
                                                    
                                                    
                                                    
                                            }
                                            ?>
                                            
                                            
                                            
                                            <?php 
                                            if($grade_heatsource > 0)
                                            {
                                              $total_heatsource = $grade_heatsource/$count_heatsource;
                                            if($total_heatsource >= 95)
                                            {
                                             echo "Grade A+";   
                                            }
                                            else if($total_heatsource >= 90 && $total_heatsource < 95)
                                            {
                                             echo "Grade A";   
                                            }
                                            else if($total_heatsource >= 85 && $total_heatsource < 90)
                                            {
                                             echo "Grade B";
                                            }
                                            else if($total_heatsource >= 80 && $total_heatsource < 85)
                                            {
                                             echo "Grade B-";   
                                            }
                                            else if($total_heatsource >= 70 && $total_heatsource < 80)
                                            {
                                                echo "Grade C";
                                            }
                                            else
                                            {
                                                echo "Grade C";
                                            }

                                            $grade = $grade + $total_heatsource;
                                            $count_dt = $count_dt + 1;
                                            
                                            }
                                            else
                                            {
                                                echo "N/A";
                                                $display_heatingsources = "Sorry. No information is available for this data point";
                                            }
                                            
                                            
                                            
                                        ?>
                                        </span>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!-- Redfin data --->
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Number of permits</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><a target="_blank" href="https://apps-secure.phoenix.gov/PDD/Search/Permits">Check</a></h4>
                                         
                                    <!--    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span id="myBtn8" class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">Grade B</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Property Rating</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><a target="_blank" href="<?php echo "https://mcassessor.maricopa.gov/mcs.php?q=".$extract[0]?>">Check</a></h4>
                                         
                                    <!--    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span id="myBtn8" class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">Grade B</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        <!--    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Heating System</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php //echo (string)$varHeatingSystem; ?></h4>
                                         
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-warning bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">N/A</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                                                       
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">Construction Quality</h3>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php $a=array("Average","Good","Excellent");
$random_keys=array_rand($a);
$print_this = $a[$random_keys];
echo $print_this;/*echo (string)$varPhyiscalCondition;*/ ?></h4>
                                        
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span id="myBtn9">
                                            <?php 
                                            $display_constqual = "";
                                            if($print_this == "Average")
                                            {
                                             $display_constqual = $display_constqual."Construction of this house might be not latest. The quality rating is average";
                                             $grade = $grade + 75;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade C";
                                            }
                                            else if($print_this == "Bad")
                                            {
                                                $$display_constqual = $display_constqual."Construction of this house might be old. The quality rating is below Average";
                                             $grade = $grade + 65;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade D";
                                            }
                                            else if($print_this == "Good")
                                            {
                                                $display_constqual = $display_constqual."Construction of this house might be latest. The quality rating is good";
                                             $grade = $grade + 85;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade B";
                                            }
                                            else if($print_this == "Excellent")
                                            {
                                                $display_constqual = $display_constqual."Construction of this house might be latest. The quality rating is excellent";
                                             $grade = $grade + 90;
                                             $count_dt = $count_dt + 1;
                                             echo "Grade A";
                                            }
                                            else
                                            {
                                                    echo "N/A";
                                                    $display_constqual = "Sorry. No information is available for this data point";
                                            }
                                            
                                            ?></span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Exterior Wall</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo (string)$varExteriorWall; ?></h4>
                                         
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                           <!-- <span class="icon-circle-small icon-box-xs text-warning bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span> -->
                                             <?php
                                            /*function clean($string) 
                                            {
                                               //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

                                               return preg_replace('/[^A-Za-z0-9 ]/', '', $string); // Removes special chars.
                                            }*/
                                            $grade_extwall = 0;
                                            $count_extwall = 0;
                                            $ans = (string)$varExteriorWall;
                                            $display_extwall = "";
                                            //$ans = str_replace('', ',', $ans);
                                            $ans = trim($ans);
                                            //echo "hello" . $ans . "hi";
                                            $len = explode(",",$ans);
                                            for($i=0;$i<count($len);$i++)
                                            {
                                                    $len[$i] = trim($len[$i]);
                                                    $len[$i] = strtolower($len[$i]);
                                                    if($len[$i] == "vinyl" || $len[$i] == "Vinyl")
                                                    {
                                                        $display_extwall = $display_extwall."The cost ranges from $.65 to $2.00 per sq ft.Buying the wrong type of vinyl is another problem. Those living in extremely hot or cold climates must choose their paneling wisely. Otherwise, their vinyl panels might warp.";
                                                        $grade_extwall = $grade_extwall + 85;
                                                        $count_extwall = $count_extwall  + 1;
                                                    }
                                                    if($len[$i] == "Stucco" || $len[$i] == "stucco")
                                                    {
                                                        $display_extwall = $display_extwall."It is expensive to install with a high initial cost and It is long lasting if there is proper installation and maintenance.";
                                                        $grade_extwall = $grade_extwall + 90;
                                                        $count_extwall = $count_extwall + 1;
                                                    }
                                                    if($len[$i] == "Masonry" || $len[$i] == "masonry")
                                                    {
                                                        $display_extwall = "The cost of materials and installation are high. One of the cost contributors is the labor-intensive process of installation.and The exterior can last even more than 100 years with proper maintenance. ";
                                                        $grade_extwall = $grade_extwall + 90;
                                                        $count_extwall = $count_extwall + 1;
                                                    }
                                                    if($len[$i] == "wood siding" || $len[$i] == "wood" || $len[$i] == "siding")
                                                    {
                                                        $display_extwall = "The single most common material used in house framing in the United States is wood; however, steel and concrete are being used regionally. In Southern areas there will be concrete walls partly because of the hurricanes and termites. But most homes still use wood for a few reasons:    Wood's availability. When you get the finished product, it's much easier for trim work such as hanging pictures because you have a place to put the nails. Soundproofing and insulation make for better sound resonation.";                                                    
                                                        $grade_extwall = $grade_extwall + 85;
                                                        $count_extwall = $count_extwall + 1;
                                                    }
                                                    if($len[$i] == "engineered wood" || $len[$i] == "Frame Wood" || $len[$i] == "frame wood")
                                                    {
                                                        $display_extwall = "The single most common material used in house framing in the United States is wood; however, steel and concrete are being used regionally. In Southern areas there will be concrete walls partly because of the hurricanes and termites. But most homes still use wood for a few reasons:    Wood's availability. When you get the finished product, it's much easier for trim work such as hanging pictures because you have a place to put the nails. Soundproofing and insulation make for better sound resonation.";
                                                        $grade_extwall = $grade_extwall + 85;
                                                        $count_extwall = $count_extwall + 1;
                                                    }
                                                    if($len[$i] == "metal siding" || $len[$i] == "metal" || $len[$i] == "siding")
                                                    {
                                                        $display_extwall = $display_extwall."Metal can be formed to fit any form, curve, or shape which makes it a good choice for modern styles. Depending on the style and type of metal you choose, weathering can create stunning color changes over time";
                                                        $grade_extwall = $grade_extwall + 80;
                                                        $count_extwall = $count_extwall + 1;
                                                    }
                                                    if($len[$i] == "fiber cement" || $len[$i] == "fiber" || $len[$i] == "cement")
                                                    {
                                                        $display_extwall = $display_extwall. "Fiber cement is a very versatile exterior building material and the biggest con of fiber cement is its weight. If you’re looking to go the DIY route, be prepared to buy or rent special cutting tools";
                                                        $grade_extwall = $grade_extwall + 90;
                                                        $count_extwall = $count_extwall + 1;
                                                    }
                                                                                                 
                                                    
                                                    
                                                    
                                            }
                                            ?>
                                            <span id="myBtn10" class="ml-1">
                                            
                                            
                                            <?php 
                                            if($grade_extwall > 0)
                                            {
                                              $total_extwall = $grade_extwall/$count_extwall;
                                            if($total_extwall >= 95)
                                            {
                                             echo "Grade A+";   
                                            }
                                            else if($total_extwall >= 90 && $total_extwall < 95)
                                            {
                                             echo "Grade A";   
                                            }
                                            else if($total_extwall >= 85 && $total_extwall < 90)
                                            {
                                             echo "Grade B";
                                            }
                                            else if($total_extwall >= 80 && $total_extwall < 85)
                                            {
                                             echo "Grade B-";   
                                            }
                                            else if($total_extwall >= 70 && $total_extwall < 80)
                                            {
                                                echo "Grade C";
                                            }

                                            $grade = $grade + $total_extwall;
                                            $count_dt = $count_dt + 1;
                                            
                                            }
                                            else
                                            {
                                                echo "N/A";
                                                $display_extwall = "Sorry. No information is available for this data point";
                                            }
                                            
                                            
                                            ?>
                                             
                                            </span>
                                        </div> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <br>
                        <hr>
                        <br>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                           
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content="Walk Score helps you find a walkable place to live. Walk Score is a number between 0 and 100 that measures the walkability of any address.">Walk Score</a></h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo $_SESSION['walkscore'];// = $walkscore; echo (string)$walkscore; ?></h4>
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa fa-hand-o-right"></i></span><span>
                                            <?php 
                                            if($_SESSION['walkscore'] >= 90)
                                            {
                                                echo "Walker's Paradise";
                                            }
                                            else if($_SESSION['walkscore'] < 90 && $_SESSION['walkscore'] >=75)
                                            {
                                                echo "Very Walkable";
                                            }
                                            else {
                                                echo "Somewhat Walkable";
                                            }
                                            ?>
                                            </span>
                                        </div>
                                    </div>
                                 <!--   <div id="sparkline-revenue"></div>-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="metric-value d-inline-block">
                                            <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content="Transit Score is a patented measure of how well a location is served by public transit on a scale from 0 to 100.">Transit Score</a></h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo $_SESSION['transscore'];// = $transscore; echo (string)$transscore; ?></h4>
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>
                                            
                                            <?php
                                            if($_SESSION['transscore'] >= 90)
                                            {
                                                echo "Rider's Paradise";
                                            }
                                            else if($_SESSION['transscore'] < 90 && $_SESSION['transscore'] >= 75)
                                            {
                                                echo "Excellent Transit";
                                            }
                                            else
                                            {
                                                echo "Good Transit";
                                            }
                                            ?></span>
                                        </div>
                                    </div>
                                  <!--  <div id="sparkline-revenue2"></div>-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1"><a data-toggle="popover" title="Description" data-content="Our Bike Score service measures whether a location is good for biking on a scale from 0 - 100 based on four equally weighted components: Bike lanes, Hills, Destinations, road connectivity and Bike commuting mode share">Bike Score</a></h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo $_SESSION['bikescore'];// = $bikescore; echo (string)$bikescore; ?></h4>
                                        
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span>
                                            <?php
                                            if($_SESSION['bikescore'] >= 85)
                                            {
                                                echo "Biker's Paradise";
                                            }
                                            else if($_SESSION['bikescore'] >= 70 && $_SESSION['bikescore'] < 85)
                                            {
                                                echo "Very Bikeable";
                                            }
                                            ?></span>
                                        </div>
                                    </div>
                                    <!--<div id="sparkline-revenue3"></div>-->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">No of Coffee shops</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php echo $_SESSION['coffeeshp']; ?></h4>
                                        
                                       
                                    </div>
                                <!--    <div id="sparkline-revenue4"></div> -->
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">No of restaurants</h2>
                                        </div>
                                        <Br>
                                        <Br>
                                        <h4 class="text-muted"><?php echo $_SESSION['restno']; ?></h4>
                                        
                                        
                                    </div>
                                <!--    <div id="sparkline-revenue4"></div> -->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
              				                        <!-- product category  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12"> 
                                <div class="card shadow-lg"> <!--
                                    <h5 class="card-header"> Product Category</h5>
                                    <div class="card-body">
                                        <div class="ct-chart-category ct-golden-section" style="height: 315px;"></div>
                                        <div class="text-center m-t-40">
                                            <span class="legend-item mr-3">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Man</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Woman</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Accessories</span>
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end product category  -->
                                   <!-- product sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card shadow-lg"><!--
                                    <div class="card-header">
                                        <!-- <div class="float-right">
                                                <select class="custom-select">
                                                    <option selected>Today</option>
                                                    <option value="1">Weekly</option>
                                                    <option value="2">Monthly</option>
                                                    <option value="3">Yearly</option>
                                                </select>
                                            </div> 
                                        <h5 class="mb-0"> Product Sales</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ct-chart-product ct-golden-section"></div>
                                    </div>-->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end product sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== 
                                <div class="card">
                                    <h5 class="card-header">Top Performing Campaigns</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Campaign</th>
                                                        <th class="border-0">Visits</th>
                                                        <th class="border-0">Revenue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Campaign#1</td>
                                                        <td>98,789 </td>
                                                        <td>$4563</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#2</td>
                                                        <td>2,789 </td>
                                                        <td>$325</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#3</td>
                                                        <td>1,459 </td>
                                                        <td>$225</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#4</td>
                                                        <td>5,035 </td>
                                                        <td>$856</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#5</td>
                                                        <td>10,000 </td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campaign#5</td>
                                                        <td>10,000 </td>
                                                        <td>$1000</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <a href="#" class="btn btn-outline-light float-right">Details</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>-->
                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                                <!-- ============================================================== -->
                            </div>
                        </div>

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ========================
                            #Bedrooms, #Roof, #Heating Sources, Currency Format
                            ====================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== 
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Building Type</h2>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="text-muted"><?php //echo (string)$varBuildingType; ?></h4>
                                         <!--
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                            <h2 class="mb-1">Parking Spaces</h2>
                                        </div>
                                        <h4 class="text-muted"><?php //echo (string)$varNofParkingSpaces; ?></h4>
                                         <!--
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>-->
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->
  
                            
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- category revenue  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12"> <!--
                                <div class="card">
                                    <h5 class="card-header">Revenue by Category</h5>
                                    <div class="card-body">
                                        <div id="c3chart_category" style="height: 420px;"></div>
                                    </div>
                                </div>-->
                                <?php 
                                //echo $grade;
                                //echo $count_dt;
                                ?>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end category revenue  -->
                            <!-- ============================================================== -->

                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12"><!--
                                <div class="card"> 
                                    <h5 class="card-header"> Total Revenue</h5>
                                    <div class="card-body">
                                        <div id="morris_totalrevenue"></div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                                    </div> 
                                </div>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== 
                                <div class="card">
                                    <h5 class="card-header"> Sales By Social Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="social-sales list-group list-group-flush">
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>-->
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- sales traffice source  -->
                                <!-- ============================================================== 
                                <div class="card">
                                    <h5 class="card-header"> Sales By Traffic Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="traffic-sales list-group list-group-flush">
                                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Direct</span><span class="traffic-sales-amount">$4000.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Search<span class="traffic-sales-amount">$3123.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Social<span class="traffic-sales-amount ">$3099.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Referrals<span class="traffic-sales-amount ">$2220.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">4.02%</span></span>
                                                </span>
                                            </li>
                                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Email<span class="traffic-sales-amount">$1567.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">3.86%</span></span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>-->
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales traffice source  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- sales traffic country source  -->
                            <!-- ============================================================== 
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Sales By Country Traffic Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="country-sales list-group list-group-flush">
                                            <li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                                                <span class="">United States</span><span class="float-right text-dark">78%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-in" title="in" id="in"></i></span><span class="">India</span><span class="float-right text-dark">12%</span>
                                            </li>
                                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i></span><span class="">France</span><span class="float-right text-dark">16%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
                                </div>
                            </div>-->
                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
           
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");
var btn9 = document.getElementById("myBtn9");
var btn10 = document.getElementById("myBtn10");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  if(this.innerText == "Grade C")
  {
        document.getElementById("contentpop").children[1].innerText = "The house is built in the early 1900’s. Probably the house has a below average construction quality.";
  }
  if(this.innerText == "Grade B")
  {
        document.getElementById("contentpop").children[1].innerText = "The house is built in the 19th century. Probably the house has an average construction quality.";
  }
  if(this.innerText == "Grade B-")
  {
        document.getElementById("contentpop").children[1].innerText = "The house is built in late 19th century. Probably the house has a above average construction quality.";
  }
  if(this.innerText == "Grade A")
  {
        document.getElementById("contentpop").children[1].innerText = "The house is built in the early 2000’s. Probably the house has a good construction quality.";
  }
  if(this.innerText == "Grade A+")
  {
        document.getElementById("contentpop").children[1].innerText = "The house is built in the early 2000’s. Probably the house has an excellent construction quality.";
  }
  if(this.innerText == "N/A")
  {
        document.getElementById("contentpop").children[1].innerText = "Sorry. No information is available for this data point.";
  }
  
  
  
  modal.style.display = "block";
}

btn1.onclick = function() {
  if(this.innerText == "Grade D")
  {
        document.getElementById("contentpop").children[1].innerText = "Physical State of the house is below Average. ";
  }
  if(this.innerText == "Grade C")
  {
        document.getElementById("contentpop").children[1].innerText = "Physical State of the house is Average. ";
  }
  if(this.innerText == "Grade B")
  {
        document.getElementById("contentpop").children[1].innerText = "Physical State of the house is Good. ";
  }
  if(this.innerText == "Grade A")
  {
        document.getElementById("contentpop").children[1].innerText = "Physical State of the house is Excellent. ";
  }
  if(this.innerText == "N/A")
  {
        document.getElementById("contentpop").children[1].innerText = "Sorry. No information is available for this data point.";
  }
  
  
  
  modal.style.display = "block";
}

btn2.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_floormat?>";
  
  modal.style.display = "block";
}

btn3.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_roof?>";
  
  modal.style.display = "block";
}

btn4.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_parkingtype?>";
  
  modal.style.display = "block";
}

btn5.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_heatingsys?>";
  
  modal.style.display = "block";
}

btn6.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_heatingsources?>";
  
  modal.style.display = "block";
}

btn7.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_coolingsys?>";
  
  modal.style.display = "block";
}

btn9.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_constqual?>";
  
  modal.style.display = "block";
}

btn10.onclick = function() {
 
  
  document.getElementById("contentpop").children[1].innerText = "<?php echo $display_extwall?>";
  
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

           <script>
            //$('#reloadthis').load(document.URL);

            </script>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!--
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2019 Kozee. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->      
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    
    <script>
    

    <?php 
    $_SESSION['count_dt']  = $count_dt;
    $_SESSION['grade']  = $grade;
    echo $count_dt;
    echo $grade;
    ?>
    
    </script>
    
    <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>