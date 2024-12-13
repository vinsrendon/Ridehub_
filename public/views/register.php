<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'userHead.php'?>
</head>
<body class="h-screen bg-[url('./public/lib/images/toyota-cars.jpg')] bg-cover bg-no-repeat bg-center"> 
    <?php require 'userNav.php'?>
    
    <div class="flex justify-center">
        <div class="hidden lg:flex lg:flex-1">
        </div>
        <div class="flex-1">
            <div class="flex justify-center mt-8">
                <div class="mt-12 shadow-lg rounded-lg p-8 w-full max-w-md backdrop-blur bg-gradient-to-b from-slate-200 to-transparent">
                  <h2 class="text-2xl font-bold mb-6 text-center">Create an Account</h2>
                  <form>
                    <div class="mb-10">
                      <input type="email" id="email" placeholder="Email Address" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" required>
                    </div>
                    <div class="mb-10">
                      <input type="password" id="password" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" required>
                    </div>
                    <div class="mb-12">
                      <input type="password" id="confirm-password" placeholder="Confirm Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" required>
                    </div>
                    <div class="columns-2">
                        <button type="submit" class="font-bold w-full bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-800">
                            REGISTER
                        </button>
                        <button type="button" class="font-bold w-full bg-white py-2 px-4 rounded-full hover:bg-slate-300">
                            SIGN IN
                        </button>
                    </div>
                    
                  </form>
                  <div class="flex gap-2 mt-4 columns-2">
                    <input type="checkbox">
                    <p class="text-white">By registering your details, you agree with our Terms & Conditions, and Privacy and Policy.</p>
                  </div>
                </div>
              </div>              
        </div>              
    </div>
    <footer class="flex justify-center mt-24">
        <div class="hidden lg:flex lg:flex-1">
        </div>
        <div class="flex-1">     
            <p class="text-white"> 
                <a class="cursor-pointer mx-4 text-lg md:text-3xl font-bold hover:underline">Facebook</a> | 
                <a class="cursor-pointer mx-4 text-lg md:text-3xl font-bold hover:underline">Instagram</a> | 
                <a class="cursor-pointer mx-4 text-lg md:text-3xl font-bold hover:underline">Google</a>
            </p>
        </div>             
    </footer>  
</body>
<script src="./public/lib/js/script.js"></script>
</html>
