<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'userHead.php'?>    
</head>
<body>
    <?php require 'userNav.php'?>

    <div class="flex flex-wrap ">
        <div class="xl:flex-1">
            <img src="./public/lib/images/car.png" >
        </div>
        <div class="w-full bg-[#525252] xl:flex-1 flex flex-col items-center justify-center"> 
            <div class="xl:text-left text-center mx-auto md:p-12 p-5">
                <h1 class="text-white text-6xl md:text-7xl font-bold uppercase mb-4 mt-3">LUXURY CARS FOR RENT</h1>      
                <p class="text-xl md:text-2xl text-[#FF9500] mb-6">FIND THE PERFECT CAR TO RENT TODAY</p>
                <a href="/register"><button class="bg-red-600 text-md md:text-4xl px-6 py-3 rounded-full hover:bg-red-700 font-bold">Book Now!</button></a>
            </div>            
        </div>
    </div>

    <div class="p-5">
        <h1 class="text-center text-4xl mb-5">WHY CHOOSE US?</h1>
        <div class="flex flex-wrap flex-col md:flex-row gap-10 text-left text-sm">
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/Award.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">Outstanding Services</p>
                </div>                  
                <p>
                    We pride ourselves on providing top-notch services that exceed your expectations. Our fleet consists of well-maintained, luxury cars tailored to suit your needs, ensuring a comfortable and stylish experience. From timely car delivery and pickups to personalized services, we go the extra mile to make your journey seamless and enjoyable. With a focus on customer satisfaction, we aim to deliver the highest standards of reliability and professionalism.
                </p>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/location_on.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">GPS on Every Vechicle</p>
                </div>                
                <p>
                    Your safety and convenience are our priorities. That's why all our vehicles are equipped with state-of-the-art GPS navigation systems. Whether you're exploring a new city or heading to a business meeting, our GPS ensures you reach your destination without any hassle. Stay on track with live navigation, avoid traffic delays, and discover the fastest routes—all at your fingertips.
                </p>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/Phone call.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">14 Hours Support</p>
                </div>
                <p>
                    Our dedicated customer support team is here to assist you whenever you need it. Whether it's helping you book a car, resolving an issue, or answering your queries, our support team is available 14 hours a day to ensure a smooth and worry-free experience. We value your time and strive to provide quick and effective solutions to make your car rental journey as effortless as possible.
                </p>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap mb-2 gap-2">
                    <img src="./public/lib/images/Home.png" class="max-w-[32px] max-h-[32px]">
                    <p class="font-bold text-2xl">Flexible Booking Options</p>
                </div>
                <p>
                    We understand that flexibility is key when it comes to travel plans. That's why we offer a variety of booking options to cater to your specific needs. Choose from hourly, daily, or weekly rental plans with the ability to modify or cancel bookings hassle-free. With an easy-to-use online platform, you can browse our fleet, compare rates, and book the perfect car in just a few clicks. Whether it’s a last-minute trip or a planned journey, we've got you covered.
                </p>
            </div>
        </div>
    </div>
    
</body>
<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });
</script>
<script src="./public/lib/js/script.js"></script>
</html>