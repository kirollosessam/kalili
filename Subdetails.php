<?php include "include/header.php"?>
        <!-- offcanvas-mobile-menu end -->
        <!-- Header end -->

        <!-- Hero section start -->
        <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <div class="mb-5"><span class="text-base block">Listed Agencies</span></div>
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">Agency Details</h1>
                            <p class="text-base mt-5 max-w-[500px] mx-auto text-center">Huge number of propreties availabe here for buy and sell also you can find here co-living property as you like</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->
<?php
if(isset($_GET['sub'])){
$subBuild = $_GET['sub'];
$query = "SELECT * FROM subbuild WHERE id=$subBuild  ";
$subSelectBuild = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($subSelectBuild)){
    $subname = $row['subname'];
    $location = $row['location'];
    $location_link= $row['location_link'];
    $subimage1 = $row['subimage1'];
    $subimage2 = $row['subimage2'];
    $subimage3 = $row['subimage3'];
    $subimage4 = $row['subimage4'];
    $subimage5 = $row['subimage5'];
    $subimage6 = $row['subimage6'];
    $space = $row['space'];
    $numberOfRooms = $row['numberOfRooms'];
    $numberOfBathroom = $row['numberOfBathroom'];
    $DressingRoom = $row['DressingRoom'];
    $Balcony = $row['Balcony'];
    $content = $row['content'];

?>
        <!-- Brand Section Etart-->
        <section class="py-[80px] lg:py-[125px]">
            <div class="container">
                <div class="grid sm:grid-cols-12">
                    <div class="col-span-12 md:col-span-4 lg:col-span-3">
                        <ul class="flex flex-wrap lg:flex-col list-none items-center border-[1px] border-secondary rounded-[8px] h-full text-center px-10 py-[30px] md:py-[50] lg:py-[55px] xl:py-[60px] xl:max-w-[230px] xl:mr-0 md:mr-[20px] ">
                            <li class="w-full border-b-[1px] border-[#1B2D40]/60 pb-3 mb-3 md:pb-3 md:mb-3 lg:pb-6 xl:pb-10 lg:mb-6 xl:mb-10">
                                <span class="font-lora text-secondary text-lg"><span class="counter-up"><?php echo $space?></span>
                                <span>CM+</span></span>
                                <p>Properties Sold</p>
                            </li>

                            <li class="w-full border-b-[1px] border-[#1B2D40]/60 pb-3 mb-3 md:pb-3 md:mb-3 lg:pb-6 xl:pb-10 lg:mb-6 xl:mb-10">
                                <span class="font-lora text-secondary text-lg"><span class="counter-up"><?php echo $numberOfRooms?></span>
                                <span>CM+</span></span>
                                <p>Customers</p>
                            </li>

                            <li class="w-full border-b-[1px] border-[#1B2D40]/60 pb-3 mb-3 md:pb-3 md:mb-3 lg:pb-6 xl:pb-10 lg:mb-6 xl:mb-10">
                                <span class="font-lora text-secondary text-lg"><span class="counter-up"><?php echo $numberOfBathroom?></span>
                                <span>CM+</span></span>
                                <p>Customers</p>
                            </li>

                            <li class="w-full border-b-[1px] border-[#1B2D40]/60 pb-3 mb-3 md:pb-3 md:mb-3 lg:pb-6 xl:pb-10 lg:mb-6 xl:mb-10">
                                <span class="font-lora text-secondary text-lg"><span class="counter-up"><?php echo $DressingRoom?></span>
                                <span>CM+</span></span>
                                <p>Customers</p>
                            </li>

                            <li class="w-full border-b-[1px] border-[#1B2D40]/60 pb-3 mb-3 md:pb-3 md:mb-3 lg:pb-6 xl:pb-10 lg:mb-6 xl:mb-10">
                                <span class="font-lora text-secondary text-lg"><span class="counter-up"><?php echo $Balcony?></span>
                                <span>CM+</span></span>
                                <p>Customers</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-12 md:col-span-8 lg:col-span-9 mt-10 md:mt-0">
                        <div class="p-[30px] rounded-[10px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC]">
                            <img class="self-center mb-[15px] w-full h-full" src="assets/images/Sub/<?php echo $subimage1?>" alt="brand logo">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-7 mt-20">
                    <div class="max-w-[530px]">
                        <h4 class="font-lora text-primary text-[24px] lg:text-[36px] mb-[10px]"><?php echo $subname ?><span class="text-secondary">.</span></h4>
                        <p class="mb-12">  <?php echo $content?>.</p>
                    </div>
                    <div class="">
                        <h4 class="font-lora text-primary text-[24px] lg:text-[36px] mb-[10px]">Address<span class="text-secondary">.</span></h4>
                        <a href="<?php echo $location_link ;?>"><span class="underline font-light block text-[18px] mb-[15px]"><?php echo $location;?></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Section End-->

        <!-- Featured Properties Start -->
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
                        <div class="swiper  -mx-[30px] -my-[60px] px-[30px] py-[60px]">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide start -->

                                <div class="swiper-slide text-center">
                                    <div class="relative group">
                                        <?php if ($subimage2){
                                            echo"<a href=\"assets/images/Sub/$subimage2\" class=\"gallery-image\">
                                            <img  src=\"assets/images/Sub/$subimage2\" class=\"w-full h-full block mx-auto rounded-[6px]\" loading=\"lazy\" width=\"270\" height=\"380\" alt=\"New York\">
                                        </a>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="swiper-slide text-center">
                                    <div class="relative group">
                                        <?php if ($subimage3){
                                            echo"<a href=\"assets/images/Sub/$subimage3\" class=\"gallery-image\">
                                            <img  src=\"assets/images/Sub/$subimage3\" class=\"w-full h-full block mx-auto rounded-[6px]\" loading=\"lazy\" width=\"270\" height=\"380\" alt=\"New York\">
                                        </a>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="swiper-slide text-center">
                                    <div class="relative group">
                                        <?php if ($subimage4){
                                            echo"<a href=\"assets/images/Sub/$subimage4\" class=\"gallery-image\">
                                            <img  src=\"assets/images/Sub/$subimage4\" class=\"w-full h-full block mx-auto rounded-[6px]\" loading=\"lazy\" width=\"270\" height=\"380\" alt=\"New York\">
                                        </a>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="swiper-slide text-center">
                                    <div class="relative group">
                                        <?php if ($subimage5){
                                            echo"<a href=\"assets/images/Sub/$subimage5\" class=\"gallery-image\">
                                            <img  src=\"assets/images/Sub/$subimage5\" class=\"w-full h-full block mx-auto rounded-[6px]\" loading=\"lazy\" width=\"270\" height=\"380\" alt=\"New York\">
                                        </a>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="swiper-slide text-center">
                                    <div class="relative group">
                                        <?php if ($subimage6){
                                            echo"<a href=\"assets/images/Sub/$subimage6\" class=\"gallery-image\">
                                            <img  src=\"assets/images/Sub/$subimage6\" class=\"w-full h-full block mx-auto rounded-[6px]\" loading=\"lazy\" width=\"270\" height=\"380\" alt=\"New York\">
                                        </a>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br>

<?php } } ?>
<!-- Footer Start  -->

<?php include "include/footer.php"?>

<!-- Footer end  -->