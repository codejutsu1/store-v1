<div>
    <select wire:model.lazy="category" class=" mt-5 bg-gray-50 border border-gray-300 text-gray-200 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full md:w-1/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">~ Select Category ~</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <div class="py-10 overflow-x-auto">
        <table class="w-[800px] text-sm md:text-base bg-gray-900 rounded-md overflow-hidden">
            <tr class="font-semibold text-center border-b">
                <th class="py-3 px-4">S/N</th>
                <th class="py-3 px-4">Image</th>
                <th class="py-3 px-4">Name</th>
                <th class="py-3 px-4">Description</th>
                <th class="py-3 px-4">Price</th>
                <th class="py-3 px-4">Actions</th>
            </tr>
            @forelse($products as $product)
                <tr class="text-center border-b">
                    <td class="py-4 md:px-6 px-2">{{ $loop->iteration }}</td>
                    <td class="py-4 md:px-6 px-2 flex justify-center items-center">
                        <img class="w-20 h-20 object-fit" src="../../storage/product/{{ $product->productImage->image }}" alt="{{ $product->productImage->description }}" />
                    </td>
                    <td class="py-4 md:px-6 px-2">{{ $product->name }}</td>
                    <td class="py-4 md:px-6 px-2">{{ $product->productImage->description }}</td>
                    <td class="py-4 md:px-6 px-2">@money($product->original_price)</td>
                    <td class="py-4 md:px-6 px-2">
                        <div class="flex space-x-4 justify-center">
                            <button onclick="Livewire.emit('openModal', 'user.product.edit-product', {{ json_encode(['product' => $product->id]) }})">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>  
                            </button>
                            <button onclick="Livewire.emit('openModal', 'user.product.delete-product', {{ json_encode(['product' => $product->id]) }})">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>                                                                      
                            </button>
                        </div>
                    </td>
                </tr>
                @empty   
                    <p class="text-xl font-semibold text-center mt-2">No Products yet...</p>
            @endforelse
        </table>
    </div>
</div>
