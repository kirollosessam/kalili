<?php
include "DB.php";
include "functions/headerHome.php";
include "functions/building.php";
include "functions/category.php";

?>

<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/bery/bery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2022 14:23:43 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>الخليلي للتطوير العقاري</title>
  <meta name="AdsBot-Google" content="noindex follow" />
  <meta name="description" content="Bery-Real Estate Listing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo-white.png" />

  <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

  <!-- Font CSS -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=karla:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> -->


  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">

  <!-- Vendor CSS (Bootstrap & Icon Font) -->

  <!-- Plugins CSS (All Plugins Files) -->

  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />

  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />

  <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />


  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

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
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform: scale(0.1)}
            to {transform: scale(1)}
        }

        /* The Close Button */
        .close {
            /*position: absolute;*/
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 57px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
</head>


<body class="font-karla text-body text-tiny">
  <div class="overflow-hidden">
    <!-- Header start -->

    <header id="sticky-header" class="absolute left-0 top-[15px] lg:top-[30px] xl:top-[40px] w-full z-10">
      <div class="container">
        <div class="grid grid-cols-12">
          <div class="col-span-12">
            <div class="flex flex-wrap items-center justify-between">
              <a href="index.php" class="block">
                  <?php
                  include "functions/logo.php";
                  $selectLogoImage=new logo();
                  $selectLogoImage->selectLogo();
                  ?>

              </a>
              <nav class="flex flex-wrap items-center">
                <ul class="hidden lg:flex flex-wrap items-center font-lora text-[16px] xl:text-[18px] leading-none text-black">
                  <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                    <a href="index.php" class="sticky-dark transition-all text-white hover:text-secondary">Home</a>


                  </li>
                  <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                    <a href="#" class="sticky-dark transition-all text-white hover:text-secondary">Projects</a>

                    <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[220px] absolute top-[120%] left-1/2 -translate-x-1/2 transition-all
                                        group-hover:top-[100%] invisible group-hover:visible opacity-0 group-hover:opacity-100">

                      <?php
                      $selectCategory = new category();
                      $selectCategory->selectCategory();
                      ?>


                    </ul>

                  </li>

                  <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
<?php
$query = "SELECT * FROM categories ORDER BY cat_id LIMIT 2,3 ";
$select_category = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($select_category)) {
    $id = $row['cat_id'];
}
?>
                    <a href="Offers.php?catid=<?php echo $id?>" class="sticky-dark transition-all text-white hover:text-secondary">Offers</a>
                  </li>
                  <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                    <a href="agency.html" class="sticky-dark transition-all text-white hover:text-secondary">Search</a>



                  </li>
                  <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                    <a href="contact-us.php" class="sticky-dark transition-all text-white hover:text-secondary">Contact US</a>

                  </li>
                </ul>

                <ul class="flex flex-wrap items-center">

<!--                  <li>-->
<!--                    <a href="add-properties.html"-->
<!--                      class="sticky-btn before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-white before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto hover:text-primary before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-secondary after:rounded-md after:transition-all">Add-->
<!--                      Property</a>-->
<!--                  </li>-->
                  <li class="ml-2 sm:ml-5 lg:hidden">
                    <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                      <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                          d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- offcanvas-overlay start -->
    <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
    <!-- offcanvas-overlay end -->
    <!-- offcanvas-mobile-menu start -->
    <div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

      <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
        <!-- close button start -->
        <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0 z-[1]" aria-label="offcanvas">x</button>
        <!-- close button end -->

        <!-- offcanvas-menu start -->

        <nav class="offcanvas-menu mr-[20px]">
          <ul>
            <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
              <a href="index.php" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>

            </li>

            <li class="relative block border-b-primary border-b">
              <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Properties</a>
              <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                <li>
                  <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Properties</a>
                  <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">



                    <li>
                      <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="properties-v1.html"> properties v1</a>
                    </li>
                    <li>
                      <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="properties-v2.html"> properties v2</a>
                    </li>
                    <li>
                      <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="add-properties.html">add properties </a>
                    </li>

                  </ul>
                </li>
                <li>
                  <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Properties with sidebar</a>
                  <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                    <li>
                      <a href="properties-left-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                        left side bar</a>
                    </li>
                    <li>
                      <a href="properties-right-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                        right side bar</a>
                    </li>

                    <li>
                      <a href="properties-list-left-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                        list left side bar</a>
                    </li>

                    <li>
                      <a href="properties-list-right-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                        list
                        right side bar</a>
                    </li>
                  </ul>


                </li>
                <li>
                  <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Property Details</a>

                  <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                    <li>
                      <a href="add-properties.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">add
                        properties</a>
                    </li>

                    <li>
                      <a href="properties-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                        details</a>
                    </li>

                  </ul>

                </li>

              </ul>
            </li>
            <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Offers</a>

              <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                <li>
                  <a href="service.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">Promotion</a>
                </li>
              </ul>
            </li>

            <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Search</a>


            </li>


            <li class="relative block border-b-primary border-b"><a href="contact-us.php" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact US</a></li>
          </ul>
        </nav>
        <!-- offcanvas-menu end -->

        <div class="px-5 flex flex-wrap mt-3 sm:hidden">
          <a href="#"
            class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
            Property</a>
        </div>



      </div>
    </div>
    <!-- offcanvas-mobile-menu end -->
    <!-- Header end -->
