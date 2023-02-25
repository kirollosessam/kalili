<?php
include "include/header.php";
?>


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
                        <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index.html">home 01</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-2.html">home 02</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-3.html">home 03</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-4.html">home 04</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-5.html">home 05</a></li>
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-6.html">home 06</a></li>
                        </ul>
                    </li>
                    <li class="relative block border-b-primary border-b">
                        <a href="about.html" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">About</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about.html">About</a></li>

                            <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about-v2.html">About v2</a></li>
                        </ul>

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
                                        <a href="buildingdetails.php" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                            details</a>
                                    </li>

                                </ul>

                            </li>

                        </ul>
                    </li>
                    <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Pages</a>

                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li>
                                <a href="service.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">Service</a>
                            </li>
                            <li>
                                <a href="single-service.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">single
                                    service</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">contact
                                    us</a>
                            </li>
                            <li>
                                <a href="create-agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                    agency</a>
                            </li>
                            <li>
                                <a href="login.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">login</a>
                            </li>
                            <li>
                                <a href="register.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">register</a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">agency</a>

                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li>
                                <a href="agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency</a>
                            </li>
                            <li>
                                <a href="create-agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                    agency</a>
                            </li>

                            <li>
                                <a href="agent.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent</a>
                            </li>

                            <li>
                                <a href="Subdetails.php" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency
                                    details</a>
                            </li>

                            <li>
                                <a href="agent-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent
                                    details</a>
                            </li>

                        </ul>

                    </li>

                    <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Blog</a>

                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                            <li>
                                <a href="blog-grid.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    grid</a>
                            </li>
                            <li>
                                <a href="blog-grid-left-side-bar.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    grid left side bar</a>
                            </li>
                            <li>
                                <a href="blog-grid-right-side-bar.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    grid right side bar</a>
                            </li>
                            <li>
                                <a href="blog-details.html" class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                    details</a>
                            </li>

                        </ul>
                    </li>
                    <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a></li>
                </ul>
            </nav>
            <!-- offcanvas-menu end -->

            <div class="px-5 flex flex-wrap mt-3 sm:hidden">
                <a href="#" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                    Property</a>
            </div>
        </div>
    </div>
    <!-- offcanvas-mobile-menu end -->
    <!-- Header end -->
    <!-- Hero section start -->
    <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block">Our Properties</span></div>
                        <h1 class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            Properties Details
                        </h1>
                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                            Huge number of propreties availabe here for buy and sell
                            also you can find here co-living property as you like
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

