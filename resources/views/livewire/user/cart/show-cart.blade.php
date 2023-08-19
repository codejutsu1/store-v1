<div>
    <div class="md:flex justify-between py-5 px-1 space-y-5 md:space-y-0">
        @can('view orders')
        <select wire:model.lazy="period" class="bg-gray-50 border border-gray-300 text-gray-200 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full md:w-1/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">~ Period ~</option>
            <option value="today" selected>Today</option>
            <option value="yesterday">Yesterday</option>
            <option value="week">7 days ago</option>
            <option value="month">This Month</option>
            <option value="all">All Orders</option>
        </select>
        @endcan

        <div>
            <input type="search" placeholder="Search by Order Id..." wire:model.debounce.500ms="search" class="bg-gray-50 border border-gray-300 text-gray-200 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
    </div>
    <div class="py-10 overflow-x-auto">
        <table class="w-[800px] md:w-full text-sm md:text-base bg-gray-900 rounded-md overflow-x-auto">
            <tr class="font-semibold border-b">
                <th class="py-3 px-6">S/N</th>
                <th class="py-3 px-6">Order Id</th>
                <th class="py-3 md:px-6 px-2">Number of Orders</th>
                <th class="py-3 px-6">Status</th>
                <th class="py-3 px-6">Date</th>
            </tr>
            @foreach($orders as $order)
                <tr class="border-b text-center">
                    <td class="py-4 px-6">{{ $order->id }}</td>
                    <td class="py-4 px-6">
                        <a href="{{ route('orders.show', $order->id) }}" class="underline block">{{ $order->order_id }}</a>
                    </td>
                    <td class="py-4 px-6">{{ count($order->order_details) }}</td>
                    <td class="py-4 px-6">
                        @if($order->order_status->status && $order->status)
                            <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Delivered</span>
                        @elseif($order->status &&  !$order->order_status->status)
                            <span class="bg-indigo-500 px-1.5 py-0.5 rounded-lg text-gray-100">Ready</span>
                        @else
                            <span class="bg-yellow-500 px-1.5 py-0.5 rounded-lg text-gray-100">Pending</span>
                        @endif
                    </td>
                    <td class="py-4 px-6">{{ dateConvert($order->created_at) }}</td>
                </tr>
            @endforeach
        </table>
        <div class="mt-10">
            {{ $orders->links() }}
        </div>
    </div>
</div>
