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
    <div class="">
        <header class="flex justify-between items-center border-b border-[#e3f0e3] px-10 py-4">
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
                <div>
                    Search
                </div>
                <div class="flex items-center space-x-10">
                    <div class="space-x-4">
                        <i class="fa-solid fa-heart text-red-700 text-xl"></i>
                        <i class="fa-solid fa-cart-shopping text-xl text-[#c9efc9]"></i>
                    </div>
                    <div>
                        <button class="bg-primary px-6 py-2 rounded text-white font-semibold hover:bg-secondary hover:text-primary transition-colors duration-300">
                            Login
                        </button>
                    </div>
                </div>
            </div>
        </header>
{{--        <main>--}}
{{--            corpo--}}
{{--        </main>--}}
{{--        <footer class="text-center">--}}
{{--            <p>FreshMart. All rights reserved.</p>--}}
{{--        </footer>--}}
    </div>
</body>
</html>
