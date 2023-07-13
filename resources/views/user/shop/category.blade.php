<x-user-dashboard>
<div class="bg-gray-900 h-full p-8 pt-32">
    <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
        <h1 class="font-semibold text-2xl border-b pb-4">Categories - Create new categories for your store.</h1>

        <div class="py-10 overflow-x-auto">
            @if($categories)
                <table class="w-full bg-gray-900 rounded-md overflow-hidden">
                    <tr class="font-semibold border-b">
                        <th class="p-4">S/N</th>
                        <th class="p-4">Question</th>
                        <th class="p-4">Answer</th>
                        <th class="p-4">Actions</th>
                    </tr>
                    @foreach($categories as $category)
                        <tr class="border-b">
                            <td class="p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="p-4 text-center w-2/5">{{ $category->name }}</td>
                            <td class="p-4 text-center">{{ $category->description }}</td>
                            <td class="p-4 text-center">
                                <div class="flex space-x-4">
                                    <button onclick="Livewire.emit('openModal', 'user.category.edit-category', {{ json_encode(['category' => $category->id]) }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>  
                                    </button>
                                    <button onclick="Livewire.emit('openModal', 'user.category.delete-category', {{ json_encode(['category' => $category->id]) }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>                                                                      
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                @else   
                    <p class="text-xl font-semibold text-center mt-2">No Categories yet...</p>
                @endif
            </div>
        <div class="flex justify-end mt-5">
            <button type="button" onclick="Livewire.emit('openModal', 'user.category.create-category')" class="bg-purple-800 text-white px-4 py-2 rounded-md font-semibold">
                Create New Category
            </button>
        </div>
    </div>
</div>
</x-user-dashboard>