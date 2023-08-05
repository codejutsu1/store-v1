<div>
    <div class="p-8 bg-gray-900">
        <div>
            <h1 class="text-2xl text-center text-gray-200 font-semibold">Update this Staff</h1>
            <form wire:submit.prevent="submit" class="mt-5 text-gray-200">
                <div>
                    <input type="text" wire:model.debounce.500ms="fullname" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Full Name" autofocus>
                    @error('fullname') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="email" wire:model.debounce.500ms="email" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md mt-10" placeholder="Email Address" />
                    @error('email') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end mt-5">
                    <input type="submit" class="bg-purple-600 cursor-pointer text-gray-200 px-5 py-2 rounded-md text-lg font-semibold" value="Update" />
                </div>
            </form>
        </div>
    </div>
</div>