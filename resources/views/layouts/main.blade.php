<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music App</title>

    @vite('resources/css/main.css')

</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li><a href="#">
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg width="35px" height="35px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M918.3 74.7c-13.3-11.2-30.8-15.9-47.9-12.8l-503.3 88.8c-28.1 5-48.5 29.3-48.5 57.8v500.8c-24.9-21.2-57.1-34.1-92.3-34.1-78.6 0-142.6 64-142.6 142.6s64 142.6 142.6 142.6 142.6-64 142.6-142.6V369.2L889 277.4v331.2c-24.9-21.2-57.1-34.1-92.3-34.1-78.6 0-142.6 64-142.6 142.6s64 142.6 142.6 142.6 142.6-64 142.6-142.6V119.7c0-17.4-7.6-33.8-21-45zM226.3 910c-50.9 0-92.3-41.4-92.3-92.3s41.4-92.3 92.3-92.3 92.3 41.4 92.3 92.3-41.4 92.3-92.3 92.3z m142.6-591.9V208.5c0-4.1 2.9-7.6 6.9-8.3l503.3-88.8c3.4-0.5 5.7 0.9 6.8 1.9 1.1 0.9 3 3 3 6.4v106.7l-520 91.7z m427.8 491.3c-50.9 0-92.3-41.4-92.3-92.3s41.4-92.3 92.3-92.3 92.3 41.4 92.3 92.3-41.4 92.3-92.3 92.3z" fill="#3CB87F" />
                        </svg>
                    </a></li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Albums</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Artists</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Genres</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1
                    focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-1 ml-2.5" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50"
                            style="fill:#FFFFFF;">
                            <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
                        </svg>

                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                <a href="#">
                <svg width="35" height="35" viewBox="0 0 25 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.4337 6.35C16.4337 8.74 14.4937 10.69 12.0937 10.69L12.0837 10.68C9.69365 10.68 7.74365 8.73 7.74365 6.34C7.74365 3.95 9.70365 2 12.0937 2C14.4837 2 16.4337 3.96 16.4337 6.35ZM14.9337 6.34C14.9337 4.78 13.6637 3.5 12.0937 3.5C10.5337 3.5 9.25365 4.78 9.25365 6.34C9.25365 7.9 10.5337 9.18 12.0937 9.18C13.6537 9.18 14.9337 7.9 14.9337 6.34Z" fill="#ffffff"/>
<path d="M12.0235 12.1895C14.6935 12.1895 16.7835 12.9395 18.2335 14.4195V14.4095C20.2801 16.4956 20.2739 19.2563 20.2735 19.4344L20.2735 19.4395C20.2635 19.8495 19.9335 20.1795 19.5235 20.1795H19.5135C19.0935 20.1695 18.7735 19.8295 18.7735 19.4195C18.7735 19.3695 18.7735 17.0895 17.1535 15.4495C15.9935 14.2795 14.2635 13.6795 12.0235 13.6795C9.78346 13.6795 8.05346 14.2795 6.89346 15.4495C5.27346 17.0995 5.27346 19.3995 5.27346 19.4195C5.27346 19.8295 4.94346 20.1795 4.53346 20.1795C4.17346 20.1995 3.77346 19.8595 3.77346 19.4495L3.77345 19.4448C3.77305 19.2771 3.76646 16.506 5.81346 14.4195C7.26346 12.9395 9.35346 12.1895 12.0235 12.1895Z" fill="#ffffff"/>
</svg>
                </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>