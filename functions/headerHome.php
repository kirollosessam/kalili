<?php
class headerHome{
    function selectHeader() {
        global $connection;
        $query = "SELECT * FROM header ORDER BY id DESC ";
        $allHeader = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($allHeader)){
            $title = $row['title'];
            $ditels = $row['ditels'];
            $imageHeader = $row['imageHeader'];
            echo"
            
                        <div class=\"swiper-slide lg:h-[700px] xl:h-[950px] xs:h-[auto] flex flex-wrap items-center\">
                            <div class=\"container\">
                                <div class=\"grid grid-cols-12\">
                                    <div class=\"col-span-12 lg:col-span-5 xl:col-span-6\">
                                        <div class=\"slider-content max-w-[560px] relative z-[9]\">
                                            <div class=\"relative mb-5 sub_title\">
                                                <span class=\"text-base text-white block\">A new way to find Properties</span>
                                            </div>
                                            <h1 class=\"font-lora text-secondary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title font-normal\">
                                                <span>$title</span>
                                            </h1>

                                            <p class=\"text-base text-white mt-8 mb-12 text max-w-[570px]\">
                                                $ditels
                                            </p>
                                            <div class=\"inline-block hero_btn\">
                                                <a href=\"contact-us.html\" class=\"before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-white before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto hover:text-primary before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-secondary after:rounded-md after:transition-all block\">Contact
                                                    us</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 lg:col-span-7 xl:col-span-6\">
                                        <div class=\"relative mt-10 -right-6 md:mt-0 lg:absolute lg:right-0 lg:bottom-0 lg:w-3/4 xl:w-fit\">
                                            <img class=\"hero_image w-full\" src=\"assets/images/headers/$imageHeader\" width=\"866\" height=\"879\" alt=\"hero image\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            ";
        }
    }

}

