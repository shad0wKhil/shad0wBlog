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
	<body>
		<!-- Navbar goes here -->
  
		<nav class="bg-gray-250 shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
                <x-logo/>
						</div>
						<!-- Primary Navbar items -->
						<div class=" md:flex items-center space-x-2">
							<a href="/" class="py-4 px-2 text-red-500 border-b-4 border-red-500 font-semibold ">Home</a>
							<a href="/blog" class="py-4 px-2 text-black font-semibold hover:text-red-500 transition duration-300">Blog</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="md:flex items-center space-x-3 ">
						<a href="{{ route('login') }}" class="py-2 px-2 font-medium text-black rounded hover:bg-red-500 hover:text-black transition duration-300">Log In</a>
						<a href="{{ route('register') }}" class="py-2 px-2 font-medium text-black bg-red-500 rounded hover:bg-red-400 transition duration-300">Sign Up</a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-black hover:text-red-500 "
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
					<li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-black bg-red-500 font-semibold">Home</a></li>
					<li><a href="#Blog" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Blog</a></li>
						<li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Log In</a></li>
						<li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Sign Up</a></li>
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
		<h1 class="text-black text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4">BLOG PAGE</h1>
    <x-footer/>
	</body>
</html>