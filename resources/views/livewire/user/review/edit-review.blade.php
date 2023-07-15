<div>
    <div class="p-8 bg-gray-900">
        <div>
            <h1 class="text-2xl text-center text-gray-200 font-semibold">Edit Review</h1>
            <form wire:submit.prevent="submit" class="mt-5 text-gray-200 space-y-10">
                <div>
                    <input type="text" wire:model.debounce.500ms="name" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Name" autofocus>
                    @error('name') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <textarea wire:model.debounce.500ms="comment" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md mt-10" rows="10" placeholder="Comment"></textarea>
                    @error('comment') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <x-file-pond wire:model="image" />
                    @error('image')<span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="text" wire:model.debounce.500ms="facebook" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Facebook">
                    @error('facebook') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="text" wire:model.debounce.500ms="twitter" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Twitter">
                    @error('twitter') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="text" wire:model.debounce.500ms="instagram" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Instagram">
                    @error('instagram') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="text" wire:model.debounce.500ms="tiktok" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Tiktok">
                    @error('tiktok') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end mt-5">
                    <input type="submit" class="bg-purple-600 cursor-pointer text-gray-200 px-5 py-2 rounded-md text-lg font-semibold" value="Update" />
                </div>
            </form>
        </div>
    </div>
</div>