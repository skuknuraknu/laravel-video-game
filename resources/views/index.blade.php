@extends("layouts.app")
@section("content")
	<div class="container mx-auto px-4">
		<h2 class="text-blue-400 tracking-wide font-semibold">Popular Games</h2>
		<div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 grid-cols-6 pb-16 gap-12 border-b border-gray-800">
			<div class="game mt-8">
				<div class="relative inline-block">
					<a href="#"><img src="https://cdn.europosters.eu/image/750/posters/guardins-of-the-galaxy-video-game-i122525.jpg" alt="game cover" 
					class="h-[250px] hover:opacity-75 transition ease-in-out duration-150"></a>
					<div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full right-[-20px] bottom-[-20px]">
						<div class="font-semibold text-xs flex justify-center items-center h-full">
							80
						</div>
					</div>
				</div>
				<a href="#" class="block text font-semibold leading-tight hover:text-gray-400 mt-4">
					The Guardians of the Galaxy
				</a>
				<div class="text-gray-400 mt-1">Playstation 4</div>
			</div>
			<div class="game mt-8">
				<div class="relative inline-block">
					<a href="#"><img src="https://files.ekmcdn.com/6d7106/images/player-unknown-s-pub-g-battlegrounds-game-poster-1700-p.jpg" alt="game cover" class="h-[250px] hover:opacity-75 transition ease-in-out duration-150"></a>
					<div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full right-[-20px] bottom-[-20px]">
						<div class="font-semibold text-xs flex justify-center items-center h-full">
							80
						</div>
					</div>
				</div>
				<a href="#" class="block text font-semibold leading-tight hover:text-gray-400 mt-4">
					PUBG
				</a>
				<div class="text-gray-400 mt-1">Playstation 4</div>
			</div>
		</div>
		{{-- Recently viewed --}}
		<div class="flex flex-col lg:flex-row my-10">
			<div class="recently-viewed w-full lg:w-3/4 mr-0 lg:mr-32">
				<h2 class="text-blue-500 tracking-wide uppercase font-semibold">RECENTLY VIEWED</h2>
				<div class="recently-viewed-container space-y-12 mt-8">
					<div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
						<div class="relative flex-none">
							<a href="#"><img src="https://cdn.europosters.eu/image/750/posters/guardins-of-the-galaxy-video-game-i122525.jpg" alt="game cover" 
							class="w-20 lg:w-48 hover:opacity-75 transition ease-in-out duration-150"></a>
						</div>
						<div class="ml-6">
							<a href="#" class="block text font-semibold leading-tight hover:text-gray-400 mt:0 lg:mt-4">
								The Guardians of the Galaxy
							</a>
							<div class="text-gray-400 mt-1">Playstation 4</div>
							<p class="mt-3 tracking-wide hidden lg:block">Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Enim facere vitae fugiat illo, architecto repellendus, accusantium possimus optio in, iste consequatur natus iusto voluptatum quae perspiciatis, earum. Quos, impedit, expedita.</p>
						</div>
					</div>
				</div>
			</div>
			{{-- Most anticipated & Coming soon--}}
			<div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
				<h2 class="text-blue-500 tracking-wide uppercase font-semibold">MOST ANTICIPATED</h2>
				<div class="most-anticipated-container space-y-12 mt-8">
					<div class="game flex">
						<a href="#"><img src="https://cdn.europosters.eu/image/750/posters/guardins-of-the-galaxy-video-game-i122525.jpg" alt="game cover" 
							class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
						<div class="pl-2">
							<a href="#" class="hover:text-gray-300">The Guardians of the Galaxy</a>
							<div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
						</div>
					</div>
				</div>
				<h2 class="text-blue-500 tracking-wide uppercase font-semibold mt-16">COMING SOON</h2>
				<div class="most-anticipated-container space-y-12 mt-8">
					<div class="game flex">
						<a href="#"><img src="https://cdn.europosters.eu/image/750/posters/guardins-of-the-galaxy-video-game-i122525.jpg" alt="game cover" 
							class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
						<div class="pl-2">
							<a href="#" class="hover:text-gray-300">The Guardians of the Galaxy</a>
							<div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div> {{-- End container --}}
@endsection