<?php
if(isset($_GET['id'])){
    $buildID = $_GET['id'];
    $query = "SELECT * FROM product WHERE  product_id =$buildID ";
    $selectBuild = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($selectBuild)){
        $product_image= $row['product_image'];
        $product_title= $row['product_title'];
        $location= $row['location'];
        $location_link= $row['location_link'];
        $product_content= $row['product_content'];
        $product_image1= $row['product_image1'];
        $product_image_2= $row['product_image_2'];
        $product_image_3= $row['product_image_3'];
        $product_image_4= $row['product_image_4'];
        $product_image_5= $row['product_image_5'];
        $product_image_6= $row['product_image_6'];

        $PropertyAmenities = $row ['PropertyAmenities'];
        $PropertyAmenities1 = $row['PropertyAmenities1'];
        $PropertyAmenities2 = $row['PropertyAmenities2'];
        $PropertyAmenities3 = $row['PropertyAmenities3'];
        $PropertyAmenities4 = $row['PropertyAmenities4'];
        $PropertyAmenities5 = $row['PropertyAmenities5'];
        $PropertyAmenities6 = $row['PropertyAmenities6'];
        $PropertyAmenities7 = $row['PropertyAmenities7'];
        $PropertyAmenities8 = $row['PropertyAmenities8'];
        $PropertyAmenities9 = $row['PropertyAmenities9'];

        ?>
        <!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                    <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                        <img src="assets/images/biulding/<?php echo $product_image ?>" class="w-auto h-auto" loading="lazy" alt="Elite Garden Resedence." width="770" height="465">
                        <div class="mt-[45px] mb-[35px]">
                            <h2 class="font-lora leading-tight text-[22px] md:text-[28px] lg:text-[36px] text-primary mb-[5px] font-medium">
                                <?php echo $product_title ?></h2>
                            <a href="<?php echo $location_link ?>">
                                <h3 class="font-light text-[18px] text-secondary underline mb-[20px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg><?php echo $location ?>

                                </h3>
                            </a>

                        </div>

                        <div class="xl:flex xl:flex-nowrap xl:justify-between gap-y-[30px] gap-x-[15px] xl:gap-x-[0px] mb-[30px] items-center">
                            <div class="grid grid-cols-12 gap-y-[30px] gap-x-[15px] xl:gap-x-[20px] xl:mr-[30px]">
                                <div class="col-span-7">
                                    <a href="assets/images/inside-Build/<?php echo $product_image1 ?>" class="gallery-image">
                                        <img class="object-cover rounded-[8px] w-full h-full" src="assets/images/inside-Build/<?php echo $product_image1 ?>" alt="gallery image" loading="lazy" width="270" height="187">
                                    </a>
                                </div>
                                <div class="col-span-5">
                                    <a href="assets/images/inside-Build/<?php echo $product_image_2 ?>" class="gallery-image">
                                        <img class="object-cover rounded-[8px] w-full h-fu ll" src="assets/images/inside-Build/<?php echo $product_image_2 ?>" alt="gallery image" loading="lazy" width="170" height="187">
                                    </a>
                                </div>
                                <div class="col-span-5">
                                    <a href="assets/images/inside-Build/<?php echo $product_image_3 ?>" class="gallery-image">
                                        <img class="object-cover rounded-[8px] w-full h-full" src="assets/images/inside-Build/<?php echo $product_image_3 ?>" alt="gallery image" loading="lazy" width="170" height="187">
                                    </a>
                                </div>
                                <div class="col-span-7">
                                    <a href="assets/images/inside-Build/<?php echo $product_image_4 ?>" class="gallery-image">
                                        <img class="object-cover rounded-[8px] w-full h-full" src="assets/images/inside-Build/<?php echo $product_image_4 ?>" alt="gallery image" loading="lazy" width="270" height="187">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <h4 class="font-lora text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px] font-medium"> Description <span class="text-secondary">.</span>
                        </h4>
                        <h3>
                        <?php echo $product_content ?></h3>
                        <h4 class="font-lora text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px] font-medium">Property Amenities<span class="text-secondary">.</span>
                        </h4>

                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 px-[15px] mx-[-15px] mt-[40px]">

                            <?php
                            if ($PropertyAmenities){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities ?></span>
                                </li>
                            <?php }else ?>

                                <?php
                            if ($PropertyAmenities1){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities1 ?></span>
                                </li>
                            <?php }else ?>

                                <?php
                            if ($PropertyAmenities2){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities2 ?></span>
                                </li>
                            <?php }else ?>

                                <?php
                            if ($PropertyAmenities3){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities3 ?></span>
                                </li>
                            <?php }else ?>

                                <?php
                            if ($PropertyAmenities4){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities4 ?></span>
                                </li>
                            <?php }else ?>

                                <?php
                            if ($PropertyAmenities5){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities5 ?></span>
                                </li>
                            <?php }else ?>

                                <?php
                            if ($PropertyAmenities6){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities6 ?></span>
                                </li>
                            <?php }else ?>


                                <?php
                            if ($PropertyAmenities7){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities7 ?></span>
                                </li>
                            <?php }else ?>

                                <?php
                            if ($PropertyAmenities8){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities8 ?></span>
                                </li>
                            <?php }else ?>


                                <?php
                            if ($PropertyAmenities9){
                                ?>
                                <li class="flex flex-wrap items-center mb-[25px]">
                                    <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                    <span><?php echo $PropertyAmenities9 ?></span>
                                </li>
                            <?php }else ?>
                        </ul>
                        <h5 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize lg:mt-[25px] mb-[40px] font-medium">

                            Floor Plan<span class="text-secondary">.</span>
                        </h5>

<!--                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-[30px]">-->
<!--                            --><?php //if ($product_image_5){
//
//                                echo"<a href=\"assets/images/Build-3D/$product_image_5\" class=\"gallery-image\">
//                                    <img style=\"width: 500px\" class=\"object-cover rounded-[8px] w-full h-full\" src=\"assets/images/Build-3D/$product_image_6\" alt=\"gallery image\" loading=\"lazy\" width=\"270\" height=\"187\">
//                                            </a>;";
//                            }else{
//                                echo "Image Non";
//                            } ?>
<!--                            </div>-->

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[30px]">
                            <?php if ($product_image_5){?>
                            <div class="text-center">

                                <a href="assets/images/Build-3D/<?php echo $product_image_5 ;  ?>" class="gallery-image">
                                <img src="assets/images/Build-3D/<?php echo $product_image_5 ;  ?>"  >
                                </a>

                            </div>
                            <?php }?>
                            <?php if ($product_image_6){?>
                            <div class="text-center">

                                    <a href="assets/images/Build-3D/<?php echo $product_image_6;  ?>" class="gallery-image">
                                        <img src="assets/images/Build-3D/<?php echo $product_image_6 ;  ?>"  >
                                    </a>
                            </div>
                            <?php  } ?>

                        </div>


                    </div>

                    <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                        <aside class="mb-[-60px] asidebar">


                            <div class="mb-[60px]">
                                <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[40px] font-medium">New Build<span
                                            class="text-secondary">.</span></h3>
                                <div class="sidebar-carousel relative">
                                    <div class="swiper p-1">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            <div class="swiper-slide">

                                                <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_3px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center mb-[40px]">
                                                    <div class="relative">
                                                        <a href="buildingdetails.php" class="block">
                                                            <img src="assets/images/properties/propertie-slider-1.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="@@title">
                                                        </a>
                                                        <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                                                        </div>

                                                    </div>

                                                    <div class="pt-[15px] pb-[20px] px-[20px] text-left">
                                                        <h3><a href="buildingdetails.php" class="font-lora leading-tight text-[18px] text-primary">Orchid
                                                                Casel de
                                                                Paradise.</a></h3>
                                                        <h4 class="leading-none"><a href="buildingdetails.php" class="font-light text-[14px] leading-[1.75] text-primary underline">18B Central Street, San Francisco</a></h4>
                                                        <ul class="mt-[10px]">
                                                            <li class="flex flex-wrap items-center justify-between">
                                                                <span class="font-lora text-[14px] text-secondary leading-none">Price: $255300</span>

                                                                <span class="flex flex-wrap items-center">
                                                        <button class="mr-[15px] text-[#B1AEAE] hover:text-secondary">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M13.1667 11.6667C12.8572 11.6667 12.5605 11.7896 12.3417 12.0084C12.1229 12.2272 12 12.5239 12 12.8334C12 13.1428 12.1229 13.4395 12.3417 13.6583C12.5605 13.8771 12.8572 14 13.1667 14C13.4761 14 13.7728 13.8771 13.9916 13.6583C14.2104 13.4395 14.3333 13.1428 14.3333 12.8334C14.3333 12.5239 14.2104 12.2272 13.9916 12.0084C13.7728 11.7896 13.4761 11.6667 13.1667 11.6667ZM11 12.8334C11 12.2587 11.2283 11.7076 11.6346 11.3013C12.0409 10.895 12.592 10.6667 13.1667 10.6667C13.7413 10.6667 14.2924 10.895 14.6987 11.3013C15.1051 11.7076 15.3333 12.2587 15.3333 12.8334C15.3333 13.408 15.1051 13.9591 14.6987 14.3654C14.2924 14.7717 13.7413 15 13.1667 15C12.592 15 12.0409 14.7717 11.6346 14.3654C11.2283 13.9591 11 13.408 11 12.8334Z"
                                                                      fill="currentColor" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M9.26984 1.14667C9.36347 1.24042 9.41606 1.3675 9.41606 1.5C9.41606 1.6325 9.36347 1.75958 9.26984 1.85333L8.4565 2.66667H11.1665C11.8295 2.66667 12.4654 2.93006 12.9343 3.3989C13.4031 3.86774 13.6665 4.50363 13.6665 5.16667V11C13.6665 11.1326 13.6138 11.2598 13.5201 11.3536C13.4263 11.4473 13.2991 11.5 13.1665 11.5C13.0339 11.5 12.9067 11.4473 12.813 11.3536C12.7192 11.2598 12.6665 11.1326 12.6665 11V5.16667C12.6665 4.96968 12.6277 4.77463 12.5523 4.59264C12.4769 4.41065 12.3665 4.24529 12.2272 4.10601C12.0879 3.96672 11.9225 3.85623 11.7405 3.78085C11.5585 3.70547 11.3635 3.66667 11.1665 3.66667H8.45717L9.2705 4.48C9.36154 4.57434 9.41188 4.70067 9.41068 4.83177C9.40948 4.96287 9.35683 5.08825 9.26409 5.18091C9.17134 5.27357 9.04591 5.32609 8.91481 5.32717C8.78371 5.32825 8.65743 5.27779 8.56317 5.18667L6.8965 3.52C6.80287 3.42625 6.75028 3.29917 6.75028 3.16667C6.75028 3.03417 6.80287 2.90708 6.8965 2.81333L8.56317 1.14667C8.65692 1.05303 8.784 1.00044 8.9165 1.00044C9.049 1.00044 9.17609 1.05303 9.26984 1.14667ZM2.83317 4.33333C2.98638 4.33333 3.13809 4.30316 3.27963 4.24453C3.42118 4.1859 3.54979 4.09996 3.65813 3.99162C3.76646 3.88329 3.8524 3.75468 3.91103 3.61313C3.96966 3.47158 3.99984 3.31988 3.99984 3.16667C3.99984 3.01346 3.96966 2.86175 3.91103 2.7202C3.8524 2.57866 3.76646 2.45004 3.65813 2.34171C3.54979 2.23337 3.42118 2.14744 3.27963 2.08881C3.13809 2.03018 2.98638 2 2.83317 2C2.52375 2 2.22701 2.12292 2.00821 2.34171C1.78942 2.5605 1.6665 2.85725 1.6665 3.16667C1.6665 3.47609 1.78942 3.77283 2.00821 3.99162C2.22701 4.21042 2.52375 4.33333 2.83317 4.33333ZM4.99984 3.16667C4.99984 3.7413 4.77156 4.2924 4.36524 4.69873C3.95891 5.10506 3.40781 5.33333 2.83317 5.33333C2.25853 5.33333 1.70743 5.10506 1.30111 4.69873C0.894777 4.2924 0.666504 3.7413 0.666504 3.16667C0.666504 2.59203 0.894777 2.04093 1.30111 1.6346C1.70743 1.22827 2.25853 1 2.83317 1C3.40781 1 3.95891 1.22827 4.36524 1.6346C4.77156 2.04093 4.99984 2.59203 4.99984 3.16667Z"
                                                                      fill="currentColor" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M6.73016 14.8533C6.63653 14.7596 6.58394 14.6325 6.58394 14.5C6.58394 14.3675 6.63653 14.2404 6.73016 14.1467L7.5435 13.3333H4.8335C4.17046 13.3333 3.53457 13.0699 3.06573 12.6011C2.59689 12.1323 2.3335 11.4964 2.3335 10.8333V5C2.3335 4.86739 2.38617 4.74021 2.47994 4.64645C2.57371 4.55268 2.70089 4.5 2.8335 4.5C2.9661 4.5 3.09328 4.55268 3.18705 4.64645C3.28082 4.74021 3.3335 4.86739 3.3335 5V10.8333C3.3335 11.2312 3.49153 11.6127 3.77284 11.894C4.05414 12.1753 4.43567 12.3333 4.8335 12.3333H7.54283L6.7295 11.52C6.68176 11.4739 6.6437 11.4187 6.61752 11.3576C6.59135 11.2966 6.57759 11.231 6.57704 11.1646C6.5765 11.0982 6.58918 11.0324 6.61435 10.971C6.63952 10.9095 6.67667 10.8537 6.72364 10.8068C6.77061 10.7599 6.82645 10.7228 6.88791 10.6977C6.94937 10.6726 7.01521 10.6599 7.0816 10.6605C7.14799 10.6612 7.2136 10.675 7.27459 10.7012C7.33557 10.7274 7.39073 10.7656 7.43683 10.8133L9.1035 12.48C9.19713 12.5738 9.24972 12.7008 9.24972 12.8333C9.24972 12.9658 9.19713 13.0929 9.1035 13.1867L7.43683 14.8533C7.34308 14.947 7.216 14.9996 7.0835 14.9996C6.951 14.9996 6.82391 14.947 6.73016 14.8533Z"
                                                                      fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                        <button class="text-[#B1AEAE] hover:text-secondary">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(.clip0_656_640)">
                                                                    <path
                                                                            d="M7.9999 2.74799L7.2829 2.01099C5.5999 0.280988 2.5139 0.877988 1.39989 3.05299C0.876895 4.07599 0.758895 5.55299 1.71389 7.43799C2.63389 9.25299 4.5479 11.427 7.9999 13.795C11.4519 11.427 13.3649 9.25299 14.2859 7.43799C15.2409 5.55199 15.1239 4.07599 14.5999 3.05299C13.4859 0.877988 10.3999 0.279988 8.7169 2.00999L7.9999 2.74799ZM7.9999 15C-7.33311 4.86799 3.27889 -3.04001 7.82389 1.14299C7.88389 1.19799 7.94289 1.25499 7.9999 1.31399C8.05632 1.25504 8.11503 1.19833 8.17589 1.14399C12.7199 -3.04201 23.3329 4.86699 7.9999 15Z"
                                                                            fill="currentColor" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath class="clip0_656_640">
                                                                        <rect width="16" height="16" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </button>
                                                        </span>
                                                            </li>
                                                        </ul>


                                                    </div>
                                                </div>
                                                <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_3px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center">
                                                    <div class="relative">
                                                        <a href="buildingdetails.php" class="block">
                                                            <img src="assets/images/properties/propertie-slider-2.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="@@title">
                                                        </a>
                                                        <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                                                        </div>

                                                    </div>

                                                    <div class="pt-[15px] pb-[20px] px-[20px] text-left">
                                                        <h3><a href="buildingdetails.php" class="font-lora leading-tight text-[18px] text-primary">Sindrela Resort Villa.</a></h3>
                                                        <h4 class="leading-none"><a href="buildingdetails.php" class="font-light text-[14px] leading-[1.75] text-primary underline">18B Central Street, San Francisco</a></h4>
                                                        <ul class="mt-[10px]">
                                                            <li class="flex flex-wrap items-center justify-between">
                                                                <span class="font-lora text-[14px] text-secondary leading-none">Price:$185300</span>

                                                                <span class="flex flex-wrap items-center">
                                                                        <button class="mr-[15px] text-[#B1AEAE] hover:text-secondary">
                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                      d="M13.1667 11.6667C12.8572 11.6667 12.5605 11.7896 12.3417 12.0084C12.1229 12.2272 12 12.5239 12 12.8334C12 13.1428 12.1229 13.4395 12.3417 13.6583C12.5605 13.8771 12.8572 14 13.1667 14C13.4761 14 13.7728 13.8771 13.9916 13.6583C14.2104 13.4395 14.3333 13.1428 14.3333 12.8334C14.3333 12.5239 14.2104 12.2272 13.9916 12.0084C13.7728 11.7896 13.4761 11.6667 13.1667 11.6667ZM11 12.8334C11 12.2587 11.2283 11.7076 11.6346 11.3013C12.0409 10.895 12.592 10.6667 13.1667 10.6667C13.7413 10.6667 14.2924 10.895 14.6987 11.3013C15.1051 11.7076 15.3333 12.2587 15.3333 12.8334C15.3333 13.408 15.1051 13.9591 14.6987 14.3654C14.2924 14.7717 13.7413 15 13.1667 15C12.592 15 12.0409 14.7717 11.6346 14.3654C11.2283 13.9591 11 13.408 11 12.8334Z"
                                                                                      fill="currentColor" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                      d="M9.26984 1.14667C9.36347 1.24042 9.41606 1.3675 9.41606 1.5C9.41606 1.6325 9.36347 1.75958 9.26984 1.85333L8.4565 2.66667H11.1665C11.8295 2.66667 12.4654 2.93006 12.9343 3.3989C13.4031 3.86774 13.6665 4.50363 13.6665 5.16667V11C13.6665 11.1326 13.6138 11.2598 13.5201 11.3536C13.4263 11.4473 13.2991 11.5 13.1665 11.5C13.0339 11.5 12.9067 11.4473 12.813 11.3536C12.7192 11.2598 12.6665 11.1326 12.6665 11V5.16667C12.6665 4.96968 12.6277 4.77463 12.5523 4.59264C12.4769 4.41065 12.3665 4.24529 12.2272 4.10601C12.0879 3.96672 11.9225 3.85623 11.7405 3.78085C11.5585 3.70547 11.3635 3.66667 11.1665 3.66667H8.45717L9.2705 4.48C9.36154 4.57434 9.41188 4.70067 9.41068 4.83177C9.40948 4.96287 9.35683 5.08825 9.26409 5.18091C9.17134 5.27357 9.04591 5.32609 8.91481 5.32717C8.78371 5.32825 8.65743 5.27779 8.56317 5.18667L6.8965 3.52C6.80287 3.42625 6.75028 3.29917 6.75028 3.16667C6.75028 3.03417 6.80287 2.90708 6.8965 2.81333L8.56317 1.14667C8.65692 1.05303 8.784 1.00044 8.9165 1.00044C9.049 1.00044 9.17609 1.05303 9.26984 1.14667ZM2.83317 4.33333C2.98638 4.33333 3.13809 4.30316 3.27963 4.24453C3.42118 4.1859 3.54979 4.09996 3.65813 3.99162C3.76646 3.88329 3.8524 3.75468 3.91103 3.61313C3.96966 3.47158 3.99984 3.31988 3.99984 3.16667C3.99984 3.01346 3.96966 2.86175 3.91103 2.7202C3.8524 2.57866 3.76646 2.45004 3.65813 2.34171C3.54979 2.23337 3.42118 2.14744 3.27963 2.08881C3.13809 2.03018 2.98638 2 2.83317 2C2.52375 2 2.22701 2.12292 2.00821 2.34171C1.78942 2.5605 1.6665 2.85725 1.6665 3.16667C1.6665 3.47609 1.78942 3.77283 2.00821 3.99162C2.22701 4.21042 2.52375 4.33333 2.83317 4.33333ZM4.99984 3.16667C4.99984 3.7413 4.77156 4.2924 4.36524 4.69873C3.95891 5.10506 3.40781 5.33333 2.83317 5.33333C2.25853 5.33333 1.70743 5.10506 1.30111 4.69873C0.894777 4.2924 0.666504 3.7413 0.666504 3.16667C0.666504 2.59203 0.894777 2.04093 1.30111 1.6346C1.70743 1.22827 2.25853 1 2.83317 1C3.40781 1 3.95891 1.22827 4.36524 1.6346C4.77156 2.04093 4.99984 2.59203 4.99984 3.16667Z"
                                                                                      fill="currentColor" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                      d="M6.73016 14.8533C6.63653 14.7596 6.58394 14.6325 6.58394 14.5C6.58394 14.3675 6.63653 14.2404 6.73016 14.1467L7.5435 13.3333H4.8335C4.17046 13.3333 3.53457 13.0699 3.06573 12.6011C2.59689 12.1323 2.3335 11.4964 2.3335 10.8333V5C2.3335 4.86739 2.38617 4.74021 2.47994 4.64645C2.57371 4.55268 2.70089 4.5 2.8335 4.5C2.9661 4.5 3.09328 4.55268 3.18705 4.64645C3.28082 4.74021 3.3335 4.86739 3.3335 5V10.8333C3.3335 11.2312 3.49153 11.6127 3.77284 11.894C4.05414 12.1753 4.43567 12.3333 4.8335 12.3333H7.54283L6.7295 11.52C6.68176 11.4739 6.6437 11.4187 6.61752 11.3576C6.59135 11.2966 6.57759 11.231 6.57704 11.1646C6.5765 11.0982 6.58918 11.0324 6.61435 10.971C6.63952 10.9095 6.67667 10.8537 6.72364 10.8068C6.77061 10.7599 6.82645 10.7228 6.88791 10.6977C6.94937 10.6726 7.01521 10.6599 7.0816 10.6605C7.14799 10.6612 7.2136 10.675 7.27459 10.7012C7.33557 10.7274 7.39073 10.7656 7.43683 10.8133L9.1035 12.48C9.19713 12.5738 9.24972 12.7008 9.24972 12.8333C9.24972 12.9658 9.19713 13.0929 9.1035 13.1867L7.43683 14.8533C7.34308 14.947 7.216 14.9996 7.0835 14.9996C6.951 14.9996 6.82391 14.947 6.73016 14.8533Z"
                                                                                      fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                        <button class="text-[#B1AEAE] hover:text-secondary">
                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <g clip-path="url(.clip0_656_640)">
                                                                                    <path
                                                                                            d="M7.9999 2.74799L7.2829 2.01099C5.5999 0.280988 2.5139 0.877988 1.39989 3.05299C0.876895 4.07599 0.758895 5.55299 1.71389 7.43799C2.63389 9.25299 4.5479 11.427 7.9999 13.795C11.4519 11.427 13.3649 9.25299 14.2859 7.43799C15.2409 5.55199 15.1239 4.07599 14.5999 3.05299C13.4859 0.877988 10.3999 0.279988 8.7169 2.00999L7.9999 2.74799ZM7.9999 15C-7.33311 4.86799 3.27889 -3.04001 7.82389 1.14299C7.88389 1.19799 7.94289 1.25499 7.9999 1.31399C8.05632 1.25504 8.11503 1.19833 8.17589 1.14399C12.7199 -3.04201 23.3329 4.86699 7.9999 15Z"
                                                                                            fill="currentColor" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath class="clip0_656_640">
                                                                                        <rect width="16" height="16" fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                        </button>
                                                                    </span>
                                                            </li>
                                                        </ul>


                                                    </div>
                                                </div>
                                                <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_3px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center">
                                                    <div class="relative">
                                                        <a href="buildingdetails.php" class="block">
                                                            <img src="assets/images/properties/propertie-slider-2.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="@@title">
                                                        </a>
                                                        <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                                                        </div>

                                                    </div>

                                                    <div class="pt-[15px] pb-[20px] px-[20px] text-left">
                                                        <h3><a href="buildingdetails.php" class="font-lora leading-tight text-[18px] text-primary">Sindrela Resort Villa.</a></h3>
                                                        <h4 class="leading-none"><a href="buildingdetails.php" class="font-light text-[14px] leading-[1.75] text-primary underline">18B Central Street, San Francisco</a></h4>
                                                        <ul class="mt-[10px]">
                                                            <li class="flex flex-wrap items-center justify-between">
                                                                <span class="font-lora text-[14px] text-secondary leading-none">Price:$185300</span>

                                                                <span class="flex flex-wrap items-center">
                                                                        <button class="mr-[15px] text-[#B1AEAE] hover:text-secondary">
                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                      d="M13.1667 11.6667C12.8572 11.6667 12.5605 11.7896 12.3417 12.0084C12.1229 12.2272 12 12.5239 12 12.8334C12 13.1428 12.1229 13.4395 12.3417 13.6583C12.5605 13.8771 12.8572 14 13.1667 14C13.4761 14 13.7728 13.8771 13.9916 13.6583C14.2104 13.4395 14.3333 13.1428 14.3333 12.8334C14.3333 12.5239 14.2104 12.2272 13.9916 12.0084C13.7728 11.7896 13.4761 11.6667 13.1667 11.6667ZM11 12.8334C11 12.2587 11.2283 11.7076 11.6346 11.3013C12.0409 10.895 12.592 10.6667 13.1667 10.6667C13.7413 10.6667 14.2924 10.895 14.6987 11.3013C15.1051 11.7076 15.3333 12.2587 15.3333 12.8334C15.3333 13.408 15.1051 13.9591 14.6987 14.3654C14.2924 14.7717 13.7413 15 13.1667 15C12.592 15 12.0409 14.7717 11.6346 14.3654C11.2283 13.9591 11 13.408 11 12.8334Z"
                                                                                      fill="currentColor" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                      d="M9.26984 1.14667C9.36347 1.24042 9.41606 1.3675 9.41606 1.5C9.41606 1.6325 9.36347 1.75958 9.26984 1.85333L8.4565 2.66667H11.1665C11.8295 2.66667 12.4654 2.93006 12.9343 3.3989C13.4031 3.86774 13.6665 4.50363 13.6665 5.16667V11C13.6665 11.1326 13.6138 11.2598 13.5201 11.3536C13.4263 11.4473 13.2991 11.5 13.1665 11.5C13.0339 11.5 12.9067 11.4473 12.813 11.3536C12.7192 11.2598 12.6665 11.1326 12.6665 11V5.16667C12.6665 4.96968 12.6277 4.77463 12.5523 4.59264C12.4769 4.41065 12.3665 4.24529 12.2272 4.10601C12.0879 3.96672 11.9225 3.85623 11.7405 3.78085C11.5585 3.70547 11.3635 3.66667 11.1665 3.66667H8.45717L9.2705 4.48C9.36154 4.57434 9.41188 4.70067 9.41068 4.83177C9.40948 4.96287 9.35683 5.08825 9.26409 5.18091C9.17134 5.27357 9.04591 5.32609 8.91481 5.32717C8.78371 5.32825 8.65743 5.27779 8.56317 5.18667L6.8965 3.52C6.80287 3.42625 6.75028 3.29917 6.75028 3.16667C6.75028 3.03417 6.80287 2.90708 6.8965 2.81333L8.56317 1.14667C8.65692 1.05303 8.784 1.00044 8.9165 1.00044C9.049 1.00044 9.17609 1.05303 9.26984 1.14667ZM2.83317 4.33333C2.98638 4.33333 3.13809 4.30316 3.27963 4.24453C3.42118 4.1859 3.54979 4.09996 3.65813 3.99162C3.76646 3.88329 3.8524 3.75468 3.91103 3.61313C3.96966 3.47158 3.99984 3.31988 3.99984 3.16667C3.99984 3.01346 3.96966 2.86175 3.91103 2.7202C3.8524 2.57866 3.76646 2.45004 3.65813 2.34171C3.54979 2.23337 3.42118 2.14744 3.27963 2.08881C3.13809 2.03018 2.98638 2 2.83317 2C2.52375 2 2.22701 2.12292 2.00821 2.34171C1.78942 2.5605 1.6665 2.85725 1.6665 3.16667C1.6665 3.47609 1.78942 3.77283 2.00821 3.99162C2.22701 4.21042 2.52375 4.33333 2.83317 4.33333ZM4.99984 3.16667C4.99984 3.7413 4.77156 4.2924 4.36524 4.69873C3.95891 5.10506 3.40781 5.33333 2.83317 5.33333C2.25853 5.33333 1.70743 5.10506 1.30111 4.69873C0.894777 4.2924 0.666504 3.7413 0.666504 3.16667C0.666504 2.59203 0.894777 2.04093 1.30111 1.6346C1.70743 1.22827 2.25853 1 2.83317 1C3.40781 1 3.95891 1.22827 4.36524 1.6346C4.77156 2.04093 4.99984 2.59203 4.99984 3.16667Z"
                                                                                      fill="currentColor" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                      d="M6.73016 14.8533C6.63653 14.7596 6.58394 14.6325 6.58394 14.5C6.58394 14.3675 6.63653 14.2404 6.73016 14.1467L7.5435 13.3333H4.8335C4.17046 13.3333 3.53457 13.0699 3.06573 12.6011C2.59689 12.1323 2.3335 11.4964 2.3335 10.8333V5C2.3335 4.86739 2.38617 4.74021 2.47994 4.64645C2.57371 4.55268 2.70089 4.5 2.8335 4.5C2.9661 4.5 3.09328 4.55268 3.18705 4.64645C3.28082 4.74021 3.3335 4.86739 3.3335 5V10.8333C3.3335 11.2312 3.49153 11.6127 3.77284 11.894C4.05414 12.1753 4.43567 12.3333 4.8335 12.3333H7.54283L6.7295 11.52C6.68176 11.4739 6.6437 11.4187 6.61752 11.3576C6.59135 11.2966 6.57759 11.231 6.57704 11.1646C6.5765 11.0982 6.58918 11.0324 6.61435 10.971C6.63952 10.9095 6.67667 10.8537 6.72364 10.8068C6.77061 10.7599 6.82645 10.7228 6.88791 10.6977C6.94937 10.6726 7.01521 10.6599 7.0816 10.6605C7.14799 10.6612 7.2136 10.675 7.27459 10.7012C7.33557 10.7274 7.39073 10.7656 7.43683 10.8133L9.1035 12.48C9.19713 12.5738 9.24972 12.7008 9.24972 12.8333C9.24972 12.9658 9.19713 13.0929 9.1035 13.1867L7.43683 14.8533C7.34308 14.947 7.216 14.9996 7.0835 14.9996C6.951 14.9996 6.82391 14.947 6.73016 14.8533Z"
                                                                                      fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                        <button class="text-[#B1AEAE] hover:text-secondary">
                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <g clip-path="url(.clip0_656_640)">
                                                                                    <path
                                                                                        d="M7.9999 2.74799L7.2829 2.01099C5.5999 0.280988 2.5139 0.877988 1.39989 3.05299C0.876895 4.07599 0.758895 5.55299 1.71389 7.43799C2.63389 9.25299 4.5479 11.427 7.9999 13.795C11.4519 11.427 13.3649 9.25299 14.2859 7.43799C15.2409 5.55199 15.1239 4.07599 14.5999 3.05299C13.4859 0.877988 10.3999 0.279988 8.7169 2.00999L7.9999 2.74799ZM7.9999 15C-7.33311 4.86799 3.27889 -3.04001 7.82389 1.14299C7.88389 1.19799 7.94289 1.25499 7.9999 1.31399C8.05632 1.25504 8.11503 1.19833 8.17589 1.14399C12.7199 -3.04201 23.3329 4.86699 7.9999 15Z"
                                                                                        fill="currentColor" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath class="clip0_656_640">
                                                                                        <rect width="16" height="16" fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                        </button>
                                                                    </span>
                                                            </li>
                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="flex flex-wrap items-center justify-center mt-[25px]">
                                        <div class="swiper-button-prev w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                        </div>
                                        <div class="swiper-button-next w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                        </div>

                                    </div>
                                </div>
                            </div>



                            <div class="mb-[60px]">
                                <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[40px] font-medium">Tags<span
                                            class="text-secondary">.</span></h3>
                                <ul class="flex flex-wrap my-[-7px] mx-[-5px] font-light text-[12px]">
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Real Estate</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Appartment</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Sale Property</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Duplex</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Buy Property</a>
                                    </li>
                                    <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Houses</a>
                                    </li>

                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>


            </div>
            <!-- Explore Cities Start-->
            <section class="explore-cities-section pb-[50px] pt-[80px] lg:pt-[125px]">
                <div class="container">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12">
                            <div class="mb-[30px] lg:mb-[60px] text-center">
                                <span class="text-secondary text-tiny inline-block mb-2">Explore Cities</span>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">Find
                                    Your
                                    Neighborhood<span class="text-secondary">.</span></h2>
                            </div>
                                <div class="cities-slider">
                                <div class="swiper  -mx-[30px]  px-[30px] py-[60px]">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide start -->
                                        <?php
                                        $subBiuld = new building();
                                        $subBiuld->sunBuild();
                                        ?>
                                        <!-- swiper-slide end-->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Explore Cities End-->
        </section>
    <?php } } ?>
    <!-- Popular Properties end -->
<?php
include "include/footer.php";

?>