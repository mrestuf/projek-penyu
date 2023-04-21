<form wire:submit.prevent="store" method="POST">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="firstname"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('firstname') text-red-700 dark:text-red-500 @enderror">First
                name</label>
            <input type="text" id="firstname" wire:model="firstname"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('firstname') border-red-500 text-red-900 focus:ring-red-50 focus:border-red-500 dark:border-red-600 dark:placeholder-red-400 dark:text-red-500 dark:focus:ring-red-500 dark:focus:border-red-500 @enderror"
                placeholder="John" required>
            @error('firstname')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="lastname"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('firstname') text-red-700 dark:text-red-500 @enderror">Last
                name</label>
            <input type="text" id="lastname" wire:model="lastname"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('firstname') border-red-500 text-red-900 focus:ring-red-50 focus:border-red-500 dark:border-red-600 dark:placeholder-red-400 dark:text-red-500 dark:focus:ring-red-500 dark:focus:border-red-500 @enderror"
                placeholder="Doe" required>
            @error('lastname')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="mb-6">
        <label for="phonenumber"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('phonenumber') text-red-700 dark:text-red-500 @enderror">Phone Number
            </label>
        <input type="phonenumber" id="phonenumber" wire:model="phonenumber"
            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('phonenumber') border-red-500 text-red-900 focus:ring-red-50 focus:border-red-500 dark:border-red-600 dark:placeholder-red-400 dark:text-red-500 dark:focus:ring-red-500 dark:focus:border-red-500 @enderror"
            placeholder="john.doe@company.com" required>
        @error('phonenumber')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ $message }}</p>
        @enderror
    </div>

    <!-- Email input -->
    <div class="mb-6">
        <label for="email"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('email') text-red-700 dark:text-red-500 @enderror">Email
            address</label>
        <input type="email" id="email" wire:model="email"
            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border-red-500 text-red-900 focus:ring-red-50 focus:border-red-500 dark:border-red-600 dark:placeholder-red-400 dark:text-red-500 dark:focus:ring-red-500 dark:focus:border-red-500 @enderror"
            placeholder="john.doe@company.com" required>
        @error('email')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ $message }}</p>
        @enderror
    </div>

    <!-- Password input -->
    <div class="mb-6">
        <label for="password"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('password') text-red-700 dark:text-red-500 @enderror">Password</label>
        <div class="relative" x-data="{show:false}">
            <input wire:model="password"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none text-base @error('password') border-red-500 text-red-900 focus:ring-red-50 focus:border-red-500 dark:border-red-600 dark:placeholder-red-400 dark:text-red-500 dark:focus:ring-red-500 dark:focus:border-red-500 @enderror"
                :type="!show ? 'password' : 'text'" name="password" id="password" autocomplete="off" type="password"
                placeholder="password">

            <div class="absolute top-1/2 right-4 cursor-pointer" style="transform: translateY(-50%);">
                <svg class="h-4 text-gray-700 block" fill="none" @click="show = !show"
                    :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor"
                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                    </path>
                </svg>

                <svg class="h-4 text-gray-700 hidden" fill="none" @click="show = !show"
                    :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="currentColor"
                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                    </path>
                </svg>
            </div>
            @error('password')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $message }}</p>
            @enderror
        </div>
    </div>
    
    <!-- Submit button -->
    <button type="submit" wire:loading.attr="disabled" wire:target="store" wire:loading.class="bg-gray"
        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        <span wire:loading.remove wire:target="store">Sign Up</span>
        <span wire:loading wire:target="store">Logging in...</span>
      </button>
</form>
