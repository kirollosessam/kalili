<?php include "include/header.php"?>
<!--kokok edsssama-->
        <!-- Hero section start -->
        <section class="bg-primary relative pt-[130px] lg:pt-[80px] xl:pt-[0px] mb-[70px] lg:mb-[0px]">
            <div class="hero-slider overflow-hidden">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- swiper-slide start -->
                        <?php

                        $showHeaders = new headerHome();
                        $showHeaders->selectHeader();
                        ?>
                        <!-- swiper-slide end-->
                    </div>
                </div>

            </div>
            <span class="shape-4 absolute -bottom-[100px] left-0 scene" data-relative-input="true">
    <img  data-depth="0.1" src="assets/images/hero/shape4.svg" alt="">
  </span>
        </section>
        <!-- Hero section end -->


        <!-- Addvanced search tab start -->
        <div class="mt-[80px] lg:mt-[120px] xl:mt-[-160px] relative z-[2] pl-[40px] lg:pl-[50px] xl:pl-[0px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 relative">
                        <ul class="tab-nav search-tab inline-flex px-[15px] sm:px-[30px] py-[22px] border-l border-t border-r border-solid border-[#016450] border-opacity-25 rounded-tl-[15px] rounded-tr-[15px] bg-white">
                            <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1 active"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">Search</button>
                            </li>
