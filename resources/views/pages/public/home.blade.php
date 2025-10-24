<x-layouts.app>
    <x-header />
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

            <section class="mt-10 grid grid-cols-3 gap-4">
                <div class="col-span-3">
                    <h2 class="font-bold text-2xl">Promotions</h2>
                </div>
                <div class="bg-white rounded-lg overflow-hidden col-span-1">
                    <div class="relative flex">
                        <span class="absolute bg-primary font-bold text-white uppercase text-xs px-3 py-0.5 rounded-xl start-3 top-3">save 20%</span>
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Fresh Barriers Mix</h3>
                        <span class="text-sm text-gray-400">Strawberries, Blueberries, Raspberries</span>
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
                <div class="bg-white rounded-lg overflow-hidden col-span-1">
                    <div class="relative flex">
                        <span class="absolute bg-yellow-500 font-bold text-black uppercase text-xs px-3 py-0.5 rounded-xl start-3 top-3">Bogo</span>
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Organic Pasta</h3>
                        <span class="text-sm text-gray-400">Buy One Get One Free</span>
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
                <div class="bg-white rounded-lg overflow-hidden col-span-1">
                    <div class="relative flex">
                        <span class="absolute bg-red-500 font-bold text-white uppercase text-xs px-3 py-0.5 rounded-xl start-3 top-3">Clearance</span>
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Assorted Cheeses</h3>
                        <span class="text-sm text-gray-400">Up to 50% off select varieties</span>
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

            <section class="mt-10 grid grid-cols-4 gap-4">
                <div class="col-span-4">
                    <h2 class="font-bold text-2xl">Weekly Specials</h2>
                </div>
                <div class="bg-white rounded-lg overflow-hidden col-span-1">
                    <div>
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Organic Gala Apples</h3>
                        <span class="text-sm text-gray-400">Juicy and crisp</span>
                        <div class="flex justify-between mt-4 mb-1 items-end">
                            <div class="space-x-1">
                                <span class="font-bold text-primary text-lg">$2.99/lb</span>
                            </div>
                            <div>
                                <button class="bg-secondary rounded-md text-primary px-2 py-1">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden col-span-1">
                    <div class="flex">
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Free-Range Brown Eggs</h3>
                        <span class="text-sm text-gray-400">Farm fresh, dozen</span>
                        <div class="flex justify-between mt-4 mb-1 items-end">
                            <div class="space-x-1">
                                <span class="font-bold text-primary text-lg">$3.49</span>
                            </div>
                            <div>
                                <button class="bg-secondary rounded-md text-primary px-2 py-1">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden col-span-1">
                    <div class="relative flex">
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Artisan Sourdough</h3>
                        <span class="text-sm text-gray-400">Crusty & Flavorful</span>
                        <div class="flex justify-between mt-4 mb-1 items-end">
                            <div class="space-x-1">
                                <span class="font-bold text-primary text-lg">$4.79/loaf</span>
                            </div>
                            <div>
                                <button class="bg-secondary rounded-md text-primary px-2 py-1">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden col-span-1">
                    <div class="flex">
                        <img src="https://placehold.co/200x120.webp" class="w-full">
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-md">
                        <h3 class="font-semibold">Creamy Almond Milk</h3>
                        <span class="text-sm text-gray-400">Unsweetened, 1/2 gal</span>
                        <div class="flex justify-between mt-4 mb-1 items-end">
                            <div class="space-x-1">
                                <span class="font-bold text-primary text-lg">$3.29</span>
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

            <section class="mt-10 flex flex-col items-center">
                <div class="text-center mb-2">
                    <h2 class="text-2xl font-bold">Stay Fresh</h2>
                    <span class="text-gray-400">Subscribe to our newsletter for exclusive deals, recipes, and news delivered to your box</span>
                </div>
                <div class="mt-4">
                    <div class="flex item-center">
                        <input type="text" placeholder="Digite seu e-mail" class="bg-white px-3 py-2 rounded-l shadow-md outline-none w-xs" />
                        <button class="bg-primary text-white px-5 py-2 rounded-r shadow-md font-semibold transactions-color duration-300 hover:bg-secondary hover:text-primary">
                            Subscribe
                        </button>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <x-footer />
</x-layouts.app>
