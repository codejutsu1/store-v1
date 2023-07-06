<div class="bg-gray-900 p-10">
    <div class="flex items-center justify-center mb-8">
        <img class="w-20 h-20" src="{{ Vite::asset('resources/images/review/warning.svg') }}" alt="A warning sign">
    </div>
    <h1 class="text-xl text-center font-bold text-gray-200">
        Are you sure you want to delete this Review?
    </h1>
    <div class="flex justify-between pt-10">
        <button wire:click="destroy" class="px-4 py-2 bg-red-700 text-red-100 rounded-md font-semibold">
            Yes, delete it!
        </button>
        <button wire:click="$emit('closeModal')" class="px-8 py-2 bg-zinc-700 text-zinc-100 rounded-md font-semibold">
            No
        </button>
    </div>
</div>