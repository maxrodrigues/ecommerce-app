<x-layouts.app>
    <div class="h-screen flex flex-col justify-between items-center w-full">
        <div class="mx-auto p-3 w-[360px] space-y-10">
            <div class="flex flex-col items-center space-y-4 mt-10">
                <i class="fa-solid fa-bag-shopping text-primary text-5xl"></i>
                <div>
                    <h1 class="font-bold text-3xl">Welcome Back</h1>
                    <span class="text-sm text-lime-700">Login in to your FreshMart account</span>
                </div>
            </div>
            <div class="w-full space-y-3">
                <div class="flex flex-col space-y-1.5">
                    <label class="text-sm">E-mail or Username</label>
                    <input
                        type="text"
                        class="bg-secondary placeholder:text-lime-700 px-3 py-2 rounded-md outline-none"
                        placeholder="Enter your email or username"
                    />
                </div>
                <div class="flex flex-col space-y-1.5">
                    <label class="text-sm">Password</label>
                    <div class="relative flex items-center">
                        <input
                            type="password"
                            class="bg-secondary placeholder:text-lime-700 px-3 py-2 rounded-md outline-none w-full"
                            placeholder="Enter your password"
                        />
                        <i class="fa-solid fa-eye-slash absolute right-3 text-primary"></i>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-10">
                    <div class="flex flex-row space-x-1">
                        <input type="checkbox" id="remember"/>
                        <div>
                            <label for="remember" class="text-sm text-lime-700">Remeber me</label>
                        </div>
                    </div>
                    <span class="text-primary font-bold text-sm">Forgot Password?</span>
                </div>
                <div>
                    <button class="bg-primary w-full rounded-md text-white font-semibold py-2 text-center">Login</button>
                </div>
            </div>
        </div>
        <div class="pb-6">
            <span class="text-lime-700">Don't have an account?
                <a href="#" class="text-primary font-semibold">Create an Account</a>
            </span>
        </div>
    </div>
</x-layouts.app>
