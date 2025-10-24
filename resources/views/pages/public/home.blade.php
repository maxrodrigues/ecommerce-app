<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce App</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/fb91899bbd.js" crossorigin="anonymous"></script>
</head>
<body class="bg-background">
    <header class="border-b border-[#e3f0e3] px-10 py-3">
        <div class="container mx-auto max-w-[1040px] flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2 mr-20">
                    <i class="fa-solid fa-font-awesome text-2xl text-primary"></i>
                    <h1 class="text-xl text-gray-600">FreshMart</h1>
                </div>
                <div class="flex space-x-2">
                    <div>
                        <a href="#" class="text-gray-600">Shop</a>
                    </div>
                    <div>
                        <a href="#"class="text-gray-600">Deals</a>
                    </div>
                    <div>
                        <a href="#"class="text-gray-600">Delivery</a>
                    </div>
                    <div>
                        <a href="#"class="text-gray-600">Recipes</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center space-x-5">
                <div class="flex items-center relative">
                    <i class="fa-solid fa-magnifying-glass absolute text-gray-400 px-3"></i>
                    <input
                        type="text"
                        name="search"
                        class="bg-gray-200 rounded-md px-9 py-2 text-gray-700 placeholder:text-gray-400 focus:outline-none text-md"
                        placeholder="Procurar..."
                    />
                </div>
                <div class="flex items-center space-x-5">
                    <div class="space-x-4">
                        <i class="fa-solid fa-heart text-red-700 text-xl"></i>
                        <i class="fa-solid fa-cart-shopping text-xl"></i>
                    </div>
                    <div>
                        <div>
                            <button class="bg-primary px-6 py-2 rounded text-white font-semibold hover:bg-secondary hover:text-primary transition-colors duration-300">
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mx-auto max-w-[1040px] px-10 py-3">
        <main class="my-10">

            <section class="mt-10 rounded-md flex flex-col items-center py-8 bg-[url('https://placehold.co/100x250.webp')] bg-cover bg-no-repeat">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold mb-2">Daily Deals Delivered</h2>
                    <p class="font-light text-sm">Fresh ingredients & amazing prices, straight to you door.</p>
                </div>
                <button class="bg-primary text-white font-semibold px-6 py-2 rounded-md shadow-md hover:bg-secondary hover:text-primary transaction-colors duration-300">Shop All Deals</button>
            </section>

            <section class="mt-10">
                <h2 class="font-bold text-2xl mb-10">Shop by Category</h2>
                <div class="flex justify-between items-center">
                    <div class="flex flex-col items-center space-y-3">
                        <img src="https://placehold.co/90x90.webp" class="rounded-full"/>
                        <span class="font-light text-sm">Fresh Produce</span>
                    </div>
                    <div class="flex flex-col items-center space-y-3">
                        <img src="https://placehold.co/90x90.webp" class="rounded-full"/>
                        <span class="font-light text-sm">Dairy & Eggs</span>
                    </div>
                    <div class="flex flex-col items-center space-y-3">
                        <img src="https://placehold.co/90x90.webp" class="rounded-full"/>
                        <span class="font-light text-sm">Bakery</span>
                    </div>
                    <div class="flex flex-col items-center space-y-3">
                        <img src="https://placehold.co/90x90.webp" class="rounded-full"/>
                        <span class="font-light text-sm">Pantry</span>
                    </div>
                    <div class="flex flex-col items-center space-y-3">
                        <img src="https://placehold.co/90x90.webp" class="rounded-full"/>
                        <span class="font-light text-sm">Frozen</span>
                    </div>
                    <div class="flex flex-col items-center space-y-3">
                        <img src="https://placehold.co/90x90.webp" class="rounded-full"/>
                        <span class="font-light text-sm">Beverages</span>
                    </div>
                </div>
            </section>

            <section class="mt-10 flex justify-between">
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="relative flex">
                        <span class="absolute bg-primary font-bold text-white uppercase text-xs px-3 py-0.5 rounded-xl start-3 top-3">save 20%</span>
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Fresh Barriers Mix</h3>
                        <span class="text-sm">Strawberries, Blueberries, Raspberries</span>
                        <div class="flex justify-between mt-4 mb-1 items-end">
                            <div class="space-x-1">
                                <span class="text-sm line-through">$5.99</span>
                                <span class="font-bold text-primary text-lg">$4.79</span>
                            </div>
                            <div>
                                <button class="bg-secondary rounded-md text-primary px-2 py-1">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="relative flex">
                        <span class="absolute bg-primary font-bold text-white uppercase text-xs px-3 py-0.5 rounded-xl start-3 top-3">save 20%</span>
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Fresh Barriers Mix</h3>
                        <span class="text-sm">Strawberries, Blueberries, Raspberries</span>
                        <div class="flex justify-between mt-4 mb-1 items-end">
                            <div class="space-x-1">
                                <span class="font-bold text-primary text-lg">$3.99</span>
                            </div>
                            <div>
                                <button class="bg-secondary rounded-md text-primary px-2 py-1">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="relative flex">
                        <span class="absolute bg-red-500 font-bold text-white uppercase text-xs px-3 py-0.5 rounded-xl start-3 top-3">Clearance</span>
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Assorted Cheeses</h3>
                        <span class="text-sm">Up to 50% off select varieties</span>
                        <div class="flex justify-between mt-4 mb-1 items-end">
                            <div class="space-x-1">
                                <span class="font-bold text-primary text-lg">From $6.99</span>
                            </div>
                            <div>
                                <button class="bg-secondary rounded-md text-primary px-2 py-1">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

{{--        <footer class="text-center">--}}
{{--            <p>FreshMart. All rights reserved.</p>--}}
{{--        </footer>--}}
    </div>
</body>
</html>