<!--                            <li data-tab="sell" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">sell</button>-->
<!--                            </li>-->
<!--                            <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">rent</button>-->
<!--                            </li>-->
<!--                            <li data-tab="co-living" class="md:mr-[0px] my-1"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">Co-living</button>-->
<!--                            </li>-->
                        </ul>

                        <button class="tab-toggle-btn px-[10px] py-[15px] absolute bottom-[-56px] left-[-45px] border-l border-t border-b border-solid border-[#016450] bg-white text-primary border-opacity-25 rounded-tl-[10px] rounded-bl-[10px]" aria-label="svg icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M19 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 22V17" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 13V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 11H7" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 11H21" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 13H14" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="col-span-12 selectricc-border-none">
                        <div id="buy" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px] active">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                            <input id="location" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Type</label>
                                            <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                                Range</label>
                                            <select name="price" id="price" class="nice-select appearance-none bg-transparent text-body text-tiny font-light cursor-pointer">
                                                <option selected value="0">1500 USD</option>
                                                <option value="1">1600 USD</option>
                                                <option value="2">1700 USD</option>
                                                <option value="3">1800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Size</label>
                                            <select name="property-size" id="property-size" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2500 Sqft</option>
                                                <option value="1">2600 Sqft</option>
                                                <option value="2">2700 Sqft</option>
                                                <option value="3">2800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>



                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms10" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                            <select name="property" id="bedrooms10" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property9" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                            <select name="property" id="property9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                            <select name="garage" id="garage" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            Search Properties
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>


                        <div id="sell" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location2" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                            <input id="location2" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property2" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Type</label>
                                            <select name="property" id="property2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Apartments</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price2" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                                Range</label>
                                            <select name="price" id="price2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">100 USD</option>
                                                <option value="1">600 USD</option>
                                                <option value="2">700 USD</option>
                                                <option value="3">800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size2" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Size</label>
                                            <select name="property-size" id="property-size2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">500 Sqft</option>
                                                <option value="1">600 Sqft</option>
                                                <option value="2">700 Sqft</option>
                                                <option value="3">800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>


                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                            <select name="property" id="bedrooms" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property3" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                            <select name="property" id="property3" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage2" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                            <select name="garage" id="garage2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            Search Properties
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>

                        <div id="rent" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location7" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                            <input id="location7" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property8" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Type</label>
                                            <select name="property" id="property8" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price7" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                                Range</label>
                                            <select name="price" id="price7" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">1500 USD</option>
                                                <option value="1">1600 USD</option>
                                                <option value="2">1700 USD</option>
                                                <option value="3">1800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size9" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Size</label>
                                            <select name="property-size" id="property-size9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2500 Sqft</option>
                                                <option value="1">2600 Sqft</option>
                                                <option value="2">2700 Sqft</option>
                                                <option value="3">2800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>



                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms6" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                            <select name="property" id="bedrooms6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property7" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                            <select name="property" id="property7" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage20" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                            <select name="garage" id="garage20" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            Search Properties
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>
                        <div id="co-living" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                            <form action="#">
                                <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="location6" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                            <input id="location6" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property6" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Type</label>
                                            <select name="property" id="property6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Apartments</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="price6" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                                Range</label>
                                            <select name="price" id="price6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">5500 USD</option>
                                                <option value="1">5600 USD</option>
                                                <option value="2">5700 USD</option>
                                                <option value="3">5800 USD</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                        </div>

                                        <div class="flex-1">
                                            <label for="property-size4" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                                Size</label>
                                            <select name="property-size" id="property-size4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">3500 Sqft</option>
                                                <option value="1">3600 Sqft</option>
                                                <option value="2">3700 Sqft</option>
                                                <option value="3">3800 Sqft</option>
                                            </select>
                                        </div>
                                        <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                            <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                            <span class="hidden">Search Properties</span>
                                        </button>
                                    </div>

                                </div>



                                <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="bedrooms4" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                            <select name="property" id="bedrooms4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Bedrooms</option>
                                                <option value="1">kitchen</option>
                                                <option value="2">dinning rooms</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="property4" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                            <select name="property" id="property4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">Duplex House</option>
                                                <option value="1">Duplex House 1</option>
                                                <option value="2">Duplex House 2</option>
                                                <option value="3">Duplex House 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <div class="mr-4 self-start shrink-0">
                                            <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                        </div>
                                        <div class="flex-1">
                                            <label for="garage4" class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                            <select name="garage" id="garage4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                <option selected value="0">2 Garage</option>
                                                <option value="1">2 Garage</option>
                                                <option value="2">3 Garage</option>
                                                <option value="3">4 Garage</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                        <button class="search-properties-btn">
                                            Search Properties
                                        </button>
                                    </div>

                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Addvanced search tab end -->


        <!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[125px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col items-center justify-center mb-[50px]">
                            <span class="text-secondary text-tiny inline-block mb-2">Best Choice</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium"> Popular Properties<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                </div>

                <div class="properties-slider">
                    <div class="swiper  -mx-[15px] -my-[60px] px-[15px] py-[60px]">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide start -->

                     <?php

                    $showBuild = new building();
                    $showBuild->selectBuilding();
                     ?>




                            <!-- swiper-slide end-->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Popular Properties end -->

        <!-- About Us Sectin Start -->
        <section class="about-section pt-10">
            <div class="container">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-12 lg:col-span-6">
                        <span class="text-secondary text-tiny inline-block mb-2">Why Choose us</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-5 lg:mb-16 font-medium max-w-[500px]">We Provide Latest Properties for our valuable Clients<span class="text-secondary">.</span></h2>
                        <div class="scene" data-relative-input="true">
                            <img data-depth="0.1" src="assets/images/about/about1.png" class="" loading="lazy" width="729" height="663" alt="about Image">
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:pl-[70px]">
                        <p class="max-w-[448px] ">Huge number of propreties availabe here for buy, sell and
                            Rent. Also you find here co-living property so lots opportunity
                            you have to choose here and enjoy huge discount. </p>

                        <div class="-mb-10 mt-12 xl:mt-[70px] 2xl:mt-[100px]">
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/doller.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Budget
                                        Friendly</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/location.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Prime
                                        Location</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">
                                        Trusted by
                                        Thousand</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Sectin End -->

<br>
<br>

        <!-- Video Section Start -->
        <section class="video-section">
            <div class="container">
                <div class="grid grid-cols-12 gap-3 sm:gap-[30px] items-center bg-primary z-[-2] lg:pl-[60px] lg:pr-0 lg:py-0 sm:pl-10 sm:pr-10 pl-5 pr-5 py-5 sm:py-12 rounded-[7px]">
                    <div class="col-span-12 lg:col-span-6 relative">
                        <div class="mb-5 lg:mb-0 max-w-[450px]">
                            <span class="text-secondary text-tiny inline-block mb-2">Take a video tour</span>
                            <h2 class="font-lora text-white text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[10px] font-medium">Watch the video for taking your decision easily<span class="text-secondary">.</span></h2>
                            <a href="#" class="flex flex-wrap items-center text-secondary text-tiny mt-[20px]">View all
                                <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php
                    $query = "SELECT * FROM video ORDER BY id DESC ";
                    $select_video = mysqli_query($connection,$query);
                    $row = mysqli_fetch_assoc($select_video);
                    $video = $row['video'];
                    $title = $row['title'];
                    ?>
                    <div class="col-span-12 lg:col-span-6 text-center">
                        <div class="relative rounded-[24px] lg:pt-[45px] lg:pr-[45px] z-[1] lg:inline-block">
                            <div class="">
                                <img src="assets/images/video/shape-3.png" class="absolute top-[30px] right-[30px] z-[-1]" loading="lazy" width="50" height="60" alt="shape image">
                                <img src="assets/images/video/shape-2.png" class="absolute left-1/2 hidden lg:block lg:bottom-5 lg:-left-[160px]" loading="lazy" width="128" height="56" alt="Shape">
                            </div>
                            <div class="relative lg:-mb-16">
                                <div class="scene" data-relative-input="true">
                                    <img data-depth="0.1" src="assets/images/video/video.png" class="rounded-[24px] max-w-full" loading="lazy" width="507" height="349" alt="video image">
                                </div>
                                <a href="<?php echo $video ;?>" class="play-button bg-white text-white hover:text-primary absolute left-0 right-0 mx-auto top-1/2 -translate-y-1/2 hover:scale-105 hover:bg-primary w-[55px] h-[55px] flex
                                    flex-wrap z-[1] items-center justify-center opacity-100 shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] transition-all rounded-full group

                                    before:block before:absolute  before:bg-white before:opacity-80 before:shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] hover:before:bg-primary hover:before:opacity-80 before:w-[70px] before:h-[70px] before:rounded-full before:z-[-1]
                                    " aria-label="play button">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="stroke-primary group-hover:stroke-white" d="M1.63861 10.764V6.70324C1.63861 1.66145 5.20893 -0.403178 9.57772 2.11772L13.1024 4.14812L16.6271 6.17853C20.9959 8.69942 20.9959 12.8287 16.6271 15.3496L13.1024 17.38L9.57772 19.4104C5.20893 21.9313 1.63861 19.8666 1.63861 14.8249V10.764Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-baseline gap-2 mt-10 leading-[1]">
                    <span class="text-secondary text-[16px] sm:text-[20px] font-lora font-normal">Have a question?</span>
                    <a class="text-primary text-[22px] sm:text-[28px] font-lora font-medium" href="tel:+01234874854">+01234 874 854</a>
                </div>
            </div>
        </section>
        <!-- Video Section End -->

        <!-- Explore Cities Start-->
