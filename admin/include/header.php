<?php ob_start();?>
<?php session_start();?>

<?php include "../include/DB.php"?>
<?php include "function/admin_products.php";?>
<?php include "function/adminCategory.php";?>
<?php include "function/adminComments.php";?>
<?php include "function/adminHeaderHome.php";?>
<?php include "function/subBuild.php";?>



<?php
//
//if(isset($_SESSION['user_role'])){
//    if($_SESSION['user_role'] !== 'admin'){
//        header("Location: index.php");
//    }
//}
//if(!isset($_SESSION['user_role'])){
//    header("Location: index.php");
//}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravel.spruko.com/volgh/ltr/index3 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 16:02:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="WMAeg – Admin">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="dashboard, admin, dashboard template, admin template, laravel, php laravel, laravel bootstrap, laravel admin template, bootstrap laravel, bootstrap in laravel, laravel dashboard template, laravel admin, laravel dashboard, laravel blade template, php admin">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.png" />

    <!-- TITLE -->
    <title>WMAeg – Admin</title>

    <!-- BOOTSTRAP CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/skin-modes.css" rel="stylesheet"/>
    <link href="assets/css/dark-style.css" rel="stylesheet"/>

    <!--C3 CHARTS CSS -->
    <link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!-- P-scroll bar css-->
    <link href="assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="assets/plugins/icons/icons.css" rel="stylesheet"/>

    <link href="assets/plugins/morris/morris.css" rel="stylesheet">
    <link href="assets/plugins/rating/rating.css" rel="stylesheet">

    <!-- SIDE-MENU CSS -->
    <link href="assets/css/sidemenu.css" rel="stylesheet"/>

    <!-- SIDEBAR CSS -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet"/>

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

    <!-- SWITCHER SKIN CSS -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">



</head>

<body class="app sidebar-mini">

