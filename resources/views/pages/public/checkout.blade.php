<x-layouts.app>
    <x-header />
    <div class="container mx-auto max-w-[1040px] py-3">
        <x-breadcrumbs />
        <x-utils.typography.title-h1 title="Checkout" />
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 flex flex-col space-y-4">
                <div class="bg-white rounded-lg shadow-md p-3">
                    <h3>Delivery Address</h3>
                    <div>
                        <div>
                            <label>Address</label>
                            <input type="text" />
                        </div>
                    </div>

                    <div>
                        <div>
                            <label>Address</label>
                            <input type="text" />
                        </div>
                        <div>
                            <label>Address</label>
                            <input type="text" />
                        </div>
                    </div>

                    <div>
                        <div>
                            <label>Address</label>
                            <input type="text" />
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-3">
                    <h3 class="font-bold my-3">Shipping Method</h3>
                    <div class="flex px-3 py-2 space-x-4 rounded-lg items-center border border-gray-200 my-4 hover:border-primary">
                        <input type="radio" name="delivery" id="standard" class="w-4 h-4 appearance-none bg-white border border-gray-500 rounded-full checked:bg-primary checked:outline-offset-2 checked:outline-primary">
                        <label for="standard" class="flex flex-col text-sm w-full cursor-pointer">
                            <span>Standard (3-5 days)</span>
                            <span class="text-lime-700">Free</span>
                        </label>
                    </div>
                    <div class="flex px-3 py-2 space-x-4 rounded-lg items-center border border-gray-200 my-4 hover:border-primary">
                        <input type="radio" name="delivery" id="express" class="w-4 h-4 appearance-none bg-white border border-gray-500 rounded-full checked:bg-primary checked:outline-offset-2 checked:outline-primary">
                        <label for="express" class="flex flex-col text-sm w-full cursor-pointer">
                            <span>Express (1-2 days)</span>
                            <span class="text-lime-700">$5.99</span>
                        </label>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-3">
                    <h3>Payment Method</h3>

                </div>
            </div>
            <div class="col-span-1">
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
