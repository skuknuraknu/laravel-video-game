<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Video game App</title>
	@vite('resources/css/app.css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-900 text-white">
	<header class="border-b border-gray-800">
		<nav class="container mx-auto flex items-center justify-between px-4 py-6">
			<div class="flex items-center">
				<a href="/">
					<img src="" alt="Home" class="w-32 flex-none">
				</a>
				<ul class="flex space-x-8">
					<li><a href="#" class="hover:text-gray-400">Games</a></li>
					<li><a href="#" class="hover:text-gray-400">Reviews</a></li>
					<li><a href="#" class="hover:text-gray-400">Coming soon</a></li>
				</ul>
			</div>
			<div class="flex items-center">
				<div class="relative">
					<input type="text" class="pl-8 bg-gray-800 text-sm rounded-full w-64 px-3 py-1 focus:outline-none focus:shadow-outline" placeholder="Search....">
					<div class="absolute top-0 flex items-center h-full ml-2">
						<i class="fill-current text-gray-400 w-2 fa-solid fa-magnifying-glass"></i>
					</div>
				</div>
				<div class="ml-6">
					<a href="#"><img src="" alt="user" class="rounded-full w-8"></a>
				</div>
			</div>
		</nav>
	</header>

	<main class="py-8">
		@yield("content")
	</main>

	<footer class="border-t border-gray-800">
		<div class="container mx-auto px-4 py-6">
			Created with ❤️ by Hae
		</div>
	</footer>
</body>
</html>