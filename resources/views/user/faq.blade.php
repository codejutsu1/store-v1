<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
            <h1 class="font-semibold text-2xl border-b pb-4">FAQ - Customize your questions and answers</h1>

            <div>
                @if($faqs)
                    @foreach($faqs as $faq)
                    <div class="flex justify-between pt-3 pb-8 my-6 w-full border-b">
                        <div class="w-2/5">
                            <span class="text-lg font-semibold">{{ $loop->iteration }}.</span>
                            <span class="text-lg font-semibold inline">Question</span>
                            <p class=" rounded-md border border-gray-200 px-2 pt-2 pb-20 mt-5 shadow-md ">{{ $faq->question }}</p>
                        </div>
                        <div class="w-2/5">
                            <span class="block text-lg font-semibold">Answers</span>
                            <p class=" rounded-md border border-gray-200 px-2 pt-2 pb-20 mt-5 shadow-md ">{{ $faq->answer }}</p>
                        </div>
                        <div class="space-y-10 ">
                            <button onclick="Livewire.emit('openModal', 'user.faq.faq-edit')" class="block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500 hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>  
                            </button>
                            <a href="#" class="block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>                                                                      
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                <div>
                    <p class="text-center text-3xl">There are no FAQs here.</p>
                </div>
                @endif
                <div class="flex justify-end">
                    <button type="button" onclick="Livewire.emit('openModal', 'user.faq.create-faq')" class="bg-purple-800 text-white px-4 py-2 rounded-md font-semibold">
                        Create New FAQ
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-user-dashboard>