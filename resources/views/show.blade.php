<style>
    .tag a {
    display: inline-block;
    margin-bottom: 10px;
    margin-left: 10px;
    box-shadow: inset 0 0 0 1px rgba(54,164,113,.6);
    padding: 6px 15px 6px 15px;
    border-radius: 5px;
}
</style>
@extends('layouts.main')

@section('content')
    <div class="music-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/dark-side.jpg" alt="Pink Floyd - The Dark Side of the Moon" class="w-96">
            <div class="md:ml-24">
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

    <div class="tracklist border-b border-gray-800 ">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Tracklist</h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-8 mt-8">
                <table class="w-full text-left rtl:text-right">
                    <thead class="sr-only">
                        <th>Track number</th>
                        <th>Track name</th>
                        <th>Duration</th>
                        <th>Loved</th>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white ">1</td>
                            <td>Speak to Me</td>
                            <td class="text-gray-400">3:32</td>
                            <td>                                       
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                           
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">2</td>
                            <td>Breathe (In the Air)</td>
                            <td class="text-gray-400">2:50</td>
                            <td>
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">3</td>
                            <td>On the Run</td>
                            <td class="text-gray-400">5:08</td>
                            <td>                                       
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                           
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">4</td>
                            <td>Time</td>
                            <td class="text-gray-400">6:34</td>
                            <td>
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">5</td>
                            <td>The Great Gig in the Sky</td>
                            <td class="text-gray-400">6:27</td>
                            <td>                                       
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                           
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">6</td>
                            <td>Money</td>
                            <td class="text-gray-400">10:23</td>
                            <td>
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">7</td>
                            <td>Us and Them</td>
                            <td class="text-gray-400">8:00</td>
                            <td>                                       
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                           
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">8</td>
                            <td>Any Colour You Like</td>
                            <td class="text-gray-400">9:53</td>
                            <td>
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">9</td>
                            <td>Brain Damage</td>
                            <td class="text-gray-400">3:39</td>
                            <td>                                       
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                           
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 font-medium text-gray-400 whitespace-nowrap dark:text-white">10</td>
                            <td>Eclipse</td>
                            <td class="text-gray-400">1:30</td>
                            <td>
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- end music tracklist --> 

    <div class="similar-albums">
        <div class="container mx-auto px-4 py-16">
            <h3 class="text-4xl font-semibold">Similar Albums</h3>
        </div>
    </div>
@endsection