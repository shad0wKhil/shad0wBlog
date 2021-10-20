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
	<body class="flex flex-col min-h-screen bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 ...">
		<!-- Navbar goes here -->
  
		<nav class="bg-black shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
                <x-logo/>
						</div>
						<!-- Primary Navbar items -->
						<div class=" md:flex items-center space-x-2">
							<a href="/" class="py-2 px-2 font-medium text-white rounded hover:bg-red-500 hover:text-white transition duration-300"">Home</a>
							<a href="/blog" class="py-2 px-2 font-medium text-white rounded hover:bg-red-500 hover:text-white transition duration-300">Blog</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="md:flex items-center space-x-3 ">
						<a href="{{ route('login') }}" class="py-2 px-2 font-medium text-white rounded hover:bg-red-500 hover:text-white transition duration-300">Log In</a>
						<a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white hover:bg-red-500 hover:text-white transition duration-300">Sign Up</a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-white hover:text-red-500 hover:bg-red-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="/" class="block text-sm px-2 py-4 text-white hover:bg-red-500 font-semibold">Home</a></li>
					<li><a href="/blog" class="block text-sm px-2 py-4 text-white hover:bg-red-500 transition duration-300">Blog</a></li>
						<li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 text-white hover:bg-red-500 transition duration-300">Log In</a></li>
						<li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 text-white hover:bg-red-500 transition duration-300">Sign Up</a></li>
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

        <h1 class="text-red-800 text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4">BLOG PAGE</h1>
        



   <section class="py-12">
        <div class="container mx-auto">
            <div class="flex flex-wrap px-6">
                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                    <div class="bg-black hover:shadow-xl">
                        <div class="">
                            <img src="https://images.pexels.com/photos/956999/milky-way-starry-sky-night-sky-star-956999.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""
                                class="h-56 w-full border-black border-8 hover:opacity-25">
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg text-white">
                                UI,UX Concepts
                            </h1>
                            <p class="py-4 text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                voluptate
                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                distinctio
                                perferendis tempore nemo sequi eos accusantium.
                            </p>
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium text-white">
                                    NOVEMBER 1,2019
                                </div>
                                <div class="2/3">
                                    <div class="text-sm font-medium text-white">
                                        SHARE:
                                        <a href="" class="text-white px-1 ">
                                            FACEBOOk
                                        </a>
                                        <a href="" class="text-white px-1 ">
                                            TWITTER
                                        </a>
                                        <a href="" class="text-white px-1 ">
                                            GOOGLE+
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2  md:px-4 lg:px-6 py-5">
                    <div class="bg-white hover:shadow-xl">
                        <div class="">
                            <img src="https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt=""
                                class="h-56 w-full border-white border-8 hover:opacity-25">
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg">
                                UI,UX Concepts
                            </h1>
                            <p class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                voluptate
                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                distinctio
                                perferendis tempore nemo sequi eos accusantium.
                            </p>
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium">
                                    NOVEMBER 1,2019
                                </div>
                                <div class="md:2/3">
                                    <div class="text-sm font-medium">
                                        SHARE:
                                        <a href="" class="text-blue-700 px-1 ">
                                            FACEBOOk
                                        </a>
                                        <a href="" class="text-blue-500 px-1 ">
                                            TWITTER
                                        </a>
                                        <a href="" class="text-red-600 px-1 ">
                                            GOOGLE+
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2  md:px-4 lg:px-6 py-5">
                    <div class="bg-white hover:shadow-xl">
                        <div class="">
                            <img src="https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt=""
                                class="h-56 w-full border-white border-8 hover:opacity-25">
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg">
                                UI,UX Concepts
                            </h1>
                            <p class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                voluptate
                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                distinctio
                                perferendis tempore nemo sequi eos accusantium.
                            </p>
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium">
                                    NOVEMBER 1,2019
                                </div>
                                <div class="md:2/3">
                                    <div class="text-sm font-medium">
                                        SHARE:
                                        <a href="" class="text-blue-700 px-1 ">
                                            FACEBOOk
                                        </a>
                                        <a href="" class="text-blue-500 px-1 ">
                                            TWITTER
                                        </a>
                                        <a href="" class="text-red-600 px-1 ">
                                            GOOGLE+
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2  md:px-4 lg:px-6 py-5">
                    <div class="bg-white hover:shadow-xl">
                        <div class="">
                            <img src="https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt=""
                                class="h-56 w-full border-white border-8 hover:opacity-25">
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg">
                                UI,UX Concepts
                            </h1>
                            <p class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                voluptate
                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                distinctio
                                perferendis tempore nemo sequi eos accusantium.
                            </p>
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium">
                                    NOVEMBER 1,2019
                                </div>
                                <div class="md:2/3">
                                    <div class="text-sm font-medium">
                                        SHARE:
                                        <a href="" class="text-blue-700 px-1 ">
                                            FACEBOOk
                                        </a>
                                        <a href="" class="text-blue-500 px-1 ">
                                            TWITTER
                                        </a>
                                        <a href="" class="text-red-600 px-1 ">
                                            GOOGLE+
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


        <x-footer/>
	</body>
</html>