<div>
    <div class="p-8 bg-gray-900">
        <div>
            <h1 class="text-2xl text-center text-gray-200 font-semibold">Create a new Product</h1>
            <form wire:submit.prevent="submit" class="mt-5 text-gray-200">
                <div>
                    <input type="text" wire:model.debounce.500ms="name" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Name" >
                    @error('name') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <div class="flex rounded-md border mt-10 pl-1">
                        <span class="bg-gray-900 flex items-center justify-center p-2 font-semibold">&#8358;</span>
                        <input type="tel" wire:model.debounce.500ms="original_price" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 border-0 rounded-md" placeholder="Price of product">
                    </div>
                    @error('original_price') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <select wire:model.debounce.500ms="category_id" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md mt-10" required>
                        <option value="" selected="selected" disabled>~ Select Category ~</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <x-file-pond wire:model="image" class="mt-10" />
                    @error('image')<span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <textarea wire:model.debounce.500ms="description" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md mt-10" rows="5" placeholder="Product Description...."></textarea>
                    @error('description') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end pt-10">
                    <input type="submit" class="bg-purple-600 cursor-pointer text-gray-200 px-5 py-2 rounded-md text-lg font-semibold" value="Create" />
                </div>
            </form>
        </div>
    </div>
</div>