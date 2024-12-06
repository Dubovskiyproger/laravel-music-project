@extends('layouts.main')

@section('content')
    <div class="music-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="/img/dark-side.jpg" alt="Pink Floyd - The Dark Side of the Moon" class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">The Dark Side of the Moon</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span>Pink Floyd</span>
                    <span class="mx-2">|</span>
                    <span>Rock</span>
                </div>

                <p class="text-grat-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quas, 
                    nostrum perferendis, odit maiores quod mollitia expedita sit iusto 
                    magnam eaque repellat dolorum molestias doloremque voluptatum provident 
                    commodi facere esse.
                </p>

                <div class="mt-12">
                    <div>Duration: <span class="text-gray-400">10 tracks, 62:00</span></div>
                    <div class="mt-2">Release date: <span class="text-gray-400">1 March 1973</span></div>
                </div>
                
            </div>
        </div>

    </div><!-- end music info-->
@endsection