<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'userHead.php'?>    
</head>
<body>
    <?php require 'userNav.php'?>
    <div class="w-full h-full backdrop-blur-sm sticky mt-16">
        <h1 class="pt-2 text-4xl font-bold text-center" >ABOUT US</h1>
        <p class="text-center font-bold" >RideHub: Your One-Stop Car Rental Service Provider in Cebu City, Philippines.</p>

        <div class=" flex flex-wrap justify-center gap-4 items-center px-[15%] mt-10">
            <img class="h-[198px] w-[504px]" src="./public/lib/images/a1.png">
            <p class="flex-1 text-[18px]">In RideHub, we aim to be the leading Car Rental Companyoffering brand new
                cars for rent in the most affordable prices in the market.Enjoy one of a kind car
                rental service including transfer services, car hire, self-driven, bridal services,long
                and short term leases and more.Each trip you can have the chance to build new
                and perhaps long lasting relationship. So let Anis Transport join you in this journey
                and provide you with an experience that is in many ways….BEYOND DRIVING.</p>
        </div>
        <div class=" flex flex-wrap justify-center gap-4 items-center px-[15%] mt-10">            
            <p class="flex-1 text-[18px]">With its sound experience and through understanding of customers' needs and expectations,
                RideHub is committed to offering the best possible one-stop personal service.
                We offer the ultimate value-for-money solutions to meet all your motoring needs.</p>
            <img class="h-[211px] w-[434.46px]" src="./public/lib/images/a2.png">
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