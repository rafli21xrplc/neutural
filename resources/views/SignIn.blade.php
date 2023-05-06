<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="./leaf.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&family=Open+Sans:wght@300;400&family=Poppins:wght@100;400;500&display=swap"
        rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body class="">


    <!-- component -->
    <div
        class="bg-emerald-800 absolute top-0 left-0 bg-gradient-to-b from-emerald-950 via-emerald-900 to-emerald-800 bottom-0 leading-5 h-full w-full overflow-hidden">
    </div>
    <div class="bg-no-repeat bg-cover bg-center relative"
        style="background-image: url(https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80);">
        <div class="absolute bg-gradient-to-b from-green-500 to-green-400 opacity-75 inset-0 z-0"></div>
        <div class="relative   min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent rounded-3xl shadow-xl">
            <div class="flex-col flex  self-center lg:px-14 sm:max-w-4xl xl:max-w-md  z-10">
                <div class="self-start hidden lg:flex flex-col  text-gray-300">
                    <h1 class="my-3 font-semibold text-4xl">Welcome back</h1>
                    <p class="pr-3 text-sm opacity-75">Lorem ipsum is placeholder text commonly used in the graphic,
                        print,
                        and publishing industries for previewing layouts and visual mockups</p>
                </div>
            </div>
            <div class="flex justify-center self-center  z-10">
                <div class="p-12 bg-white mx-auto rounded-3xl w-96 ">
                    <form action="/SignIn" method="post">
                        @csrf
                        @if (session()->has('message'))
                            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium">{{ session('message') }}</span>
                                </div>
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"> {{ session('error') }}</span>
                                </div>
                            </div>
                        @endif
                        @csrf
                        <div class="mb-7">
                            <h3 class="font-semibold text-2xl text-gray-800">Sign In </h3>
                            <p class="text-gray-400">Don'thave an account? <a href="/SignUp"
                                    class="text-sm text-emerald-700 hover:text-emerald-700">Sign Up</a></p>
                        </div>
                        <div class="space-y-6">
                            <div class="">
                                <input
                                    class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-emerald-400"
                                    type="" placeholder="Email" name="email" required>
                            </div>

                            <div class="relative" x-data="{ show: true }">
                                <input required name="password" placeholder="Password"
                                    :type="show ? 'password' : 'text'"
                                    class="text-sm text-gray-900 px-4 py-3 rounded-lg w-full bg-gray-200 focus:bg-gray-100 border border-gray-200 focus:outline-none focus:border-emerald-400">
                                <div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">

                                    <svg @click="show = !show" :class="{ 'hidden': !show, 'block': show }"
                                        class="h-4 text-emerald-700" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                        </path>
                                    </svg>

                                    <svg @click="show = !show" :class="{ 'block': !show, 'hidden': show }"
                                        class="h-4 text-emerald-700" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512">
                                        <path fill="currentColor"
                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                        </path>
                                    </svg>

                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center bg-emerald-800  hover:bg-emerald-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                                    Sign in
                                </button>
                            </div>
                    </form>
                </div>
                <div class="mt-7 text-center text-gray-300 text-xs">
                    <span>
                        Copyright © 2021-2023</span>
                </div>
            </div>
        </div>
    </div>
    </div>

    <svg class="absolute bottom-0 left-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
            d="M0,0L40,42.7C80,85,160,171,240,197.3C320,224,400,192,480,154.7C560,117,640,75,720,74.7C800,75,880,117,960,154.7C1040,192,1120,224,1200,213.3C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
