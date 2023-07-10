<x-user-dashboard>
<div class="bg-gray-900 h-full p-8 pt-32">
    <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
        <h1 class="font-semibold text-2xl border-b pb-4">Categories - Create new categories for your store.</h1>

        <div class="flex justify-end">
            <button type="button" onclick="Livewire.emit('openModal', 'user.category.create-category')" class="bg-purple-800 text-white px-4 py-2 rounded-md font-semibold">
                Create New Category
            </button>
        </div>
    </div>
</div>
</x-user-dashboard>