<x-user-dashboard>
    <div class="bg-gray-900 h-full px-4 md:px-8 pt-32">
        <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
            <h1 class="font-semibold text-xl md:text-2xl border-b pb-4">Feed - What's popping?</h1>

            <div class="py-10 overflow-auto">
                <table class="w-full text-sm md:text-base bg-gray-900 rounded-md overflow-hidden">
                    <tr class="font-semibold border-b">
                        <th class="py-3 px-6">S/N</th>
                        <th class="py-3 px-6">Image</th>
                        <th class="py-3 px-6">Description</th>
                        <th class="py-3 px-6">Created At</th>
                        <th class="py-3 px-6">Actions</th>
                    </tr>
                    @forelse($feeds as $feed)
                        <tr class="border-b font-semibold text-center">
                            <td class="py-4 px-6">{{ $loop->iteration }}</td>
                            <td class="py-4 px-6 flex justify-center items-center">
                                <img class="w-20 h-20 object-fit" src="../../storage/feed/{{ $feed->image }}" alt="{{ $feed->description }}" />
                            </td>
                            <td class="py-4 px-6">{{ $feed->description }}</td>
                            <td class="py-4 px-6">{{ date("l jS \of F Y h:i:s A", strtotime($feed->created_at)) }}</td>
                            <td class="py-4 px-6">
                                <div>
                                    <button onclick="Livewire.emit('openModal', 'user.feed.delete-feed', {{ json_encode(['feed' => $feed->id]) }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>                                                                      
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p class="text-xl font-semibold text-center mt-2">No Feed yet...</p>
                    @endforelse
                </table>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="Livewire.emit('openModal', 'user.feed.create-feed')" class="bg-purple-800 text-white px-4 py-2 rounded-md font-semibold">
                    Create New Feed
                </button>
            </div>
        </div>
    </div>
</x-user-dashboard>