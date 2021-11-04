<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>shad0wBlog</title>
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>

	</head>
  
	<body class="flex flex-col min-h-screen">
   
 <!-- navbar goes here -->
  <nav class="bg-gradient-to-r from-blue-900 via-blue-400 to-blue-900 shadow-xl h-30 fixed top-0 inset-x-0 w-full">
    <div class="max-w-full mx-40 px-4">
      <div class="flex justify-between">
        <div class="flex">
			<div>
			  <!-- logo -->
			  <x-logo/>

          </div>
          <!-- primary nav -->
          <div class="hidden md:flex items-center space-x-1">
				<a href="/" class="my-10 py-2 px-2 font-medium text-white rounded hover:bg-red-600 hover:text-white transition duration-300"">Home</a>
				<ul class="flex justify-between ">
					<li class="ml-52 place-self-center"><a href="#Sport" class="ml-3 py-2 px-10 font-medium text-white rounded hover:bg-red-600 hover:text-white transition duration-300">Sport News</a></li>
					<li class="place-self-center"><a href="#Politic" class="ml-3 py-2 px-10 font-medium text-white rounded hover:bg-red-600 hover:text-white transition duration-300">Politic News</a></li>
					<li class="place-self-center"><a href="#Tech" class="ml-3 py-2 px-10 font-medium text-white rounded hover:bg-red-600 hover:text-white transition duration-300">Tech News</a></li>
					<li class="place-self-center"><a href="#Positiv" class="ml-3 py-2 px-10 font-medium text-white rounded hover:bg-red-600 hover:text-white transition duration-300">Positiv News</a></li>
				</ul>
          </div>
        </div>
        <!-- secondary nav -->
        <div class="hidden md:flex items-center space-x-1">
      		<a href="{{ route('login') }}" class="py-2 px-2 font-medium text-white rounded hover:bg-red-600 hover:text-white transition duration-300">Log In</a>
			<a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white rounded hover:bg-red-600 hover:text-white transition duration-300">Sign Up</a>
        </div>

        <!-- mobile button goes here -->
        <div class="md:hidden flex items-center">
          <button class="mobile-menu-button">
            <svg class="w-40 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- mobile menu -->
    	<div class="mobile-menu hidden md:hidden">
            <ul class="text-center">
			<a href="/" class="block text-sm px-2 py-4 text-white rounded hover:bg-red-600 hover:text-white transition duration-300"">Home</a></li>
				<li><a href="#Sport" class="block text-sm px-2 py-4 text-white rounded hover:bg-red-600 hover:text-red-600 transition duration-300">Sport News</a></li>
				<li><a href="#Politic" class="block text-sm px-2 py-4 text-white rounded hover:bg-red-600 hover:text-red-600 transition duration-300">Politic News</a></li>
				<li><a href="#Tech" class="block text-sm px-2 py-4 text-white rounded hover:bg-red-600 hover:text-red-600 transition duration-300">Tech News</a></li>
				<li><a href="#Positiv" class="block text-sm px-2 py-4 text-white rounded hover:bg-red-600 hover:text-red-600 transition duration-300">Positiv News</a></li>
				<!-- <li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 text-white hover:bg-red-900 transition duration-300">Log In</a></li>
				<li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 text-white hover:bg-red-900 transition duration-300">Sign Up</a></li> -->
			</ul>
		</div>
	</nav>
      
      
      
			<script>
				let btn = document.querySelector("button.mobile-menu-button");
				let menu = document.querySelector("div.mobile-menu");

				btn = addEventListener("click", () => {
				menu.classList.toggle("hidden");
				});
		    </script>

	



        <!--Blog Section-->
    
		<main>
            <div class="backgroundImage sm:h-vh-90 bg-origin-content h-96 drop-shadow-2xl">
               
			
            
            </div>
			
            <x-blog/>
        </main>


    <x-footer/>
    
</body>
</html>