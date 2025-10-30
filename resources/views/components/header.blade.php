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
                <div class="flex space-x-4">
                    <div>
                        <i class="fa-solid fa-heart text-red-700 text-xl"></i>
                    </div>
                    <div class="relative inline-flex items-center">
                        <a href="{{ route('cart') }}">
                            <i class="fa-solid fa-cart-shopping text-xl"></i>
                        </a>
                        <div class="bg-primary text-white rounded-full text-sm absolute -top-2 -end-2 h-5 w-5 inline-flex items-center justify-center font-semibold">
                            3
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <a href="{{ route('login') }}" class="bg-primary px-6 py-2 rounded text-white font-semibold hover:bg-secondary hover:text-primary transition-colors duration-300">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
