<x-user-dashboard>
    <div class="bg-gray-900 h-full px-4 md:px-8 pt-32">
        <div class="bg-gray-800 w-full md:w-3/5 mx-auto p-8 rounded-md text-gray-200 space-y-3 font-semibold">
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>Name</span>
                <span>{{ $user->name }}</span>
            </div>
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>Email</span>
                <span class="underline">
                    <a href="mailto:{{ $user->email }}">
                        {{ $user->email }}
                    </a>
                </span>
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
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>Phone</span>
                <span class="underline">
                    <a href="tel:{{ $order->shipping_address->phone }}">
                        {{ $order->shipping_address->phone }}
                    </a>
                </span>
            </div>
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>Shipping Address</span>
                <span class="text-sm">{{ $order->shipping_address->lodge }} Lodge, {{ $order->shipping_address->area }}</span>
            </div>
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>Ready</span>
                <span>
                    <livewire:user.cart.toggle-ready id_name="ready" :model="$order" field="status" />
                </span>
            </div>

            <div class="flex justify-between border-b py-5 font-semibold">
                <span>
                    Delivered
                </span>
                <span>
                    <livewire:user.cart.toggle-deliver id_name="deliver" :model="$order" field="status" />
                </span>
            </div>

            <div class="flex justify-between border-b py-5 font-semibold">
                <span>
                    Delivered By
                </span>
                <span>
                    {{ $delivery_name ?? 'NULL' }}
                </span>
            </div>
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>
                    Payment Status
                </span>
                <span>
                    {{ $order->paystack_detail->status ?? 'NULL' }}
                </span>
            </div>
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>
                    Payment Reference
                </span>
                <span>
                    {{ $order->paystack_detail->reference ?? 'NULL' }}
                </span>
            </div>
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>
                    Payment Card Type
                </span>
                <span>
                    {{ $order->paystack_detail->card_type ?? 'NULL' }}
                </span>
            </div>
            <div class="flex justify-between border-b py-5 font-semibold">
                <span>
                    Payment Bank
                </span>
                <span>
                    {{ $order->paystack_detail->bank ?? 'NULL' }}
                </span>
            </div>
        </div>
    </div>
</x-user-dashboard>