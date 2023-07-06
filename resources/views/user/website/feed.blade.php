<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
            <h1 class="font-semibold text-2xl border-b pb-4">Feed - What's popping.</h1>

            <div class="py-10 overflow-auto">
                <table class="w-full bg-gray-900 rounded-md overflow-hidden">
                    <tr class="font-semibold border-b">
                        <th class="p-4">S/N</th>
                        <th class="p-4">Image</th>
                        <th class="p-4">Description</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </table>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="Livewire.emit('openModal', 'user.review.create-review')" class="bg-purple-800 text-white px-4 py-2 rounded-md font-semibold">
                    Create New Feed
                </button>
            </div>
        </div>
    </div>
</x-user-dashboard>