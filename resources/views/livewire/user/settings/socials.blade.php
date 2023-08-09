<div class="bg-gray-800 w-full mx-auto p-4 md:p-8 rounded-md text-gray-200 mt-20">
    <h1 class="font-semibold text-lg md:text-2xl border-b pb-4">Socials - Ways to get you.</h1>

    <div>
        <form wire:submit.prevent="submit" class="py-10 space-y-10">
            <div class="md:grid grid-cols-2 md:gap-10 space-y-10 md:space-y-0">
                <div>
                    <label for="facebook">Facebook</label>
                    <input wire:model.lazy="facebook" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                    @error('facebook') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="twitter">Twitter</label>
                    <input wire:model.lazy="twitter" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                    @error('twitter') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="md:grid grid-cols-2 md:gap-10 space-y-10 md:space-y-0">
                <div>
                    <label for="tiktok">TikTok</label>
                    <input wire:model.lazy="tiktok" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                    @error('tiktok') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="instagram">Instagram</label>
                    <input wire:model.lazy="instagram" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                    @error('instagram') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="md:grid grid-cols-2 md:gap-10 space-y-10 md:space-y-0">
                <div>
                    <label for="whatsapp">Whatsapp</label>
                    <input wire:model.lazy="whatsapp" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                    @error('whatsapp') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="telegram">Telegram</label>
                    <input wire:model.lazy="telegram" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                    @error('telegram') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-end">
                <input type="submit" class="bg-purple-800 cursor-pointer text-white px-4 py-2 rounded-md font-semibold" value="Update Socials" />
            </div>
        </form>
    </div>
</div>