<?php
include("config/connect.php");
// Page detection
$page = explode("/",$_SERVER['PHP_SELF']);
$page = end($page);
$pagetitle = "";
$page = explode(".",$page);
$page = $page[0];
if(isset($_REQUEST['mode']) && $_REQUEST['mode'] == ''){
   $_REQUEST['mode'] = '';
}
switch($page)
{
	case "dashboard":
		$group['dashboard'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['dashboard'] = 'selected';
		$arrowopen['dashboard'] = 'open';
		$pagetitle = "Dashboard";
		break;

	case "settings":
		$group['tools'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['tools'] = 'selected';
		$arrowopen['tools'] = 'open';
		$pagetitle = "Settings";
		break;

	case "changepass":
		$group['tools'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['tools'] = 'selected';
		$arrowopen['tools'] = 'open';
		$pagetitle = "Change Password";
		break;

	case "seo":
		$group['seo'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['seo'] = 'selected';
		$arrowopen['seo'] = 'open';
		$pagetitle = "SEO";
		break;

	case "editseo":
		$group['seo'] = 'active';
		$activepage['seo'] = 'class="active"';
		$selected['seo'] = 'selected';
		$arrowopen['seo'] = 'open';
		$pagetitle = "Edit SEO";
		break;

	case "settings":
		$group['tools'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['tools'] = 'selected';
		$arrowopen['tools'] = 'open';
		$pagetitle = "Settings";
		break;

	case "cms":
		$group['cms'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['cms'] = 'selected';
		$arrowopen['cms'] = 'open';
		$pagetitle = "CMS Page";
		break;

	case "managecms":
		$group['cms'] = 'active';
		$activepage['cms'] = 'class="active"';
		$selected['cms'] = 'selected';
		$arrowopen['cms'] = 'open';
		$pagetitle = ucfirst($_REQUEST['mode'])." CMS Page";
		$camefrom = "CMS Page";
		$camefrompage = "cms.php";
		break;

	case "banner":
		$group['banner'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['banner'] = 'selected';
		$arrowopen['banner'] = 'open';
		$pagetitle = "Banner";
		break;

	case "managebanner":
		$group['banner'] = 'active';
		$activepage['banner'] = 'class="active"';
		$selected['banner'] = 'selected';
		$arrowopen['banner'] = 'open';
		$pagetitle = ucfirst($_REQUEST['mode'])." Banner";
		$camefrom = "Banner";
		$camefrompage = "banner.php";
		break;

	case "headerbanner":
      $group['headerbanner'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['headerbanner'] = 'selected';
      $arrowopen['headerbanner'] = 'open';
      $pagetitle = "Header Banner";
      break;

   case "manageheaderbanner":
      $group['headerbanner'] = 'active';
      $activepage['headerbanner'] = 'class="active"';
      $selected['headerbanner'] = 'selected';
      $arrowopen['headerbanner'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Header Banner";
      $camefrom = "Header Banner";
      $camefrompage = "headerbanner.php";
      break;

    case "about":
      $group['about'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['about'] = 'selected';
      $arrowopen['about'] = 'open';
      $pagetitle = "About";
      break;

   case "manageabout":
      $group['about'] = 'active';
      $activepage['about'] = 'class="active"';
      $selected['about'] = 'selected';
      $arrowopen['about'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." About";
      $camefrom = "About";
      $camefrompage = "about.php";
      break;

   case "hostel":
      $group['hostel'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['hostel'] = 'selected';
      $arrowopen['hostel'] = 'open';
      $pagetitle = "Hostel";
      break;

   case "managehostel":
      $group['hostel'] = 'active';
      $activepage['hostel'] = 'class="active"';
      $selected['hostel'] = 'selected';
      $arrowopen['hostel'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Hostel";
      $camefrom = "Hostel";
      $camefrompage = "hostel.php";
      break;

	case "testimonial":
		$group['testimonial'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['testimonial'] = 'selected';
		$arrowopen['testimonial'] = 'open';
		$pagetitle = "Testimonial";
		break;

	case "managetestimonial":
		$group['testimonial'] = 'active';
		$activepage['testimonial'] = 'class="active"';
		$selected['testimonial'] = 'selected';
		$arrowopen['testimonial'] = 'open';
		$pagetitle = ucfirst($_REQUEST['mode'])." Testimonial";
		$camefrom = "Testimonial";
		$camefrompage = "testimonial.php";
		break;

	case "gallery":
		$group['category'] = 'active';
		$activepage[$page] = 'class="active"';
		$selected['gallery'] = 'selected';
		$arrowopen['category'] = 'open';
		$pagetitle = "Gallery";
		break;

	case "managegallery":
		$group['category'] = 'active';
		$activepage['gallery'] = 'class="active"';
		$selected['gallery'] = 'selected';
		$arrowopen['category'] = 'open';
		$pagetitle = ucfirst($_REQUEST['mode'])." Gallery";
		$camefrom = "Gallery";
		$camefrompage = "gallery.php";
		break;

	case "history":
      $group['history'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['history'] = 'selected';
      $arrowopen['history'] = 'open';
      $pagetitle = "History";
      break;

    case "managehistory":
      $group['history'] = 'active';
      $activepage['history'] = 'class="active"';
      $selected['history'] = 'selected';
      $arrowopen['history'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." History";
      $camefrom = "History";
      $camefrompage = "history.php";
      break;
      
   case "facuilty":
      $group['facuilty'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['facuilty'] = 'selected';
      $arrowopen['facuilty'] = 'open';
      $pagetitle = "Facuilty";
      break;

   case "managefacuilty":
      $group['facuilty'] = 'active';
      $activepage['facuilty'] = 'class="active"';
      $selected['facuilty'] = 'selected';
      $arrowopen['facuilty'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Facuilty";
      $camefrom = "Facuilty";
      $camefrompage = "facuilty.php";
      break;

   case "result":
      $group['academic'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = "Result";
      break;

   case "manageresult":
      $group['academic'] = 'active';
      $activepage['result'] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Result";
      $camefrom = "Result";
      $camefrompage = "result.php";
      break;

   case "rutine":
      $group['academic'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = "Class Rutine";
      break;

   case "managerutine":
      $group['academic'] = 'active';
      $activepage['rutine'] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Class Rutine";
      $camefrom = "Class Rutine";
      $camefrompage = "rutine.php";
      break;

   case "exam":
      $group['academic'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = "Exam Rutine";
      break;

   case "manageexam":
      $group['academic'] = 'active';
      $activepage['exam'] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Exam Rutine";
      $camefrom = "Exam Rutine";
      $camefrompage = "exam.php";
      break;

   case "paper":
      $group['academic'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = "Question Paper";
      break;

   case "managepaper":
      $group['academic'] = 'active';
      $activepage['paper'] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Question Paper";
      $camefrom = "Question Paper";
      $camefrompage = "paper.php";
      break;

   case "calender":
      $group['academic'] = 'active';
      $activepage[$page] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = "Calender";
      break;

   case "managecalender":
      $group['academic'] = 'active';
      $activepage['calender'] = 'class="active"';
      $selected['academic'] = 'selected';
      $arrowopen['academic'] = 'open';
      $pagetitle = ucfirst($_REQUEST['mode'])." Calender";
      $camefrom = "Calender";
      $camefrompage = "calender.php";
      break;


	case "default":
		$activepage[$page] = '';
		break;
}







// Load cookie

if(isset($_COOKIE['AdminCookie'])){
	$getcookie = $_COOKIE['AdminCookie'];
	$getcookie = explode("@@",$getcookie);

	$_SESSION['admin_id'] = $getcookie[0];
	$_SESSION['admin_username'] = $getcookie[1];
}

// Session check
if($_SESSION['admin_id'] == "")	header("location:index.php");
?>
<!DOCTYPE html>
<!-- 
   Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
   
   Version: 1.1.2
   
   Author: KeenThemes
   
   Website: http://www.keenthemes.com/preview/?theme=metronic
   
   Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
   
   -->
<!--[if IE 8]> 
<html lang="en" class="ie8">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9">
      <![endif]-->
      <!--[if !IE]><!--> 
      <html lang="en">
         <!--<![endif]-->
         <!-- BEGIN HEAD -->
         <head>
            <meta charset="utf-8" />
            <title><?=ALIAS?> Admin :: <?=$pagetitle?></title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <meta content="" name="description" />
            <meta content="" name="author" />
            <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
            <link href="assets/css/metro.css" rel="stylesheet" />
            <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
            <link href="assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
            <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
            <link href="assets/css/style.css" rel="stylesheet" />
            <link href="assets/css/style_responsive.css" rel="stylesheet" />
            <link href="assets/css/style_brown.css" rel="stylesheet" id="style_color" />
            <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
            <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
            <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
            <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
            <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
            <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
            <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
            <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
            <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
            <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
            <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
            <link rel="shortcut icon" href="<?=BASE_URL.FAVICON?>" />
         </head>
         <!-- END HEAD -->
         <!-- BEGIN BODY -->
         <body class="fixed-top">
            <div class="header navbar navbar-inverse navbar-fixed-top">
               <!-- BEGIN TOP NAVIGATION BAR -->
               <div class="navbar-inner">
                  <div class="container-fluid">
                     <!-- BEGIN LOGO -->
                     <a class="brand" href="index.php">
                        <h3 style="color:#FFFFFF; margin:-10px; font-size:20px;"><?=PROJECT_NAME?></h3>
                     </a>
                     <!-- END LOGO -->
                     <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                     <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                     <img src="assets/img/menu-toggler.png" alt="" />
                     </a>          
                     <!-- END RESPONSIVE MENU TOGGLER -->				
                     <!-- BEGIN TOP NAVIGATION MENU -->					
                     <ul class="nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown user">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <img alt="" src="images/user_nopic.png" width="28"/>
                           <span class="username"><?=$_SESSION['admin_username']?></span>
                           <i class="icon-angle-down"></i>
                           </a>
                           <ul class="dropdown-menu">
                              <li><a href="dashboard.php"><i class="icon-user"></i> Dashboard</a></li>
                              <li><a href="changepass.php"><i class="icon-calendar"></i> Change Password</a></li>
                              <li><a href="settings.php"><i class="icon-calendar"></i> Settings</a></li>
                              <li class="divider"></li>
                              <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                     </ul>
                     <!-- END TOP NAVIGATION MENU -->	
                  </div>
               </div>
               <!-- END TOP NAVIGATION BAR -->
            </div>
