<div wire:init="loadRecentlyView" class="flex flex-col lg:flex-row my-10">
    <div class="recently-viewed w-full lg:w-3/4 mr-0 lg:mr-32">
        <h2 class="text-blue-500 tracking-wide uppercase font-semibold">RECENTLY VIEWED</h2>
            <div class="recently-viewed-container space-y-12 mt-8">
                @foreach($recently_view as $item)
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#"><img src="{{ $item['cover'] ? Str::replaceFirst('thumb', 'cover_big', $item['cover']['url']) : 'https://www.arthipo.com/image/cache/catalog/genel-tasarim/all-posters/oyun/PSTER-oyun04-bioschock-infinite-1000x1000.jpg' }}" alt="game cover" 
                            class="w-20 lg:w-48 hover:opacity-75 transition ease-in-out duration-150"></a>
                        </div>
                        <div class="ml-6">
                            <a href="#" class="block text font-semibold leading-tight hover:text-gray-400 mt:0 lg:mt-4">
                                {{ $item['name'] }}
                            </a>
                            <div class="text-gray-400 mt-1">PC</div>
                            <p class="mt-3 tracking-wide hidden lg:block text-justify">{{ $item['summary'] }}</p>
                        </div>
                    </div>
                    @endforeach
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