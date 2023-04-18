@extends("layouts.app")
@section('title') {{ $searched_game['0']->name }} @endsection
@section("content")
	<div class="container mx-auto px-4">
		<div class="border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
			<div class="flex-none">
				<img src="{{ $searched_game['0']['cover'] ? Str::replaceFirst('thumb', 'cover_big', $searched_game['0']['cover']['url']) : 'No images' }}" alt="The Guardians" class="w-64">
			</div>
			<div class="lg:ml-12 lg:mr-64">
				<h2 class="font-semibold text-4xl leading-tight">{{ $searched_game['0']['name'] }}</h2>
				<div class="text-gray-400">
					@foreach($searched_game['0']['genres'] as $genre)
						<span>{{ $genre['name'] }}</span>,
					@endforeach
					&middot
					<span>{{ $searched_game[0]['involved_companies'][0]['company']['name']}}</span>
					&middot
					<span>Playstation 5</span>
				</div>
				<div class="flex flex-wrap items-center mt-3 space-x-3 lg:space-x-6">
					<div class="flex items-center">
						<div class="w-16 h-16 rounded-full bg-gray-800">
							<div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
						</div>
						<div class="ml-4 text-md">Member Score</div>
					</div>
					<div class="flex items-center">
						<div class="w-16 h-16 rounded-full bg-gray-800">
							<div class="font-semibold text-xs flex justify-center items-center h-full">92%</div>
						</div>
						<div class="ml-4 text-md">Critic Score</div>
					</div>
					<div class="flex items-center space-x-2 mt-5">
						<div class="hover:opacity-75 w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center"><i class="fa-brands fa-instagram"></i></div>
						<div class="hover:opacity-75 w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center"><i class="fa-brands fa-facebook"></i></div>
						<div class="hover:opacity-75 w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center"><i class="fa-brands fa-twitter"></i></div>
						
					</div>
				</div>

				<p class="mt-8 tracking-wide text-justify">{{ $searched_game['0']['summary'] }}</p>

				<div class="mt-12">
					<button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
						<span><i class="pr-2 fa-solid fa-play"></i>Play Trailer</span>
					</button>
				</div>
			</div>
		</div>

		<div class="images-container border-b border-gray-800 pb-12 mt-8">
			<h2 class="text-blue-400 tracking-wide font-semibold">Images</h2>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
				<div>
					<img class="h-52 hover:opacity-75 transition ease-in-out duration-150" src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iEUro2HzgsHY/v0/-1x-1.jpg" alt="image-1">
				</div>
				<div>
					<img class="h-52 hover:opacity-75 transition ease-in-out duration-150" src="https://media.gq-magazine.co.uk/photos/617807d7798fc9786e6d6ece/3:2/w_1620,h_1080,c_limit/Guardians%20lead.jpg" alt="image-1">
				</div>
			</div>
		</div>

		<div class="similar-games-container pb-12 mt-8">
			<h2 class="text-blue-400 tracking-wide font-semibold">Similar Games</h2>
			<div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 pb-16 gap-12 border-b border-gray-800">
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
		</div>

	</div>
@endsection