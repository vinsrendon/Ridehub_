<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/lib/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ridehub</title>
</head>
<body class="">
    <nav class="bg-gray-800 p-2 w-full fixed z-50 text-xl" id="font-abhaya">
        <div class="hidden lg:flex flex justify-between items-center">
            <div class="flex space-x-4">
                <img src="./public/lib/images/logo.png" width="50px" height="50px">
                <img src="./public/lib/images/RideHubTransport.png" >
            </div>
            <div class="mr-32">
                <a href="" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Home</a>
                <a href="" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">About</a>                
                <a href="" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Fleet</a>                
                <a href="" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Contact</a>                
                <a href="" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Reservation</a>                
            </div>         
        </div>
        <button class="lg:hidden flex items-center text-white focus:outline-none" onclick="toggleMenu()">
            <svg class="w-7 h-7 my-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div id="mobileMenu" class="hidden sm:hidden">
            <a href="" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Home</a>
            <a href="" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">About</a>
            <a href="" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Fleet</a>
            <a href="" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Contact</a>
            <a href="" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Reservation</a>
        </div>
    </nav>

    <div class="flex flex-wrap" id="font-averia">
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

    <div class="p-5" id="font-averia">
        <h1 class="text-center text-4xl mb-5">WHY CHOOSE US?</h1>
        <div class="flex flex-wrap flex-col md:flex-row gap-10 text-left">
            <div class="flex-1">
                <div class="flex mb-2 gap-2">
                    <img src="./public/lib/images/Award.png" width="32" height="32">
                    <p class="font-bold text-2xl">Outstanding Services</p>
                </div>                  
                <p>                    
                    
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est vel eveniet commodi ea natus, porro provident perferendis odit magnam explicabo accusantium nam quasi autem a, blanditiis reiciendis? Fugiat, veritatis? Consequuntur!
                </p>
            </div>
            <div class="flex-1">
                <div class="flex mb-2 gap-2">
                    <img src="./public/lib/images/location_on.png" width="38" height="38">
                    <p class="font-bold text-2xl">GPS on Every Vechicle</p>
                </div>                
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est vel eveniet commodi ea natus, porro provident perferendis odit magnam explicabo accusantium nam quasi autem a, blanditiis reiciendis? Fugiat, veritatis? Consequuntur!
                </p>
            </div>
            <div class="flex-1">
                <div class="flex mb-2 gap-2">
                    <img src="./public/lib/images/Phone call.png" width="32" height="32">
                    <p class="font-bold text-2xl">14 Hours Support</p>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est vel eveniet commodi ea natus, porro provident perferendis odit magnam explicabo accusantium nam quasi autem a, blanditiis reiciendis? Fugiat, veritatis? Consequuntur!
                </p>
            </div>
            <div class="flex-1">
                <div class="flex mb-2 gap-2">
                    <img src="./public/lib/images/Home.png" width="32" height="32">
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