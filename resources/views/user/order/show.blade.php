<x-user-dashboard>
    <div class="bg-gray-900 h-full p-8 pt-32">
        <div class="bg-gray-800 w-3/5 mx-auto p-8 rounded-md text-gray-200 space-y-3">
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>Name</span>
                <span>{{ $name }}</span>
            </div>
            <div class="flex justify-between border-b py-5">
                <span>OrderId</span>
                <span>#0000{{ $order->id }}</span>
            </div>
            <div class="flex justify-between border-b py-5">
                <span>Products</span>
                <div class="flex flex-col w-1/2 font-semibold">
                    @foreach($order->order_details as $item)
                    <div class="flex justify-between">
                        <span>{{ $item->product_name }} (x{{ $item->quantity }})</span>
                        <span>@money($item->total_price)</span>
                    </div>
                    @endforeach
                    <div class="flex justify-between pt-5">
                        <span>Total</span>
                        <span>@money($order->total_price)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-dashboard>