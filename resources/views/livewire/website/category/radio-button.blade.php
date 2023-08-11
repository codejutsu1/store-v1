<div>
    <form class="flex justify-between">
        @forelse($categories as $category)
        <div>
            <label for="{{ $category->name }}" class="md:flex items-center px-2 category">
                <input type="radio" name="categories"  wire:click="redirectCategory({{ $category->id }})" id="{{ $category->name }}"  class="w-12 h-6 outline-none bg-gray-200 cursor-pointer rounded-[20px] relative"
                    {{ $category->slug == $category_url ? 'checked' : '' }}
                />
                <a href="{{ route('shop', $category->slug) }}">
                    <span class="block p-2 md:p-5 category-span font-semibold text-gray-200">
                        {{ $category->name }}
                    </span>
                </a>
            </label>
        </div>
            @empty
            <p class="text-center font-semibold">There is no category yet...</p>
        @endforelse
    </form>
</div>
