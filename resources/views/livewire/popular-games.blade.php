<div wire:init="loadIgdbListGame" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 grid-cols-6 pb-16 gap-12 border-b border-gray-800">
    @forelse($igdb as $item)
    <div class="game mt-8">
        <div class="relative inline-block">
            <a href="{{ route('games.show', [$item['slug']]) }}"><img src="{{ $item['cover'] ? Str::replaceFirst('thumb', 'cover_big', $item['cover']['url']) : 'https://www.arthipo.com/image/cache/catalog/genel-tasarim/all-posters/oyun/PSTER-oyun04-bioschock-infinite-1000x1000.jpg' }}" alt="game cover" 
                    class="h-[250px] hover:opacity-75 transition ease-in-out duration-150"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full right-[-20px] bottom-[-20px]">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        {{ round($item['rating']).'%' }}
                    </div>
                </div>
             </div>
            <a href="#" class="block text font-semibold leading-tight hover:text-gray-400 mt-4">
                {{ $item['name'] }}
            </a>
            <div class="text-gray-400 mt-1">
                PC
            </div>
        </div>
        @empty
            @foreach(range(1,12) as $game)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <div class="bg-gray-800 w-44 h-56"></div>
                </div>
                <div class="font-semibold text-transparent w-44 rounded bg-gray-700 mt-4">
                    Bla bla
                </div>
                <div class="text-transparent bg-gray-700 w-44 rounded mt-1">
                    PC
                </div>
            </div>
            @endforeach
        @endforelse
    </div>