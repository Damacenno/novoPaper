<!DOCTYPE html>
<html lang="pt-br">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaperJobs</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body class="bg-white">
    <nav class="relative bg-white shadow">
        <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="#">
                    <img class="w-auto h-2 sm:h-7" src="assets/paperjobs.png" alt="">
                </a>

                <div class="flex md:hidden lg:hidden">
                    <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 aria-label=" toggle menu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="hidden md:flex absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-2 text-gray-700 transition-colors duration-300 transform hover:text-blue-500 md:mx-4 md:my-0" href="#">Serviços</a>
                    <a class="my-2 text-gray-700 transition-colors duration-300 transform hover:text-blue-500 md:mx-4 md:my-0" href="#">Aviões Paper</a>
                    <a class="my-2 text-gray-700 transition-colors duration-300 transform hover:text-blue-500 md:mx-4 md:my-0" href="#">Suporte</a>
                </div>

                <div class="justify-center md:flex">
                    <a class="items-center flex relative text-gray-700 transition-colors duration-300 transform hover:text-gray-600" href="#">
                        <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5" />
                        </svg>
                        <?php echo $_SESSION['usuario_pontos']; ?>
                    </a>
                </div>

                <div class="ml-8 justify-center md:flex">
                    <a class="items-center flex relative text-gray-700 transition-colors duration-300 transform hover:text-gray-600" href="#">
                        <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        Meu Perfil
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <section class="bg-white">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">Serviços Paper</h1>
            <hr class="mt-4">
            <div class="grid grid-cols-1 gap-8 mt-4 md:grid-cols-4">
                <div class="flex justify-center">
                    <div class="w-80 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                        <div class="p-4">
                            <h2 class="text-xl  font-semibold">Beautiful Card</h2>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ante sit amet tellus ornare tincidunt.</p>
                            <div class="flex justify-between items-center mt-4">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-80 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                        <div class="p-4">
                            <h2 class="text-xl  font-semibold">Beautiful Card</h2>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ante sit amet tellus ornare tincidunt.</p>
                            <div class="flex justify-between items-center mt-4">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-80 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                        <div class="p-4">
                            <h2 class="text-xl  font-semibold">Beautiful Card</h2>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ante sit amet tellus ornare tincidunt.</p>
                            <div class="flex justify-between items-center mt-4">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-80 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                        <div class="p-4">
                            <h2 class="text-xl  font-semibold">Beautiful Card</h2>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ante sit amet tellus ornare tincidunt.</p>
                            <div class="flex justify-between items-center mt-4">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-80 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                        <div class="p-4">
                            <h2 class="text-xl  font-semibold">Beautiful Card</h2>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ante sit amet tellus ornare tincidunt.</p>
                            <div class="flex justify-between items-center mt-4">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-80 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="https://via.placeholder.com/150">
                        <div class="p-4">
                            <h2 class="text-xl  font-semibold">Beautiful Card</h2>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis ante sit amet tellus ornare tincidunt.</p>
                            <div class="flex justify-between items-center mt-4">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="javascript/jquery-3.7.1.min.js"></script>
<script src="javascript/homepage.js"></script>

</html>