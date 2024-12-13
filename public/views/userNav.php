<nav class="fixed top-0 bg-gray-800 p-2 w-full z-50 text-xl" >
        <div class="hidden lg:flex flex justify-between items-center">
            <div class="flex space-x-4">
                <img src="./public/lib/images/logo.png" width="50px" height="50px">
                <img src="./public/lib/images/RideHubTransport.png" >
            </div>
            <div class="mr-32">
                <a href="/" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Home</a>
                <button id="dropdownButton" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">About</button>     
                    <div id="dropdownMenu" class="hidden absolute ml-32 mt-2 w-48 bg-white border border-gray-200 rounded shadow-lg z-10">
                        <a href="/about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About us</a>
                        <a href="/blogs" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Blogs</a>
                        <a href="/policy" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Privacy policy</a>
                        <a href="/terms" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Terms</a>
                    </div>           
                <a href="" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Fleet</a>                
                <a href="/contact" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Contact</a>                
                <a href="" class="text-white text-2xl hover:bg-gray-700 px-7 py-2 rounded">Reservation</a>                
            </div>         
        </div>
        <button class="lg:hidden flex items-center text-white focus:outline-none" onclick="toggleMenu()">
            <svg class="w-7 h-7 my-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div id="mobileMenu" class="hidden lg:hidden">
            <a href="/" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Home</a>
            <a href="/about" class="block px-3 py-2 text-white hover:bg-gray-100">About us</a>
            <a href="/blogs" class="block px-3 py-2 text-white hover:bg-gray-100">Blogs</a>
            <a href="/policy" class="block px-3 py-2 text-white hover:bg-gray-100">Privacy policy</a>
            <a href="/terms" class="block px-3 py-2 text-white hover:bg-gray-100">Terms</a>  
            <a href="" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Fleet</a>
            <a href="/contact" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Contact</a>
            <a href="" class="block text-white text-lg hover:bg-gray-700 px-3 py-2 rounded">Reservation</a>
        </div>
    </nav>