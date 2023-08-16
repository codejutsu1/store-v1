<x-user-dashboard>
<div class="bg-gray-900 h-full px-4 md:px-8 pt-32">
    <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="px-6 py-6 bg-gray-900 rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-sm text-indigo-600">Total Revenue</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-indigo-400 bg-opacity-20 rounded-full text-indigo-600 border border-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl 2xl:text-4xl font-bold">@money($total_revenue)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-6 bg-gray-900 rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-sm text-green-600">New Orders</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg class="w-12 2xl:w-16 h-12 2xl:h-16 p-1 2xl:p-3 bg-green-400 bg-opacity-20 rounded-full text-green-600 border border-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl 2xl:text-4xl font-bold">{{ $new_orders }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-user-dashboard>