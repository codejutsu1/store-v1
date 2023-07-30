<div>
    <div class="flex justify-between py-5 px-1">
        <select wire:model.lazy="period" class="bg-gray-50 border border-gray-300 text-gray-200 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-1/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">~ Period ~</option>
            <option value="today" selected>Today</option>
            <option value="yesterday">Yesterday</option>
            <option value="week">7 days ago</option>
            <option value="month">This Month</option>
            <option value="all">All Orders</option>
        </select>

        <div>
            <input type="search" placeholder="Search by Order Id..." name="search" class="bg-gray-50 border border-gray-300 text-gray-200 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
    </div>
    <div class="py-10 overflow-x-auto">
        <table class="w-full bg-gray-900 rounded-md overflow-hidden">
            <tr class="font-semibold border-b">
                <th class="py-3 px-6">S/N</th>
                <th class="py-3 px-6">Order Id</th>
                <th class="py-3 px-6">Number of Orders</th>
                <th class="py-3 px-6">Status</th>
                <th class="py-3 px-6">Date</th>
            </tr>
            @foreach($orders as $order)
                <tr class="border-b text-center">
                    <td class="py-4 px-6">{{ $loop->iteration }}</td>
                    <td class="py-4 px-6">
                        <a href="{{ route('orders.show', $order->id) }}" class="underline block">{{ $order->order_id }}</a>
                    </td>
                    <td class="py-4 px-6">{{ count($order->order_details) }}</td>
                    <td class="py-4 px-6">{{ $order->order_status->status ?? 'NULL' }}</td>
                    <td class="py-4 px-6">{{ dateConvert($order->created_at) }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
