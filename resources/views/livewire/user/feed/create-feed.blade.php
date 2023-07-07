<div>
    <div class="p-8 bg-gray-900">
        <div>
        <h1 class="text-2xl text-center text-gray-200 font-semibold">Create a new Feed</h1>
            <form wire:submit.prevent="submit" class="mt-5 text-gray-200">
                <div>
                    <input x-init="const inputElement = document.querySelector('.file_field'); const pond = FilePond.create(inputElement);" type="file" wire:model.debounce.500ms="image" class="file_field block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md">
                    @error('image')<span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <textarea wire:model.debounce.500ms="description" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md mt-10" rows="10" placeholder="A short summary of the uploaded image..."></textarea>
                    @error('description') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end mt-5">
                    <input type="submit" class="bg-purple-600 cursor-pointer text-gray-200 px-5 py-2 rounded-md text-lg font-semibold" value="Create" />
                </div>
            </form>
        </div>
    </div>
</div>
