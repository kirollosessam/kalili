<?php include "include/header.php"?>
    <!-- offcanvas-mobile-menu end -->
    <!-- Header end -->


    <!-- Hero section start -->
    <section class="bg-no-repeat bg-left-bottom xl:bg-right-bottom bg-contain xl:bg-cover bg-[#E9F1FF] h-[450px] lg:h-[500px] xl:h-[650px] flex flex-wrap items-center relative">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[420px] text-center mx-auto">
                        <div class="mb-5"><span class="text-base text-secondary block">Projects </span></div>
                        <h1 class="font-lora text-primary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title font-medium">
                            New Projects<span class="text-secondary">.</span>
                        </h1>
                        <p class="text-base mt-5">Huge number of propreties availabe here for buy and sell, also you can find here co-living property</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- About section start -->
    <section class="relative z-[1] mt-[80px] xl:mt-0">
        <div class="container">
            <div class="items-center">
                <div class="lg:mb-[60px] mb-10 -mt-[150px]">
                    <img class="mx-auto w-full" src="assets/images/about/about5.png" width="597" height="716" alt="about image">
                </div>
                <div class="max-w-[830px] mx-auto text-center">
                    <span class="text-secondary text-tiny inline-block mb-2">Since 1975</span>
                    <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.3888] xl:text-[35px] capitalize mb-[30px] lg:mb-[50px] font-medium"> We Provide Right Choice of Properties that You need and have great opportunity to choose from thousands of Collection<span class="text-secondary">.</span></h2>
                    <div class="flex justify-center">
                        <ul class="flex flex-wrap list-none">
                            <li class="block">
                                <span class="font-lora text-secondary text-xl"><span class="counter-up">20</span> <span>k+</span></span>
                                <p>Properties</p>
                            </li>
                            <li class="block pl-[30px] sm:pl-[40px] md:pl-[60px]">
                                <span class="font-lora text-secondary text-xl"><span class="counter-up">12</span> <span>k+</span></span>
                                <p>Customers</p>
                            </li>
                            <li class="block pl-[30px] sm:pl-[40px] md:pl-[60px]">
                                    <span class="font-lora text-secondary text-xl"><span class="counter-up">160</span>
                                    <span>+</span></span>
                                <p>Awards Win</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->


    <!-- service Section Start-->
    <section class="py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="mb-[30px] lg:mb-[60px] text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">Our Services</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                            Services that we Provide<span class="text-secondary">.</span></h2>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px]">
                <?php

                $selectCatBuild = new category();
                $selectCatBuild->selectBuildsCategory();
                ?>

            </div>
        </div>
    </section>
    <!-- service Section End-->


    <!-- Brand section Start-->
    <div class="brand-section pb-[80px] lg:pb-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="mb-[30px] lg:mb-[60px] text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">Our Partner’s</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">Reliable Partner’s<span class="text-secondary">.</span></h2>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="brand-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide start -->
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand1.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand2.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand4.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand5.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href="#" class="block">
                                        <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                    </a>
                                </div>

                                <!-- swiper-slide end-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand section End-->



    <!-- Footer Start -->
<?php include "include/footer.php"?>