<!--        <section class="explore-cities-section pb-[50px] pt-[80px] lg:pt-[125px]">-->
<!--            <div class="container">-->
<!--                <div class="grid grid-cols-12">-->
<!--                    <div class="col-span-12">-->
<!--                        <div class="mb-[30px] lg:mb-[60px] text-center">-->
<!--                            <span class="text-secondary text-tiny inline-block mb-2">Explore Cities</span>-->
<!--                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">Find-->
<!--                                Your-->
<!--                                Neighborhood<span class="text-secondary">.</span></h2>-->
<!--                        </div>-->
<!--                        <div class="cities-slider">-->
<!--                            <div class="swiper  -mx-[30px] -my-[60px] px-[30px] py-[60px]">-->
<!--                                <div class="swiper-wrapper">-->
<!--                                   swiper-slide start -->
<!--                                    <div class="swiper-slide text-center">-->
<!--                                        <div class="relative group">-->
<!--                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">-->
<!--                                                <img src="assets/images/cities/image1.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="New York">-->
<!--                                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">-->
<!--                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">New York</span>-->
<!--                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">36 Properties</p>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="swiper-slide text-center">-->
<!--                                        <div class="relative group">-->
<!--                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">-->
<!--                                                <img src="assets/images/cities/image2.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="Sun Francisco">-->
<!--                                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">-->
<!--                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">Sun Francisco</span>-->
<!--                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">18 Properties</p>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="swiper-slide text-center">-->
<!--                                        <div class="relative group">-->
<!--                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">-->
<!--                                                <img src="assets/images/cities/image3.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="Washington D.C.">-->
<!--                                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">-->
<!--                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">Washington D.C.</span>-->
<!--                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">27 Properties</p>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="swiper-slide text-center">-->
<!--                                        <div class="relative group">-->
<!--                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">-->
<!--                                                <img src="assets/images/cities/image4.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="New York">-->
<!--                                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">-->
<!--                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">New York</span>-->
<!--                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">56 Properties</p>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="swiper-slide text-center">-->
<!--                                        <div class="relative group">-->
<!--                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">-->
<!--                                                <img src="assets/images/cities/image3.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="Francisco">-->
<!--                                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">-->
<!--                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">Francisco</span>-->
<!--                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">18 Properties Sun</p>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                     swiper-slide end-->
<!--                                </div>-->
<!--                              Add Pagination -->
<!--                                <div class="swiper-pagination"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
        <!-- Explore Cities End-->

        <!-- Testimonial carousel Start -->
        <section class="testimonial-section pt-[80px] lg:pt-[125px] bg-center bg-no-repeat bg-white z-10">
            <div class="container testimonial-carousel-two relative">
                <div class="scene dots-shape absolute left-0">
                    <img data-depth="0.4" class="z-[1]" src="assets/images/testimonial/dots.png" width="106" height="129" loading="lazy" alt="shape">
                </div>
                <div class="grid items-center grid-cols-12 gap-x-[30px]">
                    <div class="col-span-12 relative">
                        <div class="swiper rounded-[30px] pb-[40px] md:pb-0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- shape and images -->

                                    <div class="pl-[50px] xl:pl-[150px]">
                                        <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                            <img src="assets/images/testimonial/person2.png" class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy" width="402" height="505" alt="Oliver Stephen">
                                            <img class="absolute left-[0px] top-0 z-[1]" src="assets/images/testimonial/persone-pattern.png" width="400" height="500" loading="lazy" alt="shape">
                                        </div>
                                    </div>


                                    <div class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                        <div class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                            <div class="relative">
                                                <span class="block absolute right-[0px] top-[0px]">

                    <svg class="ml-auto mb-[4px]" width="78" height="57" viewBox="0 0 78 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.08">
                        <path d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z" fill="#01614E"/>
                        </g>
                        </svg>


                </span>

                                                <span class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Testimonial</span>
                                                <h2 class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                    Reviews from our <br class="hidden xl:block" /> happy Clients<span class="text-secondary">.</span>
                                                </h2>
                                                <p class="max-w-[480px]">
                                                    Bary do a great job to find the perfect home. It’s very easy for
                                                    every one to buy, sell or rent property we belive they continure
                                                    their great service and appriciate them recomended.

                                                </p>
                                            </div>

                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-4">
                                                    <span class="font-lora text-[18px] leading-none capitalize text-secondary">Oliver Stephen</span>
                                                    <span class="flex flex-wrap">
                        <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    </span>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- shape and images -->

                                    <div class="pl-[50px] xl:pl-[150px]">
                                        <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                            <img src="assets/images/testimonial/person4.png" class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy" width="402" height="505" alt="Sun Francisco">
                                            <img class="absolute left-[0px] top-0 z-[1]" src="assets/images/testimonial/persone-pattern.png" width="400" height="500" loading="lazy" alt="shape">
                                        </div>
                                    </div>


                                    <div class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                        <div class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                            <div class="relative">
                                                <span class="block absolute right-[0px] top-[0px]">

                    <svg class="ml-auto mb-[4px]" width="78" height="57" viewBox="0 0 78 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.08">
                        <path d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z" fill="#01614E"/>
                        </g>
                        </svg>


                </span>

                                                <span class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Testimonial</span>
                                                <h2 class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                    Reviews from our <br class="hidden xl:block" /> happy Clients<span class="text-secondary">.</span>
                                                </h2>
                                                <p class="max-w-[480px]">
                                                    Bary do a great job to find the perfect home. It’s very easy for
                                                    every one to buy, sell or rent property we belive they continure
                                                    their great service and appriciate them recomended.

                                                </p>
                                            </div>

                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-4">
                                                    <span class="font-lora text-[18px] leading-none capitalize text-secondary">Sun Francisco</span>
                                                    <span class="flex flex-wrap">
                        <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    </span>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- shape and images -->

                                    <div class="pl-[50px] xl:pl-[150px]">
                                        <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                            <img src="assets/images/testimonial/person2.png" class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy" width="402" height="505" alt="Oliver Stephen">
                                            <img class="absolute left-[0px] top-0 z-[1]" src="assets/images/testimonial/persone-pattern.png" width="400" height="500" loading="lazy" alt="shape">
                                        </div>
                                    </div>


                                    <div class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                        <div class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                            <div class="relative">
                                                <span class="block absolute right-[0px] top-[0px]">

                    <svg class="ml-auto mb-[4px]" width="78" height="57" viewBox="0 0 78 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.08">
                        <path d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z" fill="#01614E"/>
                        </g>
                        </svg>


                </span>

                                                <span class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Testimonial</span>
                                                <h2 class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                    Reviews from our <br class="hidden xl:block" /> happy Clients<span class="text-secondary">.</span>
                                                </h2>
                                                <p class="max-w-[480px]">
                                                    Bary do a great job to find the perfect home. It’s very easy for
                                                    every one to buy, sell or rent property we belive they continure
                                                    their great service and appriciate them recomended.

                                                </p>
                                            </div>

                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-4">
                                                    <span class="font-lora text-[18px] leading-none capitalize text-secondary">Oliver Stephen</span>
                                                    <span class="flex flex-wrap">
                        <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                <span class="ml-[4px]">
                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                fill="#B39359" />
                                </svg>
                        </span>
                                                    </span>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="testimonial-pagination hidden sm:block">
                                <div class="swiper-button-prev w-[36px] h-[36px] rounded-full bg-secondary xl:bg-primary  text-white hover:bg-secondary top-auto bottom-[85px] left-[30px]">
                                </div>
                                <div class="swiper-button-next w-[36px] h-[36px] rounded-full bg-secondary xl:bg-primary  text-white hover:bg-secondary top-auto bottom-[85px] left-[85px]">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Testimonial carousel End -->

        <!-- Brand section Start-->
        <section class="brand-section pt-[80px] lg:pt-[125px] pb-[80px] lg:pb-[125px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2">Our Partner’s</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                Reliable Partner’s<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
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
        </section>
        <!-- Brand section End-->

        <!-- Footer Start  -->
        <?php include "include/footer.php"?>
        <!-- Footer end  -->
