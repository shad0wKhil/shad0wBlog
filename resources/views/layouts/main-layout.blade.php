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
  
	<body class="flex flex-col min-h-screen bg-transparent">
   
		<!-- Navbar goes here -->
		<nav :class="{ 'scrolled': !view.atTopOfPage }" class="fixed flex w-full border-b items-center justify-between flex-wrap p-0 m-auto top-0 animated bg-gradient-to-r from-blue-400 via-blue-600 to-blue-800 shadow-xl">
            <div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
                <div class="flex space-x-7 w-full">
            <div>
							
            <!-- Website Logo -->
              <x-logo/>
            </div>
            
            <!-- Primary Navbar items -->
			<div class="hidden md:flex  w-full place-items-center justify-between">
				<div class="text-center">
					<a href="/" class="py-2 px-2 font-medium text-white rounded hover:bg-yellow-600 hover:text-white transition duration-300"">Home</a>
					<a href="#blog" class="ml-3 py-2 px-2 font-medium text-white rounded hover:bg-yellow-600 hover:text-white transition duration-300">Blog</a>
				</div>
                
                <!-- Secondary Navbar items -->
				<div class="flex-reverse">
					<a href="{{ route('login') }}" class="py-2 px-2 font-medium text-white rounded hover:bg-yellow-600 hover:text-white transition duration-300">Log In</a>
					<a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white hover:bg-yellow-600 hover:text-white transition duration-300">Sign Up</a>
				</div>
			</div>

					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center w-full justify-end">
						<button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-white"
                                x-show="!showMenu"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
					    </button>
                     </div>
                    </div>
                </div>

			    <!-- mobile menu -->
			    <div class="hidden mobile-menu">
                    <ul class="text-center">
                        <li class="active"><a href="/" class="block text-sm px-2 py-4 text-white hover:bg-red-900 font-semibold">Home</a></li>
                        <li><a href="/blog" class="block text-sm px-2 py-4 text-white hover:bg-red-900 transition duration-300">Blog</a></li>
						<li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 text-white hover:bg-red-900 transition duration-300">Log In</a></li>
						<li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 text-white hover:bg-red-900 transition duration-300">Sign Up</a></li>
				    </ul>
			    </div>
      
      
      
			<script>
                const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");
        
				btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
				});
		    </script>

		</nav>



        <!--Blog Section-->
    
		<main>
            <div class="backgroundImage sm:h-vh-90 bg-origin-content h-96 drop-shadow-2xl">
               
			
            
            </div>
            <x-blog/>
        </main>


    <x-footer/>
    
</body>
</html>