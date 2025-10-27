<div class="bg-white rounded-lg overflow-hidden col-span-1">
    <div>
        <img src="https://placehold.co/200x120.webp" class="w-full">
    </div>
    <div class="px-4 py-2 bg-white rounded-b-md flex flex-col justify-between h-auto">
        <div>
            <h3 class="font-semibold">{{ $title }}</h3>
            <span class="text-sm text-gray-400">{{ $subtitle }}</span>
        </div>
        <div class="flex justify-between mt-4 mb-1 items-end">
            <div>
                <span class="font-bold text-primary text-lg">${{ $price }}</span><span class="text-gray-400 text-sm">/{{ $type }}</span>
            </div>
            <div>
                <button class="bg-secondary rounded-md text-primary px-2 py-1">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
    </div>
</div>
