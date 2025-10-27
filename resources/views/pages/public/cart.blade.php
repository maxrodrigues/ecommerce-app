<x-layouts.app>
    <x-header />
    <div class="container mx-auto max-w-[1040px] py-3">
        <x-breadcrumbs />
        <h1 class="text-3xl font-bold mt-3 mb-8">Shopping Cart</h1>
        <div class="grid grid-cols-3 gap-5">
            <div class="col-span-2">
                <table class="w-full bg-white rounded-lg shadow-md">
                    <thead>
                        <tr >
                            <th class="text-left py-3 px-3 text-lime-700 text-sm font-normal">Product</th>
                            <th class=" py-3 px-3 text-lime-700 text-sm font-normal">Price</th>
                            <th class=" py-3 px-3 text-lime-700 text-sm font-normal">Quantity</th>
                            <th class=" py-3 px-3 text-lime-700 text-sm font-normal">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-300">
                            <td class="px-3 py-5">
                                <div class="flex items-center space-x-2">
                                    <img src="{{ asset('img/fresh-bananas.jpg') }}" class="w-16 rounded-lg"/>
                                    <div class="flex flex-col space-y-2">
                                        <span class="font-semibold">Fresh Organic Bananas</span>
                                        <a href="#" class="text-lime-700 text-xs">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td class="px-3 py-5 text-sm text-center">$2.99</td>
                            <td class="px-3 py-5">
                                <div class="flex items-center justify-center">
                                    <button class="border-l border-y border-gray-300 py-2 rounded-l-full px-3">
                                        <i class="fa-solid fa-plus text-sm text-gray-500"></i>
                                    </button>
                                    <input type="number" class="outline-none border-y border-gray-300 py-2 w-10 text-center" placeholder="2"/>
                                    <button class="border-r border-y border-gray-300 py-2 rounded-r-full px-3">
                                        <i class="fa-solid fa-minus text-sm text-gray-500"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="px-3 py-5 text-sm text-center">$5.98</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="px-3 py-5">
                                <div class="flex items-center space-x-2">
                                    <img src="{{ asset('img/milk-gallon.jpg') }}" class="w-16 h-16 rounded-lg overflow"/>
                                    <div class="flex flex-col space-y-2">
                                        <span class="font-semibold">Whole Milk, 1 Gallon</span>
                                        <a href="#" class="text-lime-700 text-xs">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td class="px-3 py-5 text-sm text-center">$1.50</td>
                            <td class="px-3 py-5">
                                <div class="flex items-center justify-center">
                                    <button class="border-l border-y border-gray-300 py-2 rounded-l-full px-3">
                                        <i class="fa-solid fa-plus text-sm text-gray-500"></i>
                                    </button>
                                    <input type="number" class="outline-none border-y border-gray-300 py-2 w-10 text-center" placeholder="3"/>
                                    <button class="border-r border-y border-gray-300 py-2 rounded-r-full px-3">
                                        <i class="fa-solid fa-minus text-sm text-gray-500"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="px-3 py-5 text-sm text-center">$4.50</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="px-3 py-5">
                                <div class="flex items-center space-x-2">
                                    <img src="{{ asset('img/sourdough-bread.jpg') }}" class="w-16 h-16 rounded-lg"/>
                                    <div class="flex flex-col space-y-2">
                                        <span class="font-semibold">Artisan Sourdough Bread</span>
                                        <a href="#" class="text-lime-700 text-xs">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td class="px-3 py-5 text-sm text-center">$3.50</td>
                            <td class="px-3 py-5">
                                <div class="flex items-center justify-center">
                                    <button class="border-l border-y border-gray-300 py-2 rounded-l-full px-3">
                                        <i class="fa-solid fa-plus text-sm text-gray-500"></i>
                                    </button>
                                    <input type="number" class="outline-none border-y border-gray-300 py-2 w-10 text-center" placeholder="1"/>
                                    <button class="border-r border-y border-gray-300 py-2 rounded-r-full px-3">
                                        <i class="fa-solid fa-minus text-sm text-gray-500"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="px-3 py-5 text-sm text-center">$3.50</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <div class="flex justify-between px-3 py-5">
                                    <button class="text-sm text-primary font-semibold">
                                        <i class="fa-solid fa-arrow-left mx-2"></i>
                                        Continue Shipping
                                    </button>
                                    <button class="bg-secondary px-5 py-2 rounded-lg text-primary text-sm">
                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                        Update Cart
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div>
                <div class="bg-white rounded-lg p-5 shadow-md">
                    <h3 class="font-bold text-lg">Order Summary</h3>
                    <div class="flex flex-col mt-6 space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="text-lime-700 text-sm">Subtotal</span>
                            <span class="text-sm">$13.98</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-lime-700 text-sm">Estimated Tax</span>
                            <span class="text-sm">$1.00</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-lime-700 text-sm">Shipping</span>
                            <span class="text-sm">Free</span>
                        </div>
                    </div>
                    <div class="border-y border-gray-200 my-6 py-3">
                        <span class="font-semibold text-sm">Discount Code</span>
                        <div class="mt-3">
                            <input type="text" class="bg-gray-200 rounded-md py-2 pl-2.5 outline-none" placeholder="Enter coupon code"/>
                            <button class="bg-secondary text-primary py-2 px-3 rounded-md">Apply</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-lg">Total</span>
                            <span class="font-bold">$14.98</span>
                        </div>
                        <div>
                            <p class="text-xs text-lime-700">Taxes and shipping calculate at checkout</p>
                        </div>
                    </div>
                    <div class="bg-primary w-full rounded-md text-white font-semibold py-2 text-center">
                        <a href="{{ route('checkout') }}">
                            Proceed to Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
