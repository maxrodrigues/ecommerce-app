<x-layouts.app>
    <x-header />
    <div class="container mx-auto max-w-[1040px] py-3">
        <x-breadcrumbs />
        <div class="grid grid-cols-2 mt-10">
            <div>
                <img src="{{ asset('img/close-apple.png') }}" />
            </div>
            <div class="flex flex-col">
                <h2 class="font-bold text-2xl">Organic Gala Apple</h2>
                <span class="text-base font-light text-gray-400">Crisp and sweet, perfect for snaking or baking.</span>
                <div class="my-4">
                    <span class="text-primary font-bold text-2xl">$2.99</span>
                    <span class="text-gray-500"> / lb</span>
                </div>
                <div class="flex justify-between items-end mb-10">
                    <div class="flex flex-col items-start space-y-1">
                        <label for="qty" class="text-sm">Quantity</label>
                        <div class="relative flex items-center">
                            <button class="bg-gray-200 py-2 rounded-l-md px-3">
                                <i class="fa-solid fa-plus text-xs"></i>
                            </button>
                            <input name="qty" type="number" class="bg-white py-2 w-16 pl-3 outline-none" placeholder="1"/>
                            <button class="bg-gray-200 py-2 rounded-r-md px-3">
                                <i class="fa-solid fa-minus text-sm"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <button class="bg-primary text-white font-semibold px-20 py-2 rounded-lg">Add to Cart</button>
                    </div>
                </div>
                <div class="flex flex-col space-y-1 my-5">
                    <span class="font-bold">Description</span>
                    <p class="text-gray-400">Lorem ipsum ultricies elit augue accumsan mi, erat quam hendrerit aliquet et nullam, est urna gravida sollicitudin dictum. tristique magna ut habitasse amet at vehicula ultricies vel elementum etiam, sollicitudin posuere sagittis massa convallis quisque potenti adipiscing nisl arcu, vitae vivamus lobortis justo semper fringilla aliquet dolor dictum.</p>
                </div>
                <div class="flex flex-col space-y-1 my-5">
                    <span class="font-bold">Nutricional Information</span>
                    <hr class="text-gray-300 mb-5 mt-2"/>
                    <div class="grid grid-cols-2">
                        <div class="space-y-5">
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold">Serving Size</span>
                                <span class="text-sm font-light">1 Medium apple (182g)</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold">Total Fat</span>
                                <span class="text-sm font-light">0.3g</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold">Dietary Fiber</span>
                                <span class="text-sm font-light">4g</span>
                            </div>
                        </div>
                        <div class="space-y-5">
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold">Calories</span>
                                <span class="text-sm font-light">95</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold">Total Carbohydrate</span>
                                <span class="text-sm font-light">25g</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold">Sugars</span>
                                <span class="text-sm font-light">19g</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-products.related />
        <x-products.reviews />
    </div>
    <x-footer />
</x-layouts.app>
