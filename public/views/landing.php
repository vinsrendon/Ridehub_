<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/lib/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./public/lib/images/logo.png">
    <title>Ridehub</title>
</head>
<body>
    <?php require 'userNav.php'?>

    <div class="flex flex-wrap">
        <div class="lg:flex-1 w-full mt-25">
            <img src="./public/lib/images/car.png" class="bg-cover">
        </div>
        <div class="w-full bg-[#525252] lg:flex-1 flex flex-col items-center justify-center"> 
            <div class="lg:text-left text-center mx-auto md:p-12 p-5">
                <h1 class="text-white text-6xl md:text-7xl font-bold uppercase mb-4 mt-3">LUXURY CARS FOR RENT</h1>      
                <p class="text-xl md:text-2xl text-[#FF9500] mb-6">FIND THE PERFECT CAR TO RENT TODAY</p>
                <button class="bg-red-600 text-md md:text-4xl px-6 py-3 rounded-full hover:bg-red-700 font-bold">Book Now!</button>
            </div>            
        </div>
    </div>

    <div class="p-5">
        <h1 class="text-center text-4xl mb-5">WHY CHOOSE US?</h1>
        <div class="flex flex-wrap flex-col md:flex-row gap-10 text-left">
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/Award.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">Outstanding Services</p>
                </div>                  
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est vel eveniet commodi ea natus, porro provident perferendis odit magnam explicabo accusantium nam quasi autem a, blanditiis reiciendis? Fugiat, veritatis? Consequuntur!
                </p>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/location_on.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">GPS on Every Vechicle</p>
                </div>                
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est vel eveniet commodi ea natus, porro provident perferendis odit magnam explicabo accusantium nam quasi autem a, blanditiis reiciendis? Fugiat, veritatis? Consequuntur!
                </p>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/Phone call.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">14 Hours Support</p>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est vel eveniet commodi ea natus, porro provident perferendis odit magnam explicabo accusantium nam quasi autem a, blanditiis reiciendis? Fugiat, veritatis? Consequuntur!
                </p>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/Home.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">Flexible Booking Options</p>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est vel eveniet commodi ea natus, porro provident perferendis odit magnam explicabo accusantium nam quasi autem a, blanditiis reiciendis? Fugiat, veritatis? Consequuntur!
                </p>
            </div>
        </div>
    </div>
    
</body>
<script src="./public/lib/js/script.js"></script>
</html>