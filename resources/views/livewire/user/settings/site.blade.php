<div class="bg-gray-800 w-full mx-auto p-4 md:p-8 rounded-md text-gray-200">
    <h1 class="font-semibold text-lg nd:text-2xl border-b pb-4">Site - Make changes as you deem fit.</h1>
    <div>
        <form wire:submit.prevent="submit" class="py-10 space-y-10">
            <div class="md:grid grid-cols-2 md:gap-10 space-y-10 md:space-y-0">
                <div>
                    <label for="site_name">Site Name</label>
                    <input wire:model.lazy="site_name" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                </div>

                <div>
                    <label for="site_email">Site Email</label>
                    <input wire:model.lazy="site_email" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                </div>
            </div>
            <div class="md:grid grid-cols-2 md:gap-10 space-y-10 md:space-y-0">
                <div>
                    <label for="site_phone">Site Phone</label>
                    <input wire:model.lazy="site_phone" type="tel" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                </div>

                <div>
                    <label for="site_address">Site Address</label>
                    <input wire:model.lazy="site_address" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                </div>
            </div>
            <div class="md:grid grid-cols-2 md:gap-10 space-y-10 md:space-y-0">
                <div>
                    <label for="keywords">Keywords</label>
                    <input wire:model.lazy="keywords" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                </div>

                <div>
                    <label for="description">Description</label>
                    <input wire:model.lazy="description" type="text" class="w-full rounded-md text-gray-200 bg-gray-900 focus:ring-0 focus:border-purple-600 mt-2">
                </div>
            </div>
            <div class="flex justify-end">
                <input type="submit" class="bg-purple-800 cursor-pointer text-white px-4 py-2 rounded-md font-semibold" value="Update Site" />
            </div>
        </form>
    </div>
</div>