<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        <div class="bg-gray-800 w-full mx-auto p-8 rounded-md text-gray-200">
            <h1 class="font-semibold text-2xl border-b pb-4">Orders - Here you can view your orders.</h1>

            <div class="py-10 overflow-x-auto">
                <table class="w-full bg-gray-900 rounded-md overflow-hidden">
                    <tr class="font-semibold border-b">
                        <th class="p-4">S/N</th>
                        <th class="p-4">Order Id</th>
                        <th class="p-4">Number of Orders</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Date</th>
                    </tr>
                    @foreach($orders as $order)
                        <tr class="border-b">
                            <td class="p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="p-4 text-center w-2/5">#0000{{ $order->id }}</td>
                            <td class="p-4 text-center">{{ count($order->order_details) }}</td>
                            <td class="p-4 text-center">{{ $order->order_status->status }}</td>
                            <td class="p-4 text-center">{{ dateConvert($order->created_at) }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-user-dashboard>