@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="popular-music">
            <h2 class="uppercase tracking-wide text-green-500 text-lg font-semibold">Popular Music</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src='/img/dark-side.jpg' alt="Timeless" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">The Dark Side of the Moon</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Pink Floyd</span>
                            <span class="mx-2">|</span>
                            <span>2024</span>
                        </div>
                        <div class="text-gray-400">
                        Rock
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src='/img/timeless.jpg' alt="Timeless" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Timeless</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>The Weeknd & Playboi Carti</span>
                            <span class="mx-2">|</span>
                            <span>2024</span>
                        </div>
                        <div class="text-gray-400">
                        Electronic, Hip Hop, Funk / Soul, Pop
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>
@endsection

