<x-layouts.app>
    <x-header />
    <div class="container mx-auto max-w-[1040px] py-3">
        <div>
            <ul class="flex items-center space-x-2">
                <li>
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-primary transaction-colors duration-200 font-light">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right text-gray-300"></i>
                    <a href="#" class="text-gray-400 hover:text-primary transaction-colors duration-200 font-light">
                        Grocery
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right text-gray-300"></i>
                    <a href="#" class="text-gray-400 hover:text-primary transaction-colors duration-200 font-light">
                        Fresh Produce
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right text-gray-300"></i>
                    <span class="text-primary font-semibold">Organic Gala Apple</span>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-2">
            <div></div>
            <div>
                <h2>Organic Gala Apple</h2>
                <span>Crisp and sweet, perfect for snaking or baking.</span>
                $2.99 / lb
                <div>
                    <div>Quantity</div>
                    <div>
                        <button>Add to Cart</button>
                    </div>
                </div>
                <div>
                    <span>Description</span>
                    <p></p>
                </div>
                <div>
                    Nutricional Information
                </div>
            </div>
        </div>
        <div>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div>
            <h2>Related Products</h2>
        </div>
        <div>
            <h2>Customer Reviews</h2>
        </div>
    </div>
    <x-footer />
</x-layouts.app>
