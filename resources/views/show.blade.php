<style>
    .tag a {
    display: inline-block;
    margin-bottom: 10px;
    margin-left: 10px;
    box-shadow: inset 0 0 0 1px rgba(54,164,113,.6);
    padding: 6px 15px 6px 15px;
}
</style>
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

                <div class="row mt-12">
                    <div class="col-sm-8">
                        <section class="block box-border -ml-[10px]">
                            <ul class="inline-block tracking-wider tag">
                                <li class="inline-block">
                                    <a href="/ru/tag/progressive+rock">progressive rock</a>
                                </li>
                                <li class="inline-block">
                                    <a href="/ru/tag/progressive+rock">rock</a>
                                </li>
                                <li class="inline-block">
                                    <a href="/ru/tag/progressive+rock">prog</a>
                                </li>
                                <li class="inline-block">
                                    <a href="/ru/tag/progressive+rock">classic rock</a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                
            </div>
        </div>

    </div><!-- end music info -->
@endsection