<div class="flex justify-center items-center sm:block">
    <div class="p-8 bg-gray-900">
        <div>
            <h1 class="text-2xl text-center text-gray-200 font-semibold">Create a new FAQ</h1>
            <form wire:submit.prevent="submit" class="mt-5 text-gray-200">
                <div>
                    <input type="text" wire:model.debounce.500ms="question" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md" placeholder="Question">
                    @error('question') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <textarea wire:model.debounce.500ms="answer" class="block w-full bg-gray-800 focus:ring-0 focus:border-gray-200 rounded-md mt-10" rows="10" placeholder="Answer"></textarea>
                    @error('answer') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end mt-5">
                    <input type="submit" class="bg-purple-600 cursor-pointer text-gray-200 px-5 py-2 rounded-md text-lg font-semibold" value="Create" />
                </div>
            </form>
        </div>
    </div>
</